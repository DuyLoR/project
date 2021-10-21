<?php
session_start(); //Dịch vụ bảo vệ
if (!isset($_SESSION['loginOK'])) {
    header("Location:login.php");
}
    $emp_name = $_POST['empName'];
    $emp_position = $_POST['empPosition'];
    $emp_email = $_POST['empEmail'];
    $emp_mobile = $_POST['empMobile'];
    $office_id = $_POST['office'];

    include '../config/config.php';
    // b2:
    $sql = "INSERT INTO db_employees(emp_name, emp_position, emp_email, emp_mobile, office_id)
    VALUES('$emp_name', '$emp_position', '$emp_email', '$emp_mobile', '$office_id')";
    $resulf = mysqli_query($conn,$sql);

    echo $office_id;
    // kiểm tra số bản ghi đã được insert
    if($resulf > 0){
        header("location:index.php");
    }else{
        echo 'Lỗi';
    }
// b4: đóng kết nối
mysqli_close($conn);

?>