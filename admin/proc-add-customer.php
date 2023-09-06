<?php
    include ('connection/connect.php');


    
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_birth = $_POST['date_birth'];


    if($title == '' || $firstname == '' || $lastname == '' ||  $email == '' ||  $phone == '')
    {
        $error = 'All information are required !!!';
        include ('add-customer.php');
        exit;
    }


    $query = "insert into customerinfo (title, firstname, lastname, email, phone, date_birth) 
    values ('$title', '$firstname', '$lastname', '$email', '$phone', '$date_birth')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $firstname ='';
        $lastname ='';
        $email ='';
        $phone ='';
        $date_birth ='';
        $success = 'Customer has been added successfully !!!';
        include ('add-customer.php');
        exit;
        
    }
    else{
        $error = 'Sorry this email or number has already been used';
        include ('add-customer.php');
        exit;
    }
    

?>