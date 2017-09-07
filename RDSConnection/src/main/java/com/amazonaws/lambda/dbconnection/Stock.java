package com.amazonaws.lambda.dbconnection;

public class Stock {
	private int SupOrderId;
	private String name;
	private String Expiry;
	private String quantity;
	private String colour;
	private double price;
	private String code;
	private int orderId;
	
	public Stock(int supOrderId, String name, String expiry, String quantity, String colour, double price,
			String code) {
		super();
		SupOrderId = supOrderId;
		this.name = name;
		Expiry = expiry;
		this.quantity = quantity;
		this.colour = colour;
		this.price = price;
		this.code = code;
	}
	public Stock(int orderId,int supOrderId, String name, String expiry, String quantity, String colour, double price,
			String code) {
		super();
		SupOrderId = supOrderId;
		this.name = name;
		Expiry = expiry;
		this.quantity = quantity;
		this.colour = colour;
		this.price = price;
		this.code = code;
		this.orderId=orderId;
	}
	public Stock() {
		super();
		// TODO Auto-generated constructor stub
	}
	
	public int getOrderId() {
		return orderId;
	}
	public void setOrderId(int orderId) {
		this.orderId = orderId;
	}
	public int getSupOrderId() {
		return SupOrderId;
	}
	public void setSupOrderId(int supOrderId) {
		SupOrderId = supOrderId;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getExpiry() {
		return Expiry;
	}
	public void setExpiry(String expiry) {
		Expiry = expiry;
	}
	public String getQuantity() {
		return quantity;
	}
	public void setQuantity(String quantity) {
		this.quantity = quantity;
	}
	public String getColour() {
		return colour;
	}
	public void setColour(String colour) {
		this.colour = colour;
	}
	public double getPrice() {
		return price;
	}
	public void setPrice(double price) {
		this.price = price;
	}
	public String getCode() {
		return code;
	}
	public void setCode(String code) {
		this.code = code;
	}
	@Override
	public String toString() {
		return "Stock [SupOrderId=" + SupOrderId + ", name=" + name + ", Expiry=" + Expiry + ", quantity=" + quantity
				+ ", colour=" + colour + ", price=" + price + ", code=" + code + "]";
	}
	
	
}
