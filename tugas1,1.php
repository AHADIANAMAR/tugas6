<?php
// Pendeklarasikan servername, username dan password
$servername="localhost";
$username="root";
$password="";

// Mengecreate koneksinya
$conn = mysqli_connect($servername, $username, $password);

// Check koneksi
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

// Membuat Database
$sql= "CREATE DATABASE bukutamu";
if(mysqli_query($conn, $sql)){
    echo "Database created succesfully";
} else{
    echo "Error creating database". mysqli_error($conn);
}

// Menstop koneksi
mysqli_close($conn);
?>