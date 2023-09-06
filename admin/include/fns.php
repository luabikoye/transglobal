<?php

date_default_timezone_set("Africa/Lagos");

function root()
{

   return 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']);
}


function show_img($image_name)
{
  if(file_exists($image_name))
  {
    echo $image_name;

  }
}
function sender_name()
{
    return 'Ardova Legal System';
}

function organisation()
{
  return 'Ardova Plc';
}
function org()
{
  return 'AP';
}

function admin_email()
{
  return get_value('settings','user','administrator','admin_email');
}
function group_email()
{
  return get_value('settings','user','administrator','group_email');
}

function host_name()
{
    return 'http://'.$_SERVER['HTTP_HOST'];
}
function sender_email()
{
	  $sender_email = get_value('settings','user','administrator','sender_email');
    if(!$sender_email)
    {
      $sender_email = get_value('settings','user','administrator','smtp_email');
    }
    return $sender_email;
}

function smtp_details()
{
  global $db;

  $query = "select smtp_host, smtp_username, smtp_password, smtp_port, smtp_secure from settings where user = 'administrator'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);

  return $row;
  
}


function reply_email()
{
	return 'noreply@ardovaplc.com';
}

function host()
{
  return 'http://'.$_SERVER['HTTP_HOST'];
}

function today()
{
  return date('Y-m-d');
}

function datetime()
{
  return date('Y-m-d h:i:s');
}


function year()
{
  return date('Y');
}

function week()
{
  return date('W');
}

function doc_root()
{
	return $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
}

function check_date()
{
  return date("Y-m-d", strtotime("-7 days", strtotime(today())));
}


function yesterday()
{
  return date("Y-m-d", strtotime("-1 day", strtotime(today())));
}

function tomorrow()
{
  return date("Y-m-d", strtotime("+1 day", strtotime(today())));
}


function one_month()
{
  return date("Y-m-d", strtotime("+30 days", strtotime(today())));
}

function two_weeks()
{
  return date("Y-m-d", strtotime("+14 days", strtotime(today())));
}

function one_week()
{
  return date("Y-m-d", strtotime("+7 days", strtotime(today())));
}

function over_due($date)
{
    $today = strtotime(today());
    $date = strtotime($date);

    if($today > $date)
    {
      return 'yes';
    }
}
function end_date($effective_date)
{
  return date("Y-m-d", strtotime("+364 day", strtotime($effective_date)));
}

function long_date($date)
{
  return date('jS M, Y',strtotime($date));
}


function notice_date($date)
{
  return date('d-M, h:i a',strtotime($date));
}


function dm_date($date)
{
  return date('d-M-y',strtotime($date));
}

function check_access($access_type,$privilege)
{
 
   if(strpos($access_type,$privilege)  !== false)
   {
      return 'true';
   }
}

function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}

function get_new_deadline($timeline)
{
    $timeline = strtolower($timeline);

    if($timeline == 'annually')
    {
      $days = '365';
    }
    elseif($timeline = 'bi-annually')
    {
      $days = '182';
    }
    elseif($timeline = 'quarterly')
    {
      $days = '91';
    }
    else{
      $days = '30';
    }
    return date("Y-m-d", strtotime("+$days day", strtotime(today())));
}

function check_privilege($module)
{
   $access_type = $_SESSION['access_type'];
   
   if(strpos($access_type, ucwords($module)) !== false){
      return 'valid';
    }
    elseif($_SESSION['lms_privileges'] == 'administrator')
    {
      return 'valid';
    }
    else{
      return 'invalid';
    }
}

function get_photo($email)
{
   return './assets/img/160x160/img10.jpg';
}

function num_assignee($token,$assignee)
{
  global $db;
  $query = "select * from task where token = '$token' and author = '$assignee' and assignee = '$assignee'";
  $result = mysqli_query($db, $query);
  $num = mysqli_num_rows($result);
  if($num > 0)
  {
     return 1;
  }
  else{
    return 2;
  }
}


function no_tasks($author,$assignee,$status='none')
{
    global $db;
    if($status == 'none')
    {
    $query = "select * from task where author = '$author' or assignee = '$assignee'";
    }
    else{
      $query = "select * from task where author = '$author' and status = '$status' or assignee = '$assignee' and status = '$status'";
    }
    $result = mysqli_query($db, $query);
    $num = mysqli_num_rows($result);
    return $num;

}
function count_tab($tab,$force_count='no')
{
   global $db;
   if($_SESSION['lms_privileges'] == 'administrator' || $force_count == 'yes')
   {
      $query = "select * from $tab";
   }
   else{
    $query = "select * from $tab where author = '".$_SESSION['lms_user']."'";
   }
   
  $result = mysqli_query($db, $query);
  $num = mysqli_num_rows($result);
  return number_format($num);
}

