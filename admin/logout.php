<?php
 
 session_start();
 
 session_unset($_SESSION['trans_valid_user']);
 session_destroy();
 
 header("Location: index.php");

 
 ?>

