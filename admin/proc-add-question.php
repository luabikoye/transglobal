<?php
    include ('connection/connect.php');


    $category = $_POST['category'];
    $question = $_POST['question'];
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $option_e = $_POST['option_e'];
    $answer = $_POST['answer'];
    


    if($category == '' || $question == '' || $option_a == '' || $option_b == '' || $option_c == '' || $option_d == '' || $option_e == ''  || $answer == '')
    {
        $error = 'All fields are required before you can continue ';
        include ('add-question.php');
        exit;
    }


    $query = "insert into questions (category, question, option_a, option_b, option_c, option_d, option_e, answer ) values ('$category', '$question', '$option_a', '$option_b', '$option_c', '$option_d', '$option_e', '$answer')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Question has been added successfully';
        include ('add-question.php');
        exit;
        
    }
    else{
        $error = 'Question not added';
        include ('add-question.php');
        exit;
    }
    

?>