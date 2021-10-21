<?php include 'partical/header.php'; ?>

<table class="table table-dark table-hover text-center">
    <thead>
        <tr>
            <th scope="col">Mã số</th>
            <th scope="col">Tên thuốc</th>
            <th scope="col">Loại thuốc</th>
            <th scope="col">Mã vạch</th>
            <th scope="col">Liều lượng</th>
            <th scope="col">Mã</th>
            <th scope="col">Giá nhập</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Trạng thái Hạn sử dụng</th>
            <th scope="col">Công ty</th>
            <th scope="col">Ngày sản xuất</th>
            <th scope="col">Ngày hết hạn</th>
            <th scope="col">Nơi sản xuất</th>
            <th scope="col">Số lượng</th>
            <th scope="col" >Chỉnh sửa</th>
        </tr>
    </thead>
    <tbody>

        <!-- kết nối csdl -->
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'de04');
        if(!$conn){
            die("Lỗi kết nối");
        }
        $sql = "SELECT `id`, `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, 
        `selling_price`, `expiry`, `company_name`,
        `production_date`, `expiration_date`, `place`, `quantity` FROM `drugs`";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <th scope="row"><?php echo $row['id'] ;?></th>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['type'];?></td>
            <td><?php echo $row['barcode'];?></td>
            <td><?php echo $row['dose'];?></td>
            <td><?php echo $row['code'];?></td>
            <td><?php echo $row['cost_price'];?></td>
            <td><?php echo $row['selling_price'];?></td>
            <td><?php echo $row['expiry'];?></td>
            <td><?php echo $row['company_name'];?></td>
            <td><?php echo $row['production_date'];?></td>
            <td><?php echo $row['expiration_date'];?></td>
            <td><?php echo $row['place'];?></td>
            <td><?php echo $row['quantity'];?></td>
            <td>
                <div class="container justify-content-center text-center">
                <a href="edit.php" class="col-md-3 p-1">Sửa</a>
                <a href="#" class="col-md-3 p-1">Xóa</a>
                </div>
            </td>

        </tr>

        <?php
            }
        }
    ?>
    </tbody>
</table>
<?php include 'partical/footer.php'; ?>