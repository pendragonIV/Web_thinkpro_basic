<?php

$connect = mysqli_connect('localhost','root','','web_assignment');
mysqli_set_charset($connect,'utf8');
if(!$connect){
    die("Could not connect to server".mysqli_connect_error());
}

?>