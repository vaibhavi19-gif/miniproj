<?php


define('DB_SERVER','localhost');
define('DB_USENAME','root');
define('DB_PASSWORD','');
define('DB_NAME','vailogin');


$conn=mysqli_connect(DB_SERVER,DB_USENAME,DB_PASSWORD,DB_NAME);


if($conn == false){
dir('Error: cannot connect');

}







?>