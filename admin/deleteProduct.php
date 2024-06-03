<?php
    require "connect.php";
    //Lấy id user muốn xóa
    $id = $_GET['id'];
    // End lấy ID
    
    //Xây dựng câu lệnh truy vấn xóa;
    $sql = "DELETE FROM `product` WHERE `product`.`id_product` = {$id}";
    $connect -> exec($sql);
    setcookie("success", "Xóa thành công!", time()+1, "/","", 0);
    header("Location:listProduct.php");
?>