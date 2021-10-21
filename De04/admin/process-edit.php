<?php

if(isset($_GET['btnsubmit'])){
    $id = $_GET['id'];
    $name = $_GET['edname'];
    $type = $_GET['edtype'];
    $dose = $_GET['eddose'];
    $cost_price = $_GET['edcost_price'];
    $selling_price = $_GET['edselling_price'];
    $expiry = $_GET['edexpiry'];
    $company_name = $_GET['edcompany_name'];
    $production_date = $_GET['edproduction_date'];
    $expiration_date = $_GET['edexpiration_date'];
    $place = $_GET['edplace'];
    $quantity = $_GET['edquantity'];
}
// csdl
$conn = mysqli_connect('localhost', 'root', '', 'de04');
if(!$conn){
    die("Lỗi kết nối");
}
if($expiry == true){
    $expiry = 1;
}else{
    $expiry = 0;
}
$sql = "UPDATE `drugs` SET `id`='$id',`name`='$name',
`type`='$type',`dose`='$dose',`cost_price`='$cost_price',`selling_price`='$selling_price',
`expiry`='$expiry',`company_name`='$company_name',`production_date`='$production_date',
`expiration_date`='$expiration_date',`place`='$place',`quantity`='$quantity' WHERE 1";
$result = mysqli_query($conn,$sql);
if($result>0){
    header("location:index.php");
}else{
    echo 'Lỗi';
}
?>