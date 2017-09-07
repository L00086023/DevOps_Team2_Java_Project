package com.amazonaws.lambda.dbconnection;

import java.net.URL;
import java.util.ResourceBundle;

import javax.swing.JOptionPane;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;

public class MainController implements Initializable {
	@FXML private TextField tbxName;
	@FXML private TextField tbxAddr;
	@FXML private TextField tbxEmail;
	@FXML private TextField tbxTelNo;
	@FXML private PasswordField tbxPassword;
	@FXML private PasswordField tbxConfirmPwd;
	@FXML private TextField tbxDate;
	@FXML private ComboBox<Integer> adminLevel;
	@FXML private Button btnSubmit;
	private Admin NewAdmin;
	private AdminGui main;
	
	public void setMain(AdminGui main) {
		this.main=main;
	}
	ObservableList<Integer> list = FXCollections.observableArrayList(1,2);
	
	/* (non-Javadoc)
	 * @see javafx.fxml.Initializable#initialize(java.net.URL, java.util.ResourceBundle)
	 */
	@Override
	public void initialize(URL arg0, ResourceBundle arg1) {
		// TODO Auto-generated method stub
		
		adminLevel.setItems(list);
		adminLevel.getItems().addAll(1,2);
		btnSubmit.setOnAction(new EventHandler<ActionEvent>() {
		   	
			@Override
			public void handle(ActionEvent event) {
				// TODO Auto-generated method stub
				NewAdmin = new Admin();
				NewAdmin.setName(tbxName.getText().toString());
				NewAdmin.setEmail(tbxEmail.getText());
				NewAdmin.setDate(tbxDate.getText());
				NewAdmin.setAddress(tbxAddr.getText());
				NewAdmin.setAdminLvl(1);
				NewAdmin.setTelNo(tbxTelNo.getText());
				NewAdmin.setPassword(tbxConfirmPwd.getText().toString());
				NewAdmin.setAdminId();
				DBManager.addAdmin(NewAdmin);
				//JOptionPane.showMessageDialog(null, "Admin added to the Database");
			}

			
		});		
	}	
}
