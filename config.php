<?php
session_start();

// database connection
$db = mysqli_connect('localhost', 'root', '', 'crm');
mysqli_query($db, "SET NAMES utf8");
