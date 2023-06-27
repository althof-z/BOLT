<?php
include "koneksi.php";
    $evName = $_POST['ev_name'];
    $orderDate = $_POST['order_date'];
    $length = $_POST['length'];
    $pick = $_POST['pick'];
    
    $query = "INSERT INTO rent (merk,start_date,lenght,pickup_time) VALUES ('$evName', '$orderDate','$length','$pick');";

    mysqli_query($conn, $query) or die("gagal");

    if(isset($_POST['submit'])){
    if(!empty($_POST['ev_name']) && !empty($_POST['order_date'])&& !empty($_POST['length'])&& !empty($_POST['pick'])){
        
        header("location:login.php", true, 301);
    }

} else {
    header('location: ./rent.php', true, 301);
}

?>

