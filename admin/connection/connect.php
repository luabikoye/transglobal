<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);

date_default_timezone_set('Africa/Lagos');

$db = mysqli_connect('localhost', 'tranyngc_gwo', 'H0bcPO8MA2RWwwvY', 'tranyngc_gwo' ) or die ('Cannot connect to database');

  
// $db = mysqli_connect('localhost', 'transglo', 'H0bcPO8MA2RWwwvY', 'transglo' ) or die ('Cannot connect to database');

  
    

?>