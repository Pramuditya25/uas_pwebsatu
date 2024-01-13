<?php
$servername = "localhost";
$dbname = "klayunansport";
$username = "root";
$password = "";//password database ente

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "";
}