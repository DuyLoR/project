<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $code = $_GET['code'];
// ket noi csdl
$conn = mysqli_connect('localhost', 'root', '', 'tlu_phonebook');
if(!$conn){
    die("Loi ket noi");
}
$sql = "SELECT * FROM db_users WHERE user_email = '$id' and user_code = '$code'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    $sql2 = "UPDATE db_users SET user_level = '1'";
    $result2 = mysqli_query($conn, $sql2);
    if($result2 > 0){
        echo 'da xac minh thanh cong!';
    }else{
        echo 'loi';
    }
}
}
?>