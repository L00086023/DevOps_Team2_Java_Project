package com.amazonaws.lambda.dbconnection;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import com.amazonaws.services.lambda.runtime.Context;
import com.amazonaws.services.lambda.runtime.RequestHandler;

public class RDSConnection implements RequestHandler<Object, String> {

	private static String url = "jdbc:mysql://l00092270.cirzp9u9acjn.eu-west-1.rds.amazonaws.com:3306/";
	private static String dbName = "DevOpsPansies?useSSL=false";
	private static String driver = "com.mysql.jdbc.Driver";
	private static String userName = "awsstudent";
	private static String password = "password";  
	private static Statement statement = null;
	private static ResultSet rs = null;
	private static Connection conn=null;
	private static String name=null;
    @Override
    public String handleRequest(Object input, Context context) {
        context.getLogger().log("Input: " + input);
        
        try {
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(url+dbName,userName,password);
			//System.out.println("Connection was successful");
			//conn.close();
			return "Connection was successful";
			
			}
        
		catch (SQLException e) {
			//e.printStackTrace();
			return "Connection was not successful";
			
			} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return null;
    }

}
