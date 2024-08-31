<?php
error_reporting('E_ALL');
session_start();

$host='localhost';
$user='root';
$dbpass='';
$con=mysql_connect($host,$user,$dbpass);

if(!$con){
    die('could not connect to the database'.mysql_error());
}else{
     "connected";
}

mysql_select_db('elearningplatformdb',$con);
?>