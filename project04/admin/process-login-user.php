<?php if(isset($_POST['smbLogin'])) {
    $user_name = $_POST['userName'];
    $user_password = $_POST['password'];
}
    // ket noi csdl
   $conn = mysqli_connect('localhost', 'root', '', 'tlu_phonebook');
   if(!$conn){
       die("Lỗi kết nối");
   }
//    $password = password_hash($user_password,PASSWORD_DEFAULT);
    // Kiểm tra user
    $sql="SELECT * FROM `db_users` WHERE '$user_name' = user_name";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){
        //  kiểm tra pass
        while($row = mysqli_fetch_assoc($result)){
            var_dump($row);
                if(password_verify($user_password,$row['user_pass'])){
                    session_start();
                    $_SESSION['loginOK'] = true;
                    header("location:index.php");
                }
            }
    }else{
        echo'Sai mật khẩu,<a href="login.php">Quay lại</a>';
    }
?>