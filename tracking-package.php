<?php
include('admin/connection/connect.php');
require_once('admin/include/fns.php');


$tracking_id = $_POST['tracking_id'];

$query = "select * from shipment where tracking_number = '$tracking_id'";
$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);
if($num > 0)
{
    $row = mysqli_fetch_array($result);
    $shipment_token = $row['token'];
    include('track.php');
}
else{

    include('tracking-error.php');
}


?>