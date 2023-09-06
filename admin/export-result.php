<?php  
    include ('connection/connect.php');

 
    // Filter the excel data 
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    } 
    
    // Excel file name for download 
    $fileName = "Result" .' '. date('Y-m-d') . ' '. ".xls"; 
    
    // Column names 
    $fields = array('ID', 'FIRST NAME', 'LAST NAME', 'EMAIL', 'PHONE', 'EXAM_CODE', 'EXPIRE_DATE'); 
    
    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n"; 
    
    // Fetch records from database 
    $query = $db->query("SELECT * FROM participant ORDER BY id ASC"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc()){ 
            // $status = ($row['status'] == 1)?'Active':'Inactive'; 
            $lineData = array($row['id'], $row['firstname'], $row['lastname'], $row['email'], $row['phone'], $row['exam_code'], $row['expire_date'], $status); 
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