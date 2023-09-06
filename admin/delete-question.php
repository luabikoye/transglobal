<?php

    include ('connection/connect.php');

    $id = $_GET['id'];

    $query = "delete from questions where id = '$id'";
    $result = mysqli_query($db, $query);

    if($result)
    {
        $success = "Question has been deleted";
        include ('question.php');
        exit;
    }
    else
    {
        $error = "Cannot run query";
        include ('question.php');
        exit;

    }
?>