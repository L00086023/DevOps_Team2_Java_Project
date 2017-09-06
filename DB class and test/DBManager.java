
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;

import javax.swing.JOptionPane;
import javax.swing.JTextField;

import com.mysql.jdbc.PreparedStatement;
public class DBManager {
	private static String url = "jdbc:mysql://l00092270.cirzp9u9acjn.eu-west-1.rds.amazonaws.com:3306/";
	private static String dbName = "DevOpsPansies?useSSL=false";
	private static String driver = "com.mysql.jdbc.Driver";
	private static String userName = "awsstudent";
	private static String password = "password";  
	private static Statement statement = null;
	private static ResultSet rs = null;
	private static PreparedStatement sp1=null;

	public DBManager() {
		

	}
	public static void dbConnection() {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			Connection conn = DriverManager.getConnection(url+dbName,userName,password);
			System.out.println("Connection was successful");
			conn.close();
			
			}
		catch (Exception e) {
			e.printStackTrace();
			System.out.println("Connection was not successful");
			
			}
	}
	public static String getAdminName(String name) {
		try{
			Class.forName("com.mysql.jdbc.Driver");
			Connection conn = DriverManager.getConnection(url+dbName,userName,password);
			statement=conn.createStatement();
			rs=statement.executeQuery("select Name from DevOps.Admin" );
			name=rs.getString(0);

			  
			conn.close();
		} 
		catch (Exception e) {
			e.printStackTrace();
		}  
		return name;
	}
	}


