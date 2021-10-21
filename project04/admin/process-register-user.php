<?php
if(isset($_POST['smbRegister'])){
    $user_name = $_POST['userName'];
    $user_email = $_POST['userEmail'];
    $user_pass1 = $_POST['password1'];
    $user_pass2 = $_POST['password2'];
}

// ket noi csdl
$conn = mysqli_connect('localhost', 'root', '','tlu_phonebook');
if(!$conn){
    die("lỗi kết nối!");
}
// kiem tra email ton tai chua
$sql1 = "SELECT * FROM db_users where '$user_email' = user_email or '$user_name' = user_name";
$result1 = mysqli_query($conn, $sql1);
if(mysqli_num_rows($result1)){
    echo'user hoặc email đã tồi tại, <a href="register.php">Quay lại</a>';
}else{
    // băm password
    $password = password_hash($user_pass1,PASSWORD_DEFAULT);
    // lưu dl
    $code = md5(uniqid(rand(),true));
    $sql2 = "INSERT INTO db_users(`user_name`, `user_email`, `user_pass`, `user_code`) 
    VALUES('$user_name', '$user_email', '$password', '$code')";
    $result2 = mysqli_query($conn,$sql2);
    if($result2 > 0){
        include 'sendmail.php';
        sendemail($user_email, $code);
        
        echo'Đăng kí thành công, <a href="login.php">Đăng nhập</a>';
    }
}
?>