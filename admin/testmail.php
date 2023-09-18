<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);

require_once('include/fns.php');

require_once('PHPMailer/PHPMailerAutoload.php');

send_email('luabikoye@yahoo.com', 'Bayo Atere', 'Mail in sin yahoo', 'Benzima', 'noreply@ffiu.com');

echo 'Sent Message';

?>