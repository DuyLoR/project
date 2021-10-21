<?php include 'partical/header.php'; ?>

<table class="table table-dark table-hover text-center">
    <thead>
        <tr>
            <th scope="col">Mã số</th>
            <th scope="col">Tên thuốc</th>
            <th scope="col">Loại thuốc</th>
            <th scope="col">Liều lượng</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">Hạn sử dụng</th>
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
        $sql = "SELECT `id`, `name`, `type`, `dose`, `production_date`, `expiration_date`, `quantity` FROM `drugs`";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <th scope="row"><?php echo $row['id'] ;?></th>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['type'];?></td>
            <td><?php echo $row['dose'];?></td>
            <td><?php echo $row['production_date'];?></td>
            <td><?php echo $row['expiration_date'];?></td>
            <td><?php echo $row['quantity'];?></td>
            <td>
                <div class="container justify-content-center text-center">
                <a href="view.php" class="col-md-3 p-1">Chi tiết</a>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="col-md-3 p-1">Sửa</a>
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