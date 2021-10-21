<?php

// Ket noi CSDL
    define('HOST','localhost');
    define('USER','root');
    const PASS = '';
    define('DB','tlu_phonebook');
    // ham thực hiện kết nối
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    if(!$conn){
        die("Khong the ket noi!");
    }
    // echo 'Ket noi thanh cong';
?>