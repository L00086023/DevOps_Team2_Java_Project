/**
 * 
 */
package com.amazonaws.lambda.dbconnection;
import javax.swing.JOptionPane;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.HBox;
import javafx.scene.text.Font;
import javafx.scene.text.FontWeight;
import javafx.scene.text.Text;
import javafx.stage.Stage;
/**
 * @author LSU14
 *
 */
public class AdminLogin extends Application{
	private Label lblPassword = new Label();
	private Label lblEmail = new Label();
	//private TextField tbxPassword = new TextField();
	private TextField tbxEmail = new TextField();
	private Button btnLogin = new Button("Login");

	//private Stage window;
	private Scene scene;

	GridPane grid = new GridPane();



	//public static void main(String[] args) {
		//launch(args);

	//}

	@Override
	public void start(Stage primaryStage) throws Exception {
		// TODO Auto-generated method stub

		Text scenetitle = new Text("Welcome");
		scenetitle.setFont(Font.font("Tahoma", FontWeight.NORMAL, 20));
		grid.add(scenetitle, 0, 0, 2, 1);

		lblEmail.setText("User Name:");
		grid.add(lblEmail, 0, 1);


		grid.add(tbxEmail, 1, 1);

		lblPassword.setText("Password:");
		grid.add(lblPassword, 0, 2);

		PasswordField pwBox = new PasswordField();
		grid.add(pwBox, 1, 2);

		HBox hbBtn = new HBox(10);
		hbBtn.setAlignment(Pos.BOTTOM_RIGHT);
		hbBtn.getChildren().add(btnLogin);
		grid.add(hbBtn, 1, 4);

		final Text actiontarget = new Text();
		grid.add(actiontarget, 1, 6);


		scene = new Scene(grid, 300, 275);
		primaryStage.setScene(scene);
		grid.setAlignment(Pos.CENTER);
		grid.setHgap(10);
		grid.setVgap(10);
		grid.setPadding(new Insets(25, 25, 25, 25));
		//scene = new Scene(grid, 300, 275);
		primaryStage.setScene(scene);
		primaryStage.show();

		btnLogin.setOnAction(new EventHandler<ActionEvent>() {
			@Override public void handle(ActionEvent e) {
				if(DBManager.getAdmin(tbxEmail.getText(),pwBox.getText().toString())==true) {
					JOptionPane.showMessageDialog(null, "Login successful"); 
					primaryStage.close();
					
					@SuppressWarnings("unused")
					StockCrud window = new StockCrud();
					window.initialize();
					//window.frame.setVisible(true);
					 
					

				}
				else {
					JOptionPane.showMessageDialog(null, "Login unsuccessful");
					primaryStage.close();
				}

			}
		});
	}

}
