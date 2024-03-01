<?php


$username = "root";
$password = '12345';
$host = 'localhost';

$is_connect = mysqli_connect($host, $username, $password);

if($is_connect){
    mysqli_select_db($is_connect, ("izin_db"));
}else{
    echo 'dongra!!!!';
}