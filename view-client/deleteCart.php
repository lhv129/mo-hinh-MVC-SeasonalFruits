<?php
require "../admin/connect.php";
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $idDelete = (int)$id - 1;
    array_splice( $_SESSION['myCart'], $idDelete,1);
    header('Location:cart.php');
}else{
    $_SESSION['myCart'] = [];
}
?>