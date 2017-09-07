package com.amazonaws.lambda.dbconnection;

import java.io.Serializable;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Date;

import com.mysql.jdbc.PreparedStatement;
public class GenerateID {
	private static String url = "jdbc:mysql://l00092270.cirzp9u9acjn.eu-west-1.rds.amazonaws.com:3306/";
	private static String dbName = "DevOpsPansies?useSSL=false";
	private static String driver = "com.mysql.jdbc.Driver";
	private static String userName = "awsstudent";
	private static String password = "password";  
	private static Statement statement = null;
	private static ResultSet rs = null;
	private static Connection conn=null;
	private static String name=null;
	private static int id;
	
	public static int setAdminId(){
		try {
			Class.forName("com.mysql.jdbc.Driver");
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
        Connection conn = null;
		try {
			conn = DriverManager.getConnection(url+dbName,userName,password);
			statement=conn.createStatement();
	         rs=statement.executeQuery
	        		 ("select MAX(AdminId) from DevOpsPansies.admin");
	        while(rs.next())
	          id = rs.getInt(1);
	         //System.out.println(id);
	        
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return id+1;
	}
	
}
