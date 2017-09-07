package com.amazonaws.lambda.dbconnection;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class Main extends Application{ 
	//Stage primaryStage = new Stage();
	 TextField tbxName = new TextField();
	 Label lblName = new Label();
	 Label lblAddr = new Label();
	 Label lblDob = new Label();
	 Label lblEmail = new Label();
	 Label lblTelNum = new Label();
	 Label lblPwd = new Label();
	 Label lblLevel = new Label();
	 
	 private TextField tbxAddr = new TextField();
	 private TextField tbxEmail = new TextField();;
	 private TextField tbxTelNo = new TextField();;
	 private PasswordField tbxPassword= new PasswordField();;
	 private TextField tbxDate = new TextField();
	 private TextField tbxAdminLevel = new TextField();
	 
	 private Button btnSubmit = new Button("Register");
	 private Button btnClose = new Button("Close");
	 Admin NewAdmin;
	 
	  Stage window;
	  Scene scene;
	//public static void main(String[] args) {
		//launch(args);

	//}


	


	public void start(Stage primaryStage) throws Exception {
			NewAdmin = new Admin();
			btnSubmit.setText("Submit");
			lblName.setText("Name:");
			lblEmail.setText("Email:");
			lblDob.setText("Date of Birth: (DD/MM/YYYY)");
			lblAddr.setText("Address:");
			lblLevel.setText("Admin level:");
			lblTelNum.setText("Telephone NO:");
			lblPwd.setText("Password:");
			tbxName.setPromptText("Name");
			window = primaryStage;
			VBox layout = new VBox(20);
			layout.setPadding(new Insets(20,20,20,20));
			layout.getChildren().addAll(lblName,tbxName,lblEmail,tbxEmail,lblDob,tbxDate,lblAddr,tbxAddr,lblLevel,tbxAdminLevel,
					lblTelNum,tbxTelNo,lblPwd,tbxPassword,btnSubmit,btnClose);
			//ayout.getChildren().add(tbxName);
			//layout.getChildren().addAll(tbxName,tbxAddr);//tbxEmail,tbxTelNo,tbxPassword,tbxConfirmPwd,tbxDate,btnSubmit);
			scene = new Scene(layout,700,700);
			window.setScene(scene);
			window.show();
			btnSubmit.setOnAction(new EventHandler<ActionEvent>() {
	            @Override
	            public void handle(ActionEvent event) {
	            	
	                try {
						NewAdmin.setName(tbxName.getText());
						NewAdmin.setEmail(tbxEmail.getText());
						NewAdmin.setDate(tbxDate.getText());
						NewAdmin.setAddress(tbxAddr.getText());
						int number = Integer.parseInt(tbxAdminLevel.getText());
						NewAdmin.setAdminLvl(number);
						NewAdmin.setTelNo(tbxTelNo.getText());
						NewAdmin.setPassword(tbxPassword.getText().toString());
						NewAdmin.setAdminId();
					} catch (NumberFormatException e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
	                DBManager.addAdmin(NewAdmin);
	                tbxName.setText("");
	                tbxAddr.setText(""); 
	           	  	tbxEmail.setText(""); 
	           	  	tbxTelNo.setText("");
	           	  	tbxPassword.setText("");
	           	  	tbxAdminLevel.setText("");
	           	  	tbxDate.setText("");
	                
	            }
	        });
	
	
	btnClose.setOnAction(new EventHandler<ActionEvent>() {
        @Override
        public void handle(ActionEvent event) {
        	window.close();
        	
        }
    });
}
}
