<?php

    include ('connection/connect.php');


      if(isset($_POST["upload"]))
  {
        
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $c = 1;
    
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
              {

    $category = $filesop[1];
    $question = $filesop[2];
    $option_a = $filesop[3];
    $option_b = $filesop[4];
    $option_c = $filesop[5];
    $option_d = $filesop[6];
    $option_e = $filesop[7];
    $answer = $filesop[8];
    $query = "insert into questions ( category, question, option_a, option_b, option_c, option_d, option_e, answer) 
    values ( '$category', '$question','$option_a', '$option_b', '$option_c', '$option_d', '$option_e', '$answer')";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_execute($stmt);

    $c = $c + 1;
      }

    if($query){
        $success = "File has been successfully imported";
        include ('bulk-upload-question.php');
        exit;
      } 
		 else
		 {
      $error = "File couldn't be imported";
      include ('bulk-upload-question.php');
      exit;
    }

}
?>