<?php

date_default_timezone_set("Africa/Lagos");


function root()
{

   return 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']);
}

function website()
{

   return 'http://'.$_SERVER['HTTP_HOST'].'/';
}

function contact_email()
{
  return 'tracking@transglobalexp.com';
}

function sender_email(){
  return 'noreply@transglobalexp.com';
}

function notification_email()
{
  // return 'info@transglobalexp.com';
  return 'luabikoye@yahoo.com';
}

function org()
{
  return 'Trans Global Express Holland';
}

function organisation()
{
  return 'Trans Global Express Holland';
}

function imgpath()
{
	global $imgpath;
	return $imgpath;

}

function generate_tracking()
{
  $alpha1 = ucwords(chr(rand(97,122)));
  $alpha2 = ucwords(chr(rand(97,122)));
  $alpha3 = ucwords(chr(rand(97,122)));
  $tracking = $alpha1.$alpha2.$alpha3.rand(1000000,9999999);

  return $tracking;
}


function count_tab($tab,$distinct = 'none')
{
      global $db;
      if($distinct == 'none')
      {
        $query = "select * from $tab";
      }else{

        $query = "select distinct $distinct from $tab";
      }
      $result = mysqli_query($db, $query);
      $num = mysqli_num_rows($result);
      return $num;
}

function count_tab_status($tab,$status)
{
      global $db;
      $query = "select * from $tab where status = '$status'";
      $result = mysqli_query($db, $query);
      $num = mysqli_num_rows($result);
      return $num;
}

function count_tracking($token)
{
      global $db;
      $query = "select * from tracking where shipment_token = '$token'";
      $result = mysqli_query($db, $query);
      $num = mysqli_num_rows($result);
      return $num;
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
      $num = mysqli_num_rows($result);
      if($num > 0)
      {
        $row = mysqli_fetch_array($result);
        return $row['current_location'].' '.mydatetime($row['datetime']);
      }
      else
      {
        return 'Information not available';
      }
      
    }
}

function get_completion($token)
{
  global $db;
      $query = "select * from tracking where shipment_token = '$token' order by id desc";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      return $row['completion'];
}

function get_val($token,$col)
{
      global $db;
      $query = "select * from shipment where token = '$token' order by id desc";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      return $row[$col];
}

function mydate($date)
{
   return date('D d-M-Y', strtotime($date));
}

function mydatetime($date)
{
  return date('d-m-Y h:i A', strtotime($date));
}

function send_email($to,$recipient_name,$subject,$content,$sender_email)
{
	
	$mailcontent = '<div style="width:650px; border-color:red; border-width:1px; border-style:solid; font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;">
		  
	<div style="text-align:center; margin-top: 15px;"><img src="'.root().'/banner.jpg" style="width:100%;"></div>
  
	<div style="padding:15px;">Dear '.$recipient_name.', <br><br>
	'.$content.'<br><br>
				  

  You can track the progress of your package on our website via : <a href="'.website().'">'.website().'</a>
<br><br>
  <strong>Please note that all third party collections above will require a means of national identification</strong> e.g. International Passport, National ID Card, Driver’s License.
  <br><br>
	Warm Regards,<br>
	'.organisation().' 
   
  <div style="width: 100%; height: 1px; background-color: red; margin-top: 40px;"> &nbsp; </div>
				  <br><img src="'.root().'/social.jpg">
  
			  </div>
		  
		  </div>
  ';
  

  $mail=new PHPMailer();
  $mail->IsSMTP();    
   $mail->Port = 465;
$mail->SMTPAuth = true;                
//sendgrid
$mail->Username= 'alert@transglobalex.com';
$mail->Password = 'Gwogwo123';  //yahoo app password for noreply email 
$mail->Host='server303.web-hosting.com';
$mail->SMTPSecure = 'ssl'; 
$mail->From = 'alert@transglobalex.com';
$mail->FromName = org();
$mail->AddAddress($to);

  
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