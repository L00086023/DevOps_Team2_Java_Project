package com.amazonaws.lambda.demo;



import javax.swing.JOptionPane;

import com.amazonaws.services.lambda.runtime.Context;
import com.amazonaws.services.lambda.runtime.RequestHandler;

public class LambdaFunctionHandler implements RequestHandler<Object, String> {

	@Override
	public String handleRequest(Object input, Context context) {
		context.getLogger().log("Input: " + input);

		//Scanner s = new Scanner(System.in);
		//System.out.println("Enter a euro value");
		//euro = s.nextInt();
		double euro = 200,sterling = 200;
		//euroToStg(euro);
		

		return "Your Sterling is "+euroToStg(euro) + "Your euro is"+sterlingToEuro(sterling);
	}
	private double euroToStg(double euro){
		return euro*.91;
	}

	private double sterlingToEuro(double sterling){
		return sterling*1.09;
	}
	//end class

}

