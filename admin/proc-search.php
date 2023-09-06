<?php
    include ('connection/connect.php');
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_Post['search'])) {
    $searchq = $_Post['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
  
    $query = mysqli_query("SELECT * from partcipants WHERE firstname LIKE 
    '%$searchq%' OR"
          . "lastname LIKE '%$searchq%") or die("failed");
  $count = mysqli_num_rows($query);
  if ($count == 0) {
      $output = 'No search results';
  } else {
      while ($row = mysqli_fetch_array($query)) {
          $firstname = $row['firstname'];
          $lastname = $row['lastname'];
          $id = $row['id'];
          $output .= '<div>' . $firstname . '' . $lastname . '</div>';
          echo "hi";
      }
   }
  }
  
  

?>