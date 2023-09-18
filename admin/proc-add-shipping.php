<?php 

session_start();

include('check_session.php');

    include('connection/connect.php');
    require_once('include/fns.php');
    require_once('PHPMailer/PHPMailerAutoload.php');
    

   $s_name = htmlspecialchars($_POST['s_name'], ENT_QUOTES, 'UTF-8');
   $s_address = htmlspecialchars($_POST['s_address'], ENT_QUOTES, 'UTF-8');
   $s_phone = htmlspecialchars($_POST['s_phone'], ENT_QUOTES, 'UTF-8');
   $s_id = htmlspecialchars($_POST['s_id'], ENT_QUOTES, 'UTF-8');
   $payment_mode = htmlspecialchars($_POST['payment_mode'], ENT_QUOTES, 'UTF-8');
   $product_type = htmlspecialchars($_POST['product_type'], ENT_QUOTES, 'UTF-8');
   $service_mode = htmlspecialchars($_POST['service_mode'], ENT_QUOTES, 'UTF-8');
   $insurance = htmlspecialchars($_POST['insurance'], ENT_QUOTES, 'UTF-8');
   $origin = htmlspecialchars($_POST['origin'], ENT_QUOTES, 'UTF-8');
   $destination = htmlspecialchars($_POST['destination'], ENT_QUOTES, 'UTF-8');
   $quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES, 'UTF-8');
   $weight = htmlspecialchars($_POST['weight'], ENT_QUOTES, 'UTF-8');
   $variable = htmlspecialchars($_POST['variable'], ENT_QUOTES, 'UTF-8');
   $freight_price = htmlspecialchars($_POST['freight_price'], ENT_QUOTES, 'UTF-8');
   $subtotal = htmlspecialchars($_POST['subtotal'], ENT_QUOTES, 'UTF-8');
   $details = htmlspecialchars($_POST['details'], ENT_QUOTES, 'UTF-8');
   $r_name = htmlspecialchars($_POST['r_name'], ENT_QUOTES, 'UTF-8');
   $r_address = htmlspecialchars($_POST['r_address'], ENT_QUOTES, 'UTF-8');
   $r_phone = htmlspecialchars($_POST['r_phone'], ENT_QUOTES, 'UTF-8');
   $r_id = htmlspecialchars($_POST['r_id'], ENT_QUOTES, 'UTF-8');
   $r_email = htmlspecialchars($_POST['r_email'], ENT_QUOTES, 'UTF-8');
   $tracking_number = htmlspecialchars($_POST['tracking_number'], ENT_QUOTES, 'UTF-8');
   $collection_date = htmlspecialchars($_POST['collection_date'], ENT_QUOTES, 'UTF-8');
   $status = htmlspecialchars($_POST['status'], ENT_QUOTES, 'UTF-8');
   $delivery_date = htmlspecialchars($_POST['delivery_date'], ENT_QUOTES, 'UTF-8');
   $completion = htmlspecialchars($_POST['completion'], ENT_QUOTES, 'UTF-8');

   $token = md5($s_phone.date('U'));

    // echo $_POST['attach1'];
    // echo '<br>';
    // echo $_FILES['attach1']['tmp_name'];

    if($s_name == '')
    {
        $error1 = 'Enter sender name';
        include('add-shipping.php');
        exit;
    }

    if($s_address == '')
    {
        $error1 = 'Enter sender address';
        include('add-shipping.php');
        exit;
    }

    if($s_phone == '')
    {
        $error1 = 'Enter sender phone';
        include('add-shipping.php');
        exit;
    }


    if($s_id == '')
    {
        $error1 = 'Enter sender id';
        include('add-shipping.php');
        exit;
    }


    if($payment_mode == '')
    {
        $error1 = 'Enter payment mode';
        include('add-shipping.php');
        exit;
    }


    if($product_type == '')
    {
        $error1 = 'Enter product type';
        include('add-shipping.php');
        exit;
    }


    if($service_mode == '')
    {
        $error1 = 'Enter service (Mode)';
        include('add-shipping.php');
        exit;
    }


    if($insurance == '')
    {
        $error1 = 'Enter insurance details';
        include('add-shipping.php');
        exit;
    }



    if($origin == '')
    {
        $error1 = 'Enter office of origin';
        include('add-shipping.php');
        exit;
    }



    if($destination == '')
    {
        $error1 = 'Enter destination office';
        include('add-shipping.php');
        exit;
    }



    if($quantity == '')
    {
        $error1 = 'Enter quantity';
        include('add-shipping.php');
        exit;
    }



    if($weight == '')
    {
        $error1 = 'Enter weight';
        include('add-shipping.php');
        exit;
    }



    if($variable == '')
    {
        $error1 = 'Enter variable';
        include('add-shipping.php');
        exit;
    }


    if($freight_price == '')
    {
        $error1 = 'Enter freight price';
        include('add-shipping.php');
        exit;
    }




    if($r_name == '')
    {
        $error1 = 'Enter receiver name';
        include('add-shipping.php');
        exit;
    }


    if($r_address == '')
    {
        $error1 = 'Enter receiver address';
        include('add-shipping.php');
        exit;
    }


    if($r_phone == '')
    {
        $error1 = 'Enter receiver phone';
        include('add-shipping.php');
        exit;
    }


    if($r_id == '')
    {
        $error1 = 'Enter receiver ID';
        include('add-shipping.php');
        exit;
    }


    if($r_email == '')
    {
        $error1 = 'Enter receiver email';
        include('add-shipping.php');
        exit;
    }


    if($tracking_number == '')
    {
        $error1 = 'Enter tracking number';
        include('add-shipping.php');
        exit;
    }


    if($collection_date == '')
    {
        $error1 = 'Enter collection date';
        include('add-shipping.php');
        exit;
    }


    if($status == '')
    {
        $error1 = 'Enter shipment status';
        include('add-shipping.php');
        exit;
    }

    if($delivery_date == '')
    {
        $error1 = 'Enter delivery date';
        include('add-shipping.php');
        exit;
    }

    // echo

    $query = "insert into shipment set token = '$token', s_name = '$s_name', s_address = '$s_address', s_phone = '$s_phone', s_id = '$s_id', payment_mode = '$payment_mode', product_type = '$product_type', service_mode = '$service_mode', insurance = '$insurance', origin = '$origin', destination = '$destination', quantity = '$quantity', weight = '$weight', variable = '$variable', freight_price = '$freight_price', subtotal = '$subtotal', details = '$details', r_name = '$r_name', r_address = '$r_address', r_phone = '$r_phone', r_id = '$r_id', r_email = '$r_email', tracking_number = '$tracking_number', collection_date = '$collection_date', status = '$status', delivery_date = '$delivery_date', completion = '$completion' ";

    // exit;

    $result = mysqli_query($db,$query);
  
    
    if($result)
    {  
        $subject = 'New Package Deliver - '.$tracking_number;

        $message = 'Reference / Tracking: '.$tracking_number.'<br><br>

        You have a parcel with us to be delivered to: <b>'.strtoupper($destination).'</b>. <br><br> Please carefully read the below instructions to retrieve your documents. <br><br>
        
        If you are not expecting any parcel of you receive any parcel from us in error. Please contact us immediate on : '.contact_email().' or using the same email address used to received this message.<br><br>
        
        Below are details on your parcel<br><br>
        
        Sender name: '.strtoupper($s_name).'<br>
        Address: '.$s_address.'<br>
        Date parcel was sent: '.mydate($collection_date).'<br><br>
        
        Receiver name: '.strtoupper($r_name).'<br>
        Address: '.$r_address.'<br>
        Expected delivery date: '.mydate($delivery_date).'<br><br>
        
        Status: <strong>'.$status.'</strong><br><br><br>
        
        Return by Courier<br><br>
        
        If you have already purchased the Courier service, your package will be dispatched within 24 business hours from their receipt to be sent back to you by courier';

        send_email($r_email, $r_name, $subject, $message, sender_email());
        $success1 = 'The shipment has been added successfully.';


        //update tracking table immediately
        $tracking_token = md5($token.date('U'));

        $query2 = "insert into tracking set token = '$tracking_token', shipment_token = '$token', completion = '$completion', status = '$status', current_location = '$origin'";
        $result2 = mysqli_query($db,$query2);

        header('location: add-shipping.php?succ=yes');
        // include('add-shipping.php');
        exit;

    }

    else
    {   
        $error1 = 'Shipment with this tracking ID already exists.';
        include('add-shipping.php');
        exit;
    }


?>