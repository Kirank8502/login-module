<?php
$servename = 'localhost';
$username = 'root'; 
$password = '';
$database = 'brandbuddiez';

try{
    $conn = mysqli_connect($servename,$username,$password,$database);
}
catch(exception $e){
    echo "Error connecting to database: " . $e->getMessage();
}