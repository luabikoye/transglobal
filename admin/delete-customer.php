<?php

    include ('connection/connect.php');

    $id = $_GET['id'];

    $query = "delete from customerinfo where id = '$id'";
    $result = mysqli_query($db, $query);

    if($result)
    {
        $success = "Customer has been deleted";
        include ('customer_db.php');
        exit;
    }
    else
    {
        $error = "Cannot run query";
        include ('customer_db.php');
        exit;

    }
?>