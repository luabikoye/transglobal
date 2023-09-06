<?php

function host_name()
{
    return 'aledoyhost.com';
}

function sender_name()
{
    return 'noreply@aledoyhost.com';
}

function admin_email()
{
    return 'admin@aledoyhost.com';
}

function get_end_time($start)
{
    
  return date("Y-m-d: H:i:s", strtotime("+ 29 mins", strtotime($start))); 
}




?>