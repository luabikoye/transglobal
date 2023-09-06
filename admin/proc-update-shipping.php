<?php 

// session_start();

// include('check_session.php');

    include('connection/connect.php');
    require_once('include/fns.php');
    // require_once('PHPMailer/PHPMailerAutoload.php');
    

   $current_location = htmlspecialchars($_POST['current_location'], ENT_QUOTES, 'UTF-8');
   $shipment_token = $_POST['shipment_token'];
   $status = htmlspecialchars($_POST['status'], ENT_QUOTES, 'UTF-8');

   $token = md5($shipment_token.date('U'));


    $query = "insert into tracking set token = '$token', shipment_token = '$shipment_token', status = '$status', current_location = '$current_location'";

    // exit;

    $result = mysqli_query($db,$query);
  
    
    if($result)
    {  

        $success1 = 'The shipment has been added successfully.';

        header('location: update-shipment.php?succ=yes&token='.$shipment_token);
        // include('add-shipping.php');
        exit;

    }

    else
    {   
        $error1 = 'Shipment error in inserting.';
        include('update-shipment.php');
        exit;
    }


?>