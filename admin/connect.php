<?php
    $hostname="localhost";
    $dbname="website-final-php";
    $username="root";
    $password="";
    // Dựng khối PDO
    try{
        $connect = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "connected";
    }
    catch(PDOException $e){
        $e->getMessage();
    }
?>