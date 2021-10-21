<?php
session_start(); //Dịch vụ bảo vệ
if (!isset($_SESSION['loginOK'])) {
    header("Location:login.php");
}
    include '../partial/header.php';
    //kết nối đến csdl
    include '../config/config.php';
?>
<main class="container">
    <h2>Sửa thông tin nhân viên</h2>
    <form action="" method="POST">
        <div class="mb-3 row">
            <label for="empName" class="col-sm-2 col-form-label">Tên nhân viên</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="empName">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empPosition" class="col-sm-2 col-form-label">Chức vụ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="empPosition">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="Email" class="form-control" name="empEmail">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Số di động</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name="empMobile">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empPosition" class="col-sm-2 col-form-label">Tên cơ quan</label>
            <div class="col-sm-10">
                <select name="office" name="office">
                    <!-- Lấy dư liệu từ CSDL -->
                    <?php
                    $sql="SELECT * FROM db_offices";
                    $resulf = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($resulf) > 0){
                        while($row = mysqli_fetch_assoc($resulf)):
            ?>
                    <option value="<?php echo $row['office_id'] ;?>"><?php echo $row['office_name'];?></option>
                    <?php
                    endwhile;
                    }
            ?>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success" name="submit1">Lưu</button>
            </div>
        </div>
    </form>

</main>

<!-- thực hiện truyền nhập dữ liệu bằng post -->
<?php
    if(isset($_POST['submit1'])){
        $emp_id = $_GET['id'];
        $emp_name = $_POST['empName'];
        $emp_position = $_POST['empPosition'];
        $emp_email = $_POST['empEmail'];
        $emp_mobile = $_POST['empMobile'];
        $office_id = $_POST['office'];

        $sql = "UPDATE db_employees SET emp_name= '$emp_name' ,emp_position='$emp_position',emp_email='$emp_email',emp_mobile='$emp_mobile',office_id='$office_id' 
        WHERE emp_id = '$emp_id'";
        $resulf = mysqli_query($conn,$sql);
        if($resulf > 0){
            header("location:index.php");
        }else{
            echo 'Lỗi';
        }
    }
    
// b4: đóng kết nối
mysqli_close($conn);


?>


<?php
    include '../partial/footer.php';
?>