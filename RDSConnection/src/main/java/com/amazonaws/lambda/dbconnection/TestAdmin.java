package com.amazonaws.lambda.dbconnection;

import java.sql.SQLException;
import java.util.ArrayList;

public class TestAdmin {

	public static void main(String[] args) {
		//java.sql.Date d1 = null;
		System.out.println("Hello There **********************************8");
		// TODO Auto-generated method stub
		ArrayList<Admin> AllAdmins = new ArrayList<Admin>();
		try {
			AllAdmins = DBManager.getAllAdmins();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		for (Admin a : AllAdmins) {
			System.out.println(a.getName());
		}

	}

}

