/**
 * 
 */
package com.amazonaws.lambda.dbconnection;
import java.io.IOException;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
/**
 * @author LSU14
 *
 */
public class AdminGui extends Application {
	private Stage primaryStage;
		//Stage window;
		//Scene scene;
		//TextField tbxName;
	public static void main(String[] args) {
		launch(args);
		

	}
	@Override
	public void start(Stage primaryStage) throws Exception {
		this.primaryStage=primaryStage;
		mainWindow();
		// TODO Auto-generated method stub
		//primaryStage.setTitle("Administrator Registration");
		//FXMLLoader loader = new FXMLLoader(getClass().getResource("/MyFile.fxml"));
		//Parent root = FXMLLoader.load(getClass().getResource("/MyFile.fxml"));
		//AnchorPane pane = loader.load();
		//Scene scene = new Scene(root);
		//primaryStage.setScene(scene);
		//primaryStage.show();
		
		
		
	}
	public void mainWindow() {
		
		try {
			
			FXMLLoader loader = new FXMLLoader(getClass().getResource("/MyFile.fxml"));
			AnchorPane pane = loader.load();
			MainController mainCtrl = loader.getController();
			mainCtrl.setMain(this);
			Scene scene = new Scene(pane);
			primaryStage.setScene(scene);
			primaryStage.show();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

}
