<?php
session_start();

include "koneksi.php";

if(empty($_POST['full_name'])&& empty($_POST['username'])&& empty($_POST['password'])&& empty($_POST['nik'])&& empty($_POST['email'])&& empty($_POST['address'])){
    echo"<body>
    <script>
        alert('Belum ada data!')
    </script>
    </body>";
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$full_name = $_POST['full_name'];
$nik = $_POST['nik'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = "INSERT INTO Users (username, full_name, NIK, password, email, address) values ('$username', '$full_name', '$nik', '$password', '$email', '$address');";

mysqli_query($conn, $query) or die("tidak bisa eksekusi");

if(isset($_POST['submit'])){
    if(!empty($_POST['full_name']) && !empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['nik'])&& !empty($_POST['email'])&& !empty($_POST['address'])){
        
        header("location:login.php", true, 301);
    }
    else{
        echo"<body>
        <script>
            alert('isi semua field!')
            window.location.replace('../login.php')
        </script>
        </body>";
    }
}
?>