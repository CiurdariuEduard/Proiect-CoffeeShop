<?php

$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="coffeeshop";

$connect=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$connect){
    die("Connection lost: ".mysqli_connect_error());
}