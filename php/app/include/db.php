<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'TimeStat';
$connect = @new mysqli($host, $user, $password, $db_name);

if($connect->connect_errno!=0) 
{
    echo "We got a problem ! ". $connect->connect_error;
    die();
}



