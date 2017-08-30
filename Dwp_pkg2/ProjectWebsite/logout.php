<?php
 session_start();
                                    


   if(session_destroy()) {
      header("Location: index.php");

      unset($_SESSION['Email']);
  }

  

?>