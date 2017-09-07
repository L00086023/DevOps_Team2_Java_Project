package com.amazonaws.lambda.dbconnection;
/**
 * 
 */

/**
 * @author Patrick Magee
 * Abstract Person class
 * 17/08/2017
 *
 */
public abstract class Person {

	private String name;
	private String email;
	private String address;
	private String telNo;
	
	
	public Person() {
		// TODO Auto-generated constructor stub
	}
	public Person(String name, String email, String address, String telNo) {
		super();
		this.name = name;
		this.email = email;
		this.address = address;
		this.telNo = telNo;
	}


	public String getName() {
		return name;
	}


	public void setName(String name) {
		this.name = name;
	}


	public String getEmail() {
		return email;
	}


	public void setEmail(String email) {
		this.email = email;
	}


	public String getAddress() {
		return address;
	}


	public void setAddress(String address) {
		this.address = address;
	}


	public String getTelNo() {
		return telNo;
	}


	public void setTelNo(String telNo) {
		this.telNo = telNo;
	}
	
	@Override
	public abstract String toString();
	
	
	
	

}
