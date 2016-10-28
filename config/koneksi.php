<?php

/* Author Sirajudin Pn
 * I'm is the first Programmer try to make it Understand
 * about java Progrmming To built a sistem in computer
 * 
 */
$server="localhost";
$user="root";
$password="";
$database="lesson";
$koneksi=  mysqli_connect($server, $user, $password, $database);

if ($koneksi){
    echo" anda Berhasil koneksi";
}
else {
    echo"anda gagal koneksi";
}

