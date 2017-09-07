package com.amazonaws.lambda.dbconnection;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.GridPane;
import javafx.scene.text.Font;
import javafx.scene.text.FontWeight;
import javafx.scene.text.Text;
import javafx.stage.Stage;
public class FirstView extends Application {

	private Button btnLogin = new Button();
	private Button btnRegister = new Button();
	//private TextField tbxPassword = new TextField();
	//private TextField tbxEmail = new TextField();
	//private Button btnLogin = new Button("Login");

	//private Stage window;
	private Scene scene;

	GridPane grid = new GridPane();

	public static void main(String[] args) {
		launch(args);

	}

	@Override
	public void start(Stage primaryStage) throws Exception {
		// TODO Auto-generated method stub
		Text scenetitle = new Text("Welcome");
		scenetitle.setFont(Font.font("Tahoma", FontWeight.NORMAL, 20));
		grid.add(scenetitle, 0, 0, 2, 1);

		btnLogin.setText("Login:");
		grid.add(btnLogin, 0, 1);


		//grid.add(tbxEmail, 1, 1);

		btnRegister.setText("Register:");
		grid.add(btnRegister, 0, 2);

		//PasswordField pwBox = new PasswordField();
		//grid.add(pwBox, 1, 2);

		//HBox hbBtn = new HBox(10);
		//hbBtn.setAlignment(Pos.BOTTOM_RIGHT);
		//hbBtn.getChildren().add(btnLogin);
		//grid.add(hbBtn, 1, 4);

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

			@Override
			public void handle(ActionEvent arg0) {
				// TODO Auto-generated method stub

				
				try {
					new AdminLogin().start(new Stage());
				} catch (Exception e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}


				primaryStage.close();

			}



		});
		btnRegister.setOnAction(new EventHandler<ActionEvent>() {

			@Override
			public void handle(ActionEvent arg0) {
				// TODO Auto-generated method stub

				           
				           try {
							new Main().start(new Stage());
						} catch (Exception e) {
							// TODO Auto-generated catch block
							e.printStackTrace();
						}
			
				       
				   
				
		

				primaryStage.close();
			}
			



		});
	}

}
