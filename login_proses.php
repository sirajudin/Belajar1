<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login      = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$data       = mysqli_num_rows($login);
if($data>0)
{
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['login'] = $user['username'];
    header("location:index.php");
}
else
{
    echo 'invalid username or passsword';
    header("location:index.php");
}
        ?>
    </body>
</html>
