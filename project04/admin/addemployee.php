<?php
session_start(); //Dịch vụ bảo vệ
if (!isset($_SESSION['loginOK'])) {
    header("Location:login.php");
}
include '../partial/header.php';
include '../config/config.php';
?>
<main class="container">
    <h2>Thêm thông tin nhân viên</h2>
    <form action="process-add-employee.php" method="post">
        <div class="form-group row">
            <label for="empName" class="col-sm-2 col-form-label">Tên nhân viên:</label>
            <div class="col-sm-10 pb-2">
                <input type="text" class="form-control" id="empName" name="empName">
            </div>
        </div>
        <div class="form-group row">
            <label for="empPosition" class="col-sm-2 col-form-label">Chức vụ:</label>
            <div class="col-sm-10 pb-2">
                <input type="text" class="form-control" id="empPosition" name="empPosition">
            </div>
        </div>
        <div class="form-group row">
            <label for="empEmail" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10 pb-2">
                <input type="Email" class="form-control" id="empEmail" name="empEmail">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">Số di động:</label>
            <div class="col-sm-10 pb-2">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">Tên cơ quan:</label>
            <div class="col-sm-10 pb-2">
                <select name="office" id="office">
                    <!-- Ket noi CSDL -->
                    <?php
                // lay du lieu
                $sql="SELECT * FROM db_offices";
                // lưu kết quả
                $resulf = mysqli_query($conn,$sql);
                //Xử lý kết quả
                if(mysqli_num_rows($resulf) > 0){
                    while($row = mysqli_fetch_assoc($resulf)){
                        ?>
                    <option value="<?php echo $row['office_id']?>"><?php echo $row['office_name']?></option>

                    <?php
                    }
                }
                mysqli_close($conn);
                ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10 pb-2">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </div>
    </form>
</main>

<?php
include '../partial/footer.php';
?>