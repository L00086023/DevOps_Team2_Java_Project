package com.amazonaws.lambda.dbconnection;

import java.awt.EventQueue;
import java.awt.Font;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextField;

import com.mysql.jdbc.PreparedStatement;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class StockCrud {

	JFrame frame;
	private JTextField tbxOrderId;
	private JTextField tbxName;
	private JTextField tbxExpiry;
	private JTextField tbxQuantity;
	private JTextField tbxColour;
	private JTextField tbxPrice;
	private JTextField tbxCode;
	
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
	JComboBox comboBox;
	/**
	 * Launch the application.
	 */
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					StockCrud window = new StockCrud();
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
	public StockCrud() {
		initialize();
		//updateBox();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	
	private void initialize() {
		frame = new JFrame("Stock ADD/EDIT/UPDATE/DELETE");
		frame.setBounds(100, 100, 503, 539);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		comboBox = new JComboBox();
		comboBox.setBounds(344, 11, 133, 20);
		frame.getContentPane().add(comboBox);
		
		tbxOrderId = new JTextField();
		tbxOrderId.setBounds(344, 56, 133, 20);
		frame.getContentPane().add(tbxOrderId);
		tbxOrderId.setColumns(10);
		tbxOrderId.setText("1");
		tbxOrderId.setEditable(false);
		
		tbxName = new JTextField();
		tbxName.setText("");
		tbxName.setBounds(344, 104, 133, 20);
		frame.getContentPane().add(tbxName);
		tbxName.setColumns(10);
		
		tbxExpiry = new JTextField();
		tbxExpiry.setText("");
		tbxExpiry.setBounds(344, 158, 133, 20);
		frame.getContentPane().add(tbxExpiry);
		tbxExpiry.setColumns(10);
		
		tbxQuantity = new JTextField();
		tbxQuantity.setBounds(344, 210, 133, 20);
		frame.getContentPane().add(tbxQuantity);
		tbxQuantity.setColumns(10);
		
		tbxColour = new JTextField();
		tbxColour.setBounds(344, 266, 133, 20);
		frame.getContentPane().add(tbxColour);
		tbxColour.setColumns(10);
		
		tbxPrice = new JTextField();
		tbxPrice.setText("");
		tbxPrice.setBounds(344, 314, 133, 20);
		frame.getContentPane().add(tbxPrice);
		tbxPrice.setColumns(10);
		
		tbxCode = new JTextField();
		tbxCode.setBounds(344, 361, 133, 20);
		frame.getContentPane().add(tbxCode);
		tbxCode.setColumns(10);
		
		JButton btnAddStock = new JButton("Add Stock");
		btnAddStock.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Stock s1 = new Stock();
				//int id = Integer.parseInt(tbxOrderId.getText());
				s1.setSupOrderId(1);
				s1.setName(tbxName.getText());
				s1.setExpiry(tbxExpiry.getText());
				s1.setQuantity(tbxQuantity.getText());
				s1.setColour(tbxColour.getText());
				double price = Double.parseDouble(tbxPrice.getText());
				s1.setPrice(price);
				s1.setCode(tbxCode.getText());
				DBManager.addStock(s1);
				tbxName.setText("");
				tbxExpiry.setText("");
				tbxQuantity.setText("");
				tbxColour.setText("");
				tbxPrice.setText("");
				tbxCode.setText("");
			}
		});
		btnAddStock.setBounds(0, 419, 104, 23);
		frame.getContentPane().add(btnAddStock);
		
		JButton btnEditStock = new JButton("Edit Stock");
		btnEditStock.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				int id = (int)comboBox.getSelectedItem();
				
				
			
				Stock s1 = new Stock();
				int id2 = Integer.parseInt(tbxOrderId.getText());
				s1.setOrderId((int)comboBox.getSelectedItem());
				s1.setSupOrderId(id2);
				s1.setName(tbxName.getText());
				s1.setExpiry(tbxExpiry.getText());
				s1.setQuantity(tbxQuantity.getText());
				s1.setColour(tbxColour.getText());
				double price = Double.parseDouble(tbxPrice.getText());
				s1.setPrice(price);
				s1.setCode(tbxCode.getText());
				DBManager.updateStock(s1);
				tbxName.setText("");
				tbxExpiry.setText("");
				tbxQuantity.setText("");
				tbxColour.setText("");
				tbxPrice.setText("");
				tbxCode.setText("");
				
				
			}
		});
		btnEditStock.setBounds(114, 419, 104, 23);
		frame.getContentPane().add(btnEditStock);
		
		JButton btnDeleteStock = new JButton("Delete Stock");
		btnDeleteStock.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				int id = (int)comboBox.getSelectedItem();
				try {
					String query  = "DELETE  from DevOpsPansies.Stock WHERE Stock.IdStock="+id;
					Class.forName("com.mysql.jdbc.Driver");
					Connection conn = DriverManager.getConnection(url+dbName,userName,password);
					statement=conn.createStatement();
					statement.executeUpdate(query);
		        	 tbxName.setText("");
					 tbxExpiry.setText("");
					 tbxQuantity.setText("");
					 tbxColour.setText("");
					 tbxPrice.setText("");
					 tbxCode.setText("");
					 tbxOrderId.setText("");
					 comboBox.removeAll();
					 //updateBox();
		        	 
		        	 
		         
		         conn.close();
		       
			}catch (Exception ec){
				JOptionPane.showMessageDialog(null,"ERROR:",dbName, JOptionPane.ERROR_MESSAGE);
				ec.printStackTrace();
			}
			}	
		
		});
			
		btnDeleteStock.setBounds(218, 419, 126, 23);
		frame.getContentPane().add(btnDeleteStock);
		
		JLabel lblStockId = new JLabel("Stock ID:");
		lblStockId.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblStockId.setBounds(10, 14, 79, 17);
		frame.getContentPane().add(lblStockId);
		
		JLabel lblSuppOrderId = new JLabel("Supplier Order ID:");
		lblSuppOrderId.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblSuppOrderId.setBounds(10, 59, 133, 17);
		frame.getContentPane().add(lblSuppOrderId);
		
		JLabel lblName = new JLabel("Name:");
		lblName.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblName.setBounds(10, 107, 79, 17);
		frame.getContentPane().add(lblName);
		
		JLabel lblExpiry = new JLabel("Expiry");
		lblExpiry.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblExpiry.setBounds(10, 161, 79, 17);
		frame.getContentPane().add(lblExpiry);
		
		JLabel lblQty = new JLabel("Quantity");
		lblQty.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblQty.setBounds(10, 213, 79, 17);
		frame.getContentPane().add(lblQty);
		
		JLabel lblColour = new JLabel("Colour");
		lblColour.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblColour.setBounds(10, 269, 79, 17);
		frame.getContentPane().add(lblColour);
		
		JLabel lblPrice = new JLabel("Price: €");
		lblPrice.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblPrice.setBounds(10, 317, 79, 17);
		frame.getContentPane().add(lblPrice);
		
		JLabel lblCode = new JLabel("Code:");
		lblCode.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblCode.setBounds(10, 364, 79, 17);
		frame.getContentPane().add(lblCode);
		
		JButton btnViewAllStock = new JButton("View all stock");
		btnViewAllStock.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				StockTable sg1 = new StockTable();
			}
		});
		btnViewAllStock.setBounds(344, 419, 133, 23);
		frame.getContentPane().add(btnViewAllStock);
		
		JButton btnViewStockBy = new JButton("View Stock By ID:");
		btnViewStockBy.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				 
				int id = (int)comboBox.getSelectedItem();
				try {
					String query  = "SELECT * from DevOpsPansies.Stock WHERE Stock.IdStock="+id;
					Class.forName("com.mysql.jdbc.Driver");
					Connection conn = DriverManager.getConnection(url+dbName,userName,password);
					statement=conn.createStatement();
					rs=statement.executeQuery(query);
		         
		         while (rs.next()){
		        	 //comboBox.addItem(rs.getInt(1));
		        	 //String myString = Integer.toString(rs.getInt(2));
		        	 tbxName.setText(rs.getString(3));
					 tbxExpiry.setText(rs.getString(4));
					 tbxQuantity.setText(rs.getString(6));
					 tbxColour.setText(rs.getString(6));
					 String priceString = Double.toString(rs.getDouble(7));
					 tbxPrice.setText(priceString);
					 tbxCode.setText(rs.getString(8));
					 //tbxOrderId.setText("");
		        	 
		        	 
		         }
		         conn.close();
		       
			}catch (Exception ec){
				JOptionPane.showMessageDialog(null,"ERROR:",dbName, JOptionPane.ERROR_MESSAGE);
			}
				
			}
		});
		btnViewStockBy.setBounds(175, 466, 133, 23);
		frame.getContentPane().add(btnViewStockBy);
		try {
			String query = "SELECT IdStock FROM DevOpsPansies.Stock ";
	         Class.forName("com.mysql.jdbc.Driver");
	         Connection conn = DriverManager.getConnection(url+dbName,userName,password);
	         statement=conn.createStatement();
	         rs=statement.executeQuery(query);
	         
	         while (rs.next()){
	        	 comboBox.addItem(rs.getInt(1)); 
	         }
	         conn.close();
	       
		}catch (Exception e){
			JOptionPane.showMessageDialog(null,"ERROR:",dbName, JOptionPane.ERROR_MESSAGE);
		}
		
	}
}

