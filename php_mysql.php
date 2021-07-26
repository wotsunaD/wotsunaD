<?php
$connection = new mysqli("localhost","root","e+-@MNZNNNckyy8PCgTAq+rTXp]zx}");
require('AfricasTalkingGateway.php');

$username   = "sandbox";            
$apikey     = "5c3350028b90259929735448c01796d9b12f765d3a18c5ef1b23106082872934";

$connection->query("CREATE DATABASE IF NOT EXISTS internship");
$recipients = "+256787665544";

mysqli_select_db($connection,"internship");

$connection->query("CREATE TABLE IF NOT EXISTS users(ID INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), NAME VARCHAR(50) NOT NULL, PHONE_NUMBER VARCHAR(20) NOT NULL UNIQUE)");
$gateway    = new AfricasTalkingGateway($username, $apikey,"sandbox");

$gateway->sendMessage($recipients, "It has worked now");  

