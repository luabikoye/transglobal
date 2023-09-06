<?php  
    include ('connection/connect.php');

 
    // Filter the excel data 
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    } 
    
    // Excel file name for download 
    $fileName = "Question" .' '. date('Y-m-d') . ' '. ".xls"; 
    
    // Column names 
    $fields = array( 'category', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'option_e', 'answer'); 
    
    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n"; 
    
    // Fetch records from database 
    $query = $db->query("SELECT * FROM questions ORDER BY category ASC"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc()){ 
            // $status = ($row['status'] == 1)?'Active':'Inactive'; 
            $lineData = array($row['category'], $row['question'], $row['option_a'], $row['option_b'], $row['option_c'], $row['option_d'],  $row['option_e'],  $row['answer'], $status); 
            array_walk($lineData, 'filterData'); 
            $excelData .= implode("\t", array_values($lineData)) . "\n"; 
        } 
    }else{ 
        $excelData .= 'No records found...'. "\n"; 
    } 
    
    // Headers for download 

    header("Content-Type: application/vnd.ms-excel"); 
    header("Content-Disposition: attachment; filename=\"$fileName\""); 

    
    // Render excel data 
    echo $excelData; 
    
    exit;
?>