<?php
session_start(); //Dịch vụ bảo vệ
if (!isset($_SESSION['loginOK'])) {
    header("Location:login.php");
}
include '../partial/header.php';
?>

<a href="addemployee.php" class="btn btn-success mt-2"><i class="fas fa-user-plus"></i> Thêm nhân viên</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã nv</th>
            <th scope="col">Tên nv</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">Email</th>
            <th scope="col">Số di động</th>
            <th scope="col">Cơ quan</th>
            <th scope="col">Sửa thông tin</th>
            <th scope="col">Xóa nhân viên</th>
        </tr>
    </thead>
    <tbody>
        <!-- Thay đổi dữ liệu database -->
        <!-- 4 bước -->
        <!-- b1: kết nối CSDL -->
        <?php include '../config/config.php'; ?>
        <!-- b2: thực hiện truy vấn -->
        <?php
      $sql = "SELECT e.emp_id, e.emp_name, e.emp_position, e.emp_email, e.emp_mobile, o.office_name FROM db_employees e, db_offices o
      WHERE e.office_id = o.office_id";
      // lưu trữ kết quả, hàm truy vấn
      $resulf = mysqli_query($conn,$sql);
      ?>

        <!-- b3: phân tích và xử lý kết quả -->
        <?php

      // hàm kiểm tra số lượng row trong resulf
      if(mysqli_num_rows($resulf) > 0){
        // Lưu dữ liệu của 1 hàng CSDL vào biến row dưới dạng mảng kết hợp
        while($row = mysqli_fetch_assoc($resulf)){
            ?>
        <tr>
            <th scope="row"><?php echo $row['emp_id'] ?></th>
            <td><?php echo $row['emp_name'] ?></td>
            <td><?php echo $row['emp_position'] ?></td>
            <td><?php echo $row['emp_email'] ?></td>
            <td><?php echo $row['emp_mobile'] ?></td>
            <td><?php echo $row['office_name'] ?></td>
            <!-- link cho phép lấy id -->
            <td><a href="editEmployee.php?id=<?php echo $row['emp_id']?>"><i class="fas fa-user-edit"></i></a></td>
            <td><a href="deleteEmployee.php?id=<?php echo $row['emp_id']?>"><i class="fas fa-user-minus"></i></a></td>

        </tr>
        <?php
        }
     }
    //  b4: Đóng kết nối
     mysqli_close($conn);
        
      ?>
        <!-- Thay đổi dữ liệu database -->
    </tbody>
</table>

<?php
include '../partial/footer.php';
?>