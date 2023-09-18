<?php 

// session_start();

// include('check_session.php');

    include('connection/connect.php');
    require_once('include/fns.php');
    require_once('PHPMailer/PHPMailerAutoload.php');
    

   $current_location = htmlspecialchars($_POST['current_location'], ENT_QUOTES, 'UTF-8');
   $shipment_token = $_POST['shipment_token'];
   $completion = $_POST['completion'];
   $status = htmlspecialchars($_POST['status'], ENT_QUOTES, 'UTF-8');

   $email = get_val($shipment_token,'r_email');
   $name  = get_val($shipment_token,'r_name');

   $token = md5($shipment_token.date('U'));


    $query = "insert into tracking set token = '$token', shipment_token = '$shipment_token', completion = '$completion', status = '$status', current_location = '$current_location'";

    // exit;

    $result = mysqli_query($db,$query);
  
    
    if($result)
    {  

        $subject = 'Progress Update on Deliver - '.get_val($shipment_token,'tracking_id');

        $message = '<b>Below is an update on your package</b><br><br>

        Reference / Tracking: '.get_val($shipment_token,'tracking_number').'<br><br>
        Sender: '.strtoupper(get_val($shipment_token,'s_name')).'<br>
        Receiver: '.strtoupper(get_val($shipment_token,'r_name')).'<br>
        Status: '.strtoupper($status).'<br>
        Current Location: '.strtoupper($current_location).'<br>';

        send_email($email, $name,$subject, $message, sender_email());
        
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