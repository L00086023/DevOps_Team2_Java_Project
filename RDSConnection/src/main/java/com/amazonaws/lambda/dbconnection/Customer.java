package com.amazonaws.lambda.dbconnection;
/**
 * 
 */

/**
 * @author Patrick Magee
 * Customer class that inherits from the person class
 *
 */
public class Customer extends Person {
	

	/**
	 * 
	 */
	public Customer() {
		// TODO Auto-generated constructor stub
	}

	/**
	 * @param name
	 * @param email
	 * @param address
	 * @param telNo
	 */
	public Customer( String name, String email, String address, String telNo) {
		super(name, email, address, telNo);
		// TODO Auto-generated constructor stub
		
	}

	@Override
	public String toString() {
		// TODO Auto-generated method stub
		return null;
	}

	

}
