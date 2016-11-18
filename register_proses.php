<?php
include 'config/koneksi.php';

$username = $_GET['username'];
$password = $_GET['password'];

$query = "INSERT INTO user SET username='$username', password='$password'";
mysqli_query($koneksi, $query);

header("location:datauser.php");



