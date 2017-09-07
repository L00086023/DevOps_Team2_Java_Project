package com.amazonaws.lambda.dbconnection;

/**
 * 
 */

/**
 * @author LSU14
 *
 */
public class Admin extends Person {
	private String Date;
	private int adminLvl;
	private int adminId;
	private String password;

	/**
	 * 
	 */
	

	/**
	 * @param name
	 * @param email
	 * @param address
	 * @param telNo
	 */
	public Admin(String name, String email, String address, String telNo,String Date,int adminLevel,String password) {
		super(name, email, address, telNo);
		this.adminLvl=adminLevel;
		this.Date=Date;
		//adminId=GenerateID.setAdminId();
		this.password=password;
		// TODO Auto-generated constructor stub
	}
	


	public Admin() {
		super();
		//adminId=GenerateID.setAdminId();
	}
	public int setAdminId() {
		 return adminId=GenerateID.setAdminId();
	}

	public  int getAdminId() {
		return adminId;
	}

	public String getlDate() {
		return Date;
	}

	public void setDate(String sqlDate) {
		this.Date = sqlDate;
	}

	public int getAdminLvl() {
		return adminLvl;
	}

	public void setAdminLvl(int adminLvl) {
		this.adminLvl = adminLvl;
	}
	
	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	@Override
	public String toString() {
		return "Admin [DOB=" + Date + ", adminLvl=" + adminLvl + ", getName()=" + getName() + ", getEmail()="
				+ getEmail() + ", getAddress()=" + getAddress() + ", getTelNo()=" + getTelNo() + ", Admin id=" + getAdminId() + "Password = "
						+ getPassword()+ "]";
	}

	
	

	

}
