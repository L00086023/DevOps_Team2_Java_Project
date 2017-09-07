package com.amazonaws.lambda.dbconnection;


import java.awt.EventQueue;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.swing.JFrame;
import javax.swing.JOptionPane;
import javax.swing.JScrollPane;
import javax.swing.JTable;

//import org.apache.commons.dbutils.DbUtils;

import com.mysql.jdbc.PreparedStatement;

import net.proteanit.sql.DbUtils;

public class StockTable  {

	private JFrame frame;
	private JTable table;
	private static String url = "jdbc:mysql://l00092270.cirzp9u9acjn.eu-west-1.rds.amazonaws.com:3306/";
	private static String dbName = "DevOpsPansies?useSSL=false";
	private static String driver = "com.mysql.jdbc.Driver";
	private static String userName = "awsstudent";
	private static String password = "password";  
	private static Statement statement = null;
	private static ResultSet rs = null;
	private static Connection conn=null;
	private static String name=null;
	private  PreparedStatement sp1=null;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					StockTable window = new StockTable();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public StockTable() {
		initialize();
		showTable();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 1000, 300);
		frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
		frame.setVisible(true);
		frame.getContentPane().setLayout(null);
		frame.setTitle("Show All Stock");
		//Button btnClose;
		//frame.add(btnClose = new Button("Close"));
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setBounds(10, 0, 964, 250);
		frame.getContentPane().add(scrollPane);
		table = new JTable();
		scrollPane.setViewportView(table);
	}
	private void showTable(){
		try {
 			
			String query = "SELECT * FROM Stock ";
	         Class.forName("com.mysql.jdbc.Driver");
	         Connection conn = DriverManager.getConnection(url+dbName,userName,password);
	         statement=conn.createStatement();
	         rs=statement.executeQuery(query);
	         table.setModel(DbUtils.resultSetToTableModel(rs));
 		}catch (SQLException e){
			JOptionPane.showMessageDialog(null,"CONNECTION ERROR:",dbName, JOptionPane.ERROR_MESSAGE);
			e.printStackTrace();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

}
