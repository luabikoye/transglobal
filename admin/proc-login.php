<?php
    session_start();
    include ('connection/connect.php');
    
    
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');


    // if($username == '' && $password == '') 
    // {   
    //     $error = "Username and Password is required";
    //     include ('index.php');
    //     exit;
    // }


    if(!$username || !$password )
    {
        $error = 'Please enter a valid Username and Password';
        include('index.php');
        exit;
    }

    
    $query = "select * from admin_login where username = '$username' && password = '$password'";
    $result = mysqli_query($db, $query);
    $num_rows = mysqli_num_rows($result);

    if($num_rows > 0)
    { 
        $_SESSION['trans_valid_user'] = $username;
        // sleep(2);
        header ("location: dashboard.php");
        exit;
    }
    else{
        $error = 'Incorrect Username or password';
        include('index.php');
        exit;
    }

    header("Location: dashboard");
    

?>