function status_display($status)
{
    $status = strtolower($status);
    
    if($status  == 'initiated' || $status  == 'pending')
    {
        return '<span style="color: orange;"> <i class="bi-pause me-1"></i> '.ucwords($status).'</span>';
    }
    elseif($status  == 'in progress' || $status  == 'reinitiated')
    {
        return '<span style="color: orange;"> <i class="bi-play me-1"></i> '.ucwords($status).'</span>';
    }
    elseif($status  == 'in review' || $status  == 'review')
    {
        return '<span style="color: blue;"> <i class="bi-file me-1"></i> '.ucwords($status).'</span>';
    }
    elseif($status  == 'approved' || $status  == 'done' || $status  == 'closed')
    {
        return '<span style="color: green;"> <i class="bi-check me-1"></i> '.ucwords($status).'</span>';
    }
    elseif($status  == 'decline')
    {
      return '<span style="color: red;"> <i class="bi-trash me-1"></i> '.ucwords($status).'</span>';
    }
    else
    {
      return '<span style="color: orange;"> <i class="bi-pause me-1"></i> Pending</span>';
  }
}

function count_tab_val($tab,$col,$val)
{
   global $db;
  $query = "select * from $tab where $col = '$val'";
  $result = mysqli_query($db, $query);
  $num = mysqli_num_rows($result);
  return $num;
}

function count_tab_not($tab,$col,$val)
{
   global $db;
   if($_SESSION['lms_privileges'] == 'administrator')
   {
  $query = "select * from $tab where $col != '$val'";
   }
   else{
    $query = "select * from $tab where $col != '$val' and author = '".$_SESSION['lms_user']."'";
   }
  $result = mysqli_query($db, $query);
  $num = mysqli_num_rows($result);
  return $num;
}

function addto_filemanager($token,$tab,$filename,$filesize)
{
  global $db;
  $query = "insert into filemanager set token = '$token', tab = '$tab', filename='$filename', author = '".$_SESSION['lms_user']."', filesize='$filesize'";
  $result = mysqli_query($db, $query);
}

function ext_icon($filename)
{
  $file_ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));


  if($file_ext == 'jpg' || $file_ext == 'jpeg' || $file_ext == 'png' || $file_ext == 'gif')
  {
      return 'assets/svg/brands/guideline-icon.svg';
  }
  elseif($file_ext == 'doc' || $file_ext == 'docx')
  {
      return 'assets/svg/brands/word-icon.svg';
  }
  elseif($file_ext == 'ppt' || $file_ext == 'pptx')
  {
      return 'assets/svg/brands/google-slides-icon.svg';
  }
  elseif($file_ext == 'xls' || $file_ext == 'xlsx')
  {
      return 'assets/svg/brands/excel-icon.svg';
  }
  elseif($file_ext == 'pdf')
  {
      return 'assets/svg/brands/pdf-icon.svg';
  }
  else{
    return 'assets/svg/brands/google-docs-icon.svg';
  }
}

function get_filename($filename)
{
    $break_file = explode('/',$filename);
    $break_file = array_reverse($break_file);
    $file = explode('.',$break_file[0]);
    $name = $file[0];
    return $name;
}

function get_filesize($size)
{
  if($size > 1000)
  {
     $size = $size/1000;
  }
  return round($size,1);

}
function get_value($tab,$col,$val,$next_val){
  global $db;
  $select = "select * from $tab where $col = '$val'";
  $result = mysqli_query($db,$select);
  $row = mysqli_fetch_array($result);
  return $row[$next_val];
}

function status_color($status)
{
  if($status == 'pending')
  {
    return 'btn-white';
  }
  else{
    return 'btn-success';
  }
}


function get_my_stats($tab,$token)
{
  global $db;

  $query = "select * from $tab where token = '$token'";

  $result = mysqli_query($db, $query);
  $num = mysqli_num_rows($result);
  return $num;
}


function get_stats($tab,$candidate_id,$status)
{
  global $db;

  if($status == 'none')
  {
    $query = "select * from $tab where candidate_id = '$candidate_id'";
  }
  else
  {
    $query = "select * from $tab where candidate_id = '$candidate_id' and status = '$status'";
  }

  $result =  mysqli_query($db, $query);
  $num = mysqli_num_rows($result);
  return  $num;
}


