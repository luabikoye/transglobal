<?php
    include ('connection/connect.php');


    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $exam_code = $_POST['exam_code'];
    $expire_date = $_POST['expire_date'];


    if($firstname == '' || $lastname == '' ||  $email == '' ||  $phone == '' ||  $exam_code == '' ||  $expire_date == '')
    {
        $error = 'All information are required !!!';
        include ('add-participants.php');
        exit;
    }


    $query = "insert into participant (firstname, lastname, email, phone, exam_code, expire_date) 
    values ('$firstname', '$lastname', '$email', '$phone', '$exam_code', '$expire_date')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Participant has been added successfully !!!';
        include ('add-participants.php');
        exit;
        
    }
    else{
        $error = 'Sorry this email or number has alredy been used';
        include ('add-participants.php');
        exit;
    }
    

?>