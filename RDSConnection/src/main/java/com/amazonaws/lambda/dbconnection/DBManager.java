package com.amazonaws.lambda.dbconnection;

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
	private static Connection conn=null;
	private static String name=null;
	//private static PreparedStatement sp1=null;

	public DBManager() {


	}
	/////////////////Open database connection/////////////////////////////////////////////////////
	private static void dbConnection() {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(url+dbName,userName,password);
			System.out.println("Connection was successful");
			//conn.close();

		}
		catch (Exception e) {
			//e.printStackTrace();
			System.out.println("Connection was not successful");

		}
	}
	////////Close database connection///////////////////////////////////////////////////////////////////
	private static void closeConnection() {try {
		conn.close();
	} catch (SQLException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
	}

	//////////////Add an Administrator to the table//////////////////////////////////////////////////////////////
	public static void addAdmin(Admin cIn)   
	{ 
		dbConnection();
		try {
			java.sql.PreparedStatement pstatement = conn.prepareStatement("INSERT INTO DevOpsPansies.admin(adminId,Name,Email,DOB,Address,AdminLevel,TelNum,Password) values(?,?,?,?,?,?,?,?)");
			pstatement.setInt(1, cIn.setAdminId());
			pstatement.setString(2, cIn.getName());
			pstatement.setString(3, cIn.getEmail());
			pstatement.setString(4, cIn.getlDate());
			pstatement.setString(5,cIn.getAddress());
			pstatement.setInt(6,cIn.getAdminLvl());
			pstatement.setString(7,cIn.getTelNo());
			pstatement.setString(8,cIn.getPassword());
			pstatement.executeUpdate();
			JOptionPane.showMessageDialog(null, "Admin added to the Database");
		} catch (SQLException e1) {
			System.out.println("ERROR EXECUTING PREPARED STATEMENT");
			e1.printStackTrace();
		}

		closeConnection();
	}
	////////update Stock table////////////////////////////////////////////////////////////////////////
	public static void updateStock(Stock sIn){
		
		dbConnection();

		String query = ("update DevOpsPansies.Stock SET Name= ?,"
				+ "Expiry =?,"
				+ "quantity =?,"
				+ "Colour =?,"
				+ "price= ?,"
				+ "code= ? WHERE Stock.IdStock= ?");
		try {
			java.sql.PreparedStatement ps = conn.prepareStatement(query);
			ps.setString(1,sIn.getName());
			ps.setString(2, sIn.getExpiry());
			ps.setString(3, sIn.getQuantity());
			ps.setString(4, sIn.getColour());
			ps.setDouble(5, sIn.getPrice());
			ps.setString(6, sIn.getCode());
			ps.setInt(7, sIn.getOrderId());
			ps.executeUpdate();
			ps.close();
			JOptionPane.showMessageDialog(null, "update successfull");
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		closeConnection();

	}
	/// delete session/////////////////////////////////////////////////////////////////////////////// 
	public static int deleteSession(int seNoIn)   
	{
		int status=0;  
		String sqlString= "DELETE FROM newdb.session where session_id="+seNoIn;     
		//try {
		//DbConnecter.runQuery(sqlString);
		databaseUpdate(sqlString);
		//} catch (SQLException e) {
		// TODO Auto-generated catch block
		//e.printStackTrace();
		//}
		status = databaseUpdate(sqlString); 
		JOptionPane.showMessageDialog(null, "Session deleted");
		return status;
	}
	//////////////Add  Stock to the table//////////////////////////////////////////////////////////////
	public static void addStock(Stock sIn)   
	{ 
		dbConnection();
		try {
			java.sql.PreparedStatement pstatement = conn.prepareStatement("INSERT INTO DevOpsPansies.Stock(SuppOrderId,Name,Expiry,quantity,Colour,price,code) values(?,?,?,?,?,?,?)");
			pstatement.setInt(1, sIn.getSupOrderId());
			pstatement.setString(2, sIn.getName());
			pstatement.setString(3, sIn.getExpiry());
			pstatement.setString(4,sIn.getQuantity());
			pstatement.setString(5,sIn.getColour());
			pstatement.setDouble(6,sIn.getPrice());
			pstatement.setString(7,sIn.getCode());
			pstatement.executeUpdate();
			JOptionPane.showMessageDialog(null, "Stock added to the Stock table");
		} catch (SQLException e1) {
			System.out.println("ERROR EXECUTING PREPARED STATEMENT");
			e1.printStackTrace();
		}

		closeConnection();
	}
	/// getAllAdministrators//////////////////////////////////////////////////////////////////////////////////////
	public static  ArrayList<Admin> getAllAdmins() throws SQLException      { 
		ArrayList<Admin> AllAdmins = new ArrayList<Admin>();
		dbConnection();
		statement=conn.createStatement();
		rs=statement.executeQuery("select * from DevOpsPansies.admin");

		while ( rs.next() )    {
			Admin nextAdmin = new Admin(rs.getString(2),rs.getString(3), rs.getString(4),rs.getString(5),
					rs.getString(6),rs.getInt(7),rs.getString(8));

			AllAdmins.add(nextAdmin);


		}
		closeConnection();
		return AllAdmins;

	}
	////update database////////////////////////////////////////////////////////////////////
	private static int databaseUpdate(String sqlUpdate)
	{
		int status=0;

		try{
			dbConnection();
			statement=conn.createStatement();
			status=statement.executeUpdate(sqlUpdate);
			JOptionPane.showMessageDialog(null, "Record updated");

		}       

		catch (Exception e) {
			e.printStackTrace();
		} 
		closeConnection();
		return status;
	}
	/// delete an Administrator/////////////////////////////////////////////////////////////////////////////// 
	public static int deleteAdmin(int custNoIn)   
	{
		int status=0;  
		String sqlString= "delete from DevOpsPansies.admin where AdminId=" + custNoIn;     
		status = databaseUpdate(sqlString);  
		JOptionPane.showMessageDialog(null, "Customer deleted");
		return status;
	}
	/////////Update the Administrator table///////////////////////////////////////////////////////////////////
	public static void updateAdministrator(Admin cIn){

		dbConnection();
		String query = ("update DevOpsPansies.admin SET Name=?,"
				+ "Email =?,"
				+ "DOB =?,"
				+ "Address =?,"
				+ "AdminLevel= ?,"
				+ "TelNum= ?,"
				+ "Password= ?,"
				+"WHERE AdminId="+cIn.getAdminId());
		try {
			java.sql.PreparedStatement ps = conn.prepareStatement(query);
			ps.setString(2, cIn.getName());
			ps.setString(3, cIn.getEmail());
			ps.setString(4, cIn.getlDate());
			ps.setString(5, cIn.getAddress());
			ps.setInt(6, cIn.getAdminLvl());
			ps.setString(7, cIn.getTelNo());
			ps.setString(8, cIn.getPassword());
			//ps.setBoolean(8, isbooked);
			ps.executeUpdate();
			ps.close();

			//JOptionPane.showMessageDialog(null, "update successfull");
			int status=0;
			status = databaseUpdate(query);
			JOptionPane.showMessageDialog(null, "Database Updated Successfully");    
		} catch (SQLException e1e) {
			JOptionPane.showMessageDialog(null, "ERROR UPDATING PREPARED STATEMENT");
			e1e.printStackTrace();
		}

	}
	public static int getStock(int stockid) {
		dbConnection();
		String query = "SELECT *  DevOpsPansies.Stock where IdStock=" + stockid; 
		try {
			java.sql.PreparedStatement ps = conn.prepareStatement(query);
		} catch (SQLException e) {
			JOptionPane.showMessageDialog(null, "ERROR EXECUTING PREPARED STATEMENT");
			e.printStackTrace();
		}
		return stockid;
	}
	// getAdministrator////////////////////////////////////////////////////////////////////////////////////// 
	public static boolean getAdmin(String  email,String pwd)
	{
		String got1 = null,got2 = null;
		//Admin foundAdmin= new Admin();
		try{
			Class.forName("com.mysql.jdbc.Driver");
			Connection conn = DriverManager.getConnection(url+dbName,userName,password);
			statement=conn.createStatement();
			String query = "SELECT *"
					+ "FROM DevOpsPansies.admin WHERE (Email=? AND Password=?)";
			java.sql.PreparedStatement ps = conn.prepareStatement(query);
			ps.setString(1, email);
			ps.setString(2, pwd);
			//ps.executeQuery();
			ResultSet rs = ps.executeQuery();

			//rs=statement.executeQuery("select (Email,Passorrd) from DevOpsPansies.admin where (Email=? AND Password=?)");


			if(rs.next()) {
				got1 = (rs.getString(3));
				got2  =(rs.getString(8));                
			}
			if(got1.equals(email) && got2.equals(pwd)) {
				//System.out.println(got1+ "***"+got2);
				return true;
			}
			else {
				//System.out.println(got1+ "***"+got2);
				return false;

			}

		} 
		catch (Exception e) {
			e.printStackTrace();
		}  
		return false;
		//conn.close();
	}

}