function get_job() {

  global $db;

  // $candidate = $_SESSION['ics_user'];
  $query = "select * from cases where id = '".$_SESSION['id']."'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);
  return $row['id'];

}


function long_datetime($date)
{
  return date('jS M Y g:i:s A ',strtotime($date));
}
function short_date($date)
{
  return date('d M Y',strtotime($date));
}
function valid_date($date)
{
  $date = str_replace('/','-',$date);
  
  return date('Y-m-d',strtotime($date));
}

function mytime()
{
  return date('Y-m-d h:i:s');
}

function now()
{
  return date('U');
}

function expire_time()
{
    return date("Y-m-d H:i:s", strtotime("+48 hours", strtotime(now())));
}

function activity_log($user,$action)
{
	$date_time = date('Y-m-d h:i:s');

	global $db;
	$sql_1 = "insert into activity_log set author = '$user', fullname = '".get_fullname($user)."', action_taken = '$action', date = '$date_time'";
	$sql_result = mysqli_query($db, $sql_1);
}


function notification($recipient,$message)
{
	global $db;

	$date_time = date('Y-m-d h:i:s');
  $token = md5($recipient.date('U'));


	 $sql_1 = "insert into notification set token = '$token', author = '".$_SESSION['lms_user']."', recipient = '$recipient', status = 'unread', message = '$message', date = '$date_time'";
	$sql_result = mysqli_query($db, $sql_1);

}



function get_fullname($email)
{
	global $db;

	$query = "select * from profile where email = '$email'";
	$result = mysqli_query($db, $query);
	$num = mysqli_num_rows($result);
  if($num > 0)
 { 
    $row = mysqli_fetch_array($result);
	  return $row['firstname'].' '.$row['lastname'];
 }
 else{
   return 'Administrator';
 }
}

function check_unread($token)
{
  global $db;

	$query = "select * from notification where token = '$token'";
	$result = mysqli_query($db, $query);
	$num = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  if($row['status'] == 'unread')
  {
   echo 'font-weight:bold;';
  }
}

function check_process_status($token)
{
  global $db;

	$query = "select * from regulatory_compliance where token = '$token'";
	$result = mysqli_query($db, $query);
	$num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    return strtolower($row['status']);
}

function check_process($token)
{
  global $db;

	$query = "select * from process_status where token = '$token'";
	$result = mysqli_query($db, $query);
	$num = mysqli_num_rows($result);
  if($num > 0)
  {
     return 'checked';
  }
}


function get_users()
{

  global $db;
  $query = "select * from profile where firstname != 'administrator' order by firstname";
  $result = mysqli_query($db, $query);
  $num = mysqli_num_rows($result);
  for($i=0; $i<$num; $i++)
  {
    $row = mysqli_fetch_array($result);
      echo '<option value="'.$row['email'].'">'.$row['firstname'].' '.$row['lastname'].'</option>';
  }
  

}

function get_dept()
{
  
}


function dept_details($table,$brand){
  global $db;
  $select = "select * from $table";
  $result = mysqli_query($db,$select);
  $num = mysqli_num_rows($result);
  for ($i=0; $i <$num ; $i++) { 
      $row = mysqli_fetch_array($result);
      echo '<option value="'.$row[$brand].'">'.$row[$brand].'</option>'; 
  }    
}

function request_report($query, $col, $col_val)
{
  global $db;
  $query_run = "$query and $col = '$col_val'";
  $result = mysqli_query($db, $query_run);
  $num = mysqli_num_rows($result);
  return $num;
}


function list_value($table,$field,$val='none')
{
  global $db;
    
  if($val == 'none')
    {
      $value = $field;
    }

  $select = "select * from $table";
  $result = mysqli_query($db,$select);
  $num = mysqli_num_rows($result);
  for ($i=0; $i <$num ; $i++) { 
      $row = mysqli_fetch_array($result);
      echo '<option value="'.$row[$value].'">'.$row[$field].'</option>'; 
  }    
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


//get SMTP details from function that pulls from setting database table
$data = smtp_details(); 

   $mail=new PHPMailer();
   $mail->IsSMTP();    
   $mail->Port = $data['smtp_port'];
$mail->SMTPAuth = true;                
//sendgrid
$mail->Username=$data['smtp_username'];
$mail->Password = $data['smtp_password'];  //yahoo app password for noreply email 
$mail->Host= $data['smtp_host'];
$mail->SMTPSecure = $data['smtp_secure']; 
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