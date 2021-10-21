<?php
    // Kết nối CSDL
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'demo_login');
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    if(!$conn){
        die("Không thể kết nối");
    }
    // echo 'kết nối thành công';

?>