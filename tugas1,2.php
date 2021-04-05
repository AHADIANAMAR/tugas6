<?php
// Pendeklarasikan servername, username dan password, database
$servername="localhost";
$username="root";
$password="";
$dbname="bukutamu";

// Mengecreate koneksinya
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// Source code untuk membuat table
$sql= "CREATE TABLE buku_tamu(
ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL,
isi text
)";
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// mengeclose koneksi
mysqli_close($conn);
?>