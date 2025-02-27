<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";
$dbcon = new mysqli($servername,$username,$password,$db_name);
if(!$dbcon){
echo 'successfull';
}

?>