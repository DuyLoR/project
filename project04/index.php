<?php
include './partial/header.php';
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã nv</th>
            <th scope="col">Tên nv</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">Email</th>
            <th scope="col">Số di động</th>
            <th scope="col">Cơ quan</th>
        </tr>
    </thead>
    <tbody>
        <!-- Thay đổi dữ liệu database -->
        <!-- 4 bước -->
        <!-- b1: kết nối CSDL -->
        <?php include './config/config.php'; ?>
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
          echo '<tr>';
          echo '<th scope="row">'.$row['emp_id'].'</th>';
          echo '<td>'.$row['emp_name'].'</td>';
          echo '<td>'.$row['emp_position'].'</td>';
          echo '<td>'.$row['emp_email'].'</td>';
          echo '<td>'.$row['emp_mobile'].'</td>';
          echo '<td>'.$row['office_name'].'</td>';
          echo '</tr>';
        }
     }
        
      ?>
        <!-- Thay đổi dữ liệu database -->
    </tbody>
</table>

<?php
include './partial/footer.php';
?>