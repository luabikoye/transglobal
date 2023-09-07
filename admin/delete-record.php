<?php
session_start();
include('check_session.php');
include('connection/connect.php');
require_once('include/fns.php');


$tab = $_GET['tab'];
$token = $_GET['token'];
$title = $_GET['title'];
$url = $_GET['url'];


// echo

    $sql = "delete from $tab where token = '$token'";

    $result_1 = mysqli_query($db, $sql);
    
    header("Location: $url");
?>