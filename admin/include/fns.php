<?php

date_default_timezone_set("Africa/Lagos");

function root()
{

   return 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']);
}


function sender_email(){
  return 'noreply@transglobalexp.com';
}

function notification_email()
{
  return 'noreply@transglobalexp.com';
}

function org()
{
  return 'Trans Global Express';
}

function generate_tracking()
{
  $alpha1 = ucwords(chr(rand(97,122)));
  $alpha2 = ucwords(chr(rand(97,122)));
  $alpha3 = ucwords(chr(rand(97,122)));
  $tracking = $alpha1.$alpha2.$alpha3.rand(1000000,9999999);

  return $tracking;
}

function package_status($token, $status = 'none')
{
  global $db;
    if($status == 'none')
    {
      $query = "select * from tracking where shipment_token = '$token' order by id desc";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      return $row['status'];
    }
    else{
      $query = "select * from tracking where shipment_token = '$token' and status = '$status' order by id desc";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      return $row['current_location'].' '.mydatetime($row['datetime']);
    }
}

function mydate($date)
{
   return date('D d-M-Y', strtotime($date));
}

function mydatetime($date)
{
  return date('d-m-Y h:i A', strtotime($date));
}
function send_email($to,$name,$fromName,$subject,$message,$file='none')
{

// Mail Template
$mailcontent  = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:500,700,400,300" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
</head>

<body style="font-family: Calibri;">
<div style="width:100%; background-color:#FFF; padding:20px;">
	<div style="width:100%; margin:auto; padding:10px; background:#FFFFFF;">
    	 <div style="clear:both"></div>
         
         	<div id="white_area" style="background-color:#FFFFFF; ">
			<div style="font-size:16px; color:#010E42; padding-top:10px;">
			
			<div>
			<div style="margin-bottom:15px;" id="username">
            <input type="image" src="'.root().'/images/logo.png" style="width:150px;" />
            
				<p>Hello '.ucwords($name).',</p>

			</div>
			</div>
			
			<div style="font-size:16px;"> <p></p>'.$message.'
			  <p>Best Regards,<br>'.org().' Team<br><br>

			</p>
			</div>
			<br>
		   </div>
       	   </div><!-- White area ends here -->
    <div style="color:#FFF; margin-top:20px; margin-bottom:20px;">
    	<div style="text-align:center; font-size:36px;"></div>
    </div>

    <div style="clear:both;"></div>
    
    <div id="copyright" style="font-size:13px; margin-top:5px;">Copyright &copy; - '.date('Y').'. '.organisation().'</div>
    <div style="clear:both;"></div>
    </div>
</div>
</body>
</html>';


   $mail=new PHPMailer();
//    $mail->IsSMTP();    
//    $mail->Port = $data['smtp_port'];
// $mail->SMTPAuth = true;                
// //sendgrid
// $mail->Username=$data['smtp_username'];
// $mail->Password = $data['smtp_password'];  //yahoo app password for noreply email 
// $mail->Host= $data['smtp_host'];
// $mail->SMTPSecure = $data['smtp_secure']; 
$mail->From = sender_email();
$mail->FromName = $fromName;
$mail->AddAddress($to);

if($file != 'none')
{
  $files = explode(',',$file);
    for($i=0; $i<count($files); $i++)
    {
      $mail->addAttachment($files[$i]);
    }
}
   
  //  $mail->MsgHTML($body);
   $mail->CharSet = 'UTF-8';
   $mail->IsHTML(true);
   $mail->Body    = $mailcontent;
   $mail->Subject = $subject;
   $mail->IsHTML(true);
   $mail->Send();

    return $mailcontent;

}


?>