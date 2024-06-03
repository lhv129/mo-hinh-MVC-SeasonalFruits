<?php

// Kết nối CSDL
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'du_an_1';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    // cài đặt chế độ báo lỗi là xử lý ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // cài đặt chế độ trả dữ liệu
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    debug("Connection failed: " . $e->getMessage());
}
