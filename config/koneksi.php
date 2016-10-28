<?php

/* Author Sirajudin Pn
 * I'm is the first Programmer try to make it Understand
 * about java Progrmming To built a sistem 
 * 
 */
$server="localhost";
$user="root";
$password="";
$database="lesson";
$koneksi=  mysqli_connect($server, $user, $password, $database);

if ($koneksi){
    echo"Berhasil koneksi";
}
else {
    echo"gagal koneksi";
}

