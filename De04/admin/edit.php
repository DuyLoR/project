<?php include 'partical/header.php'; ?>

<form class="container" action="process-edit.php" method="get">
    <div class="row mb-3 mt-3">
        <label for="id" class="col-md 6">mã thuốc</label>
        <input type="text" class="form-control col-md-6 w-75" value="<?php echo $_GET['id']; ?>" disabled id=" name" name="id">
    </div>
    <div class="row mb-3 mt-3">
        <label for="edname" class="col-md 6">Tên thuốc</label>
        <input type="text" class="form-control col-md-6 w-75" name="edname" id="name">
    </div>
    <div class="row mb-3 mt-3">
        <label for="edtype" class="col-md 6">Loại thuốc</label>
        <input type="text" class="form-control col-md-6 w-75" name="edtype " id="type">
    </div>
    <div class="row mb-3 mt-3">
        <label for="eddose" class="col-md 6">Liều lượng</label>
        <input type="number" class="form-control col-md-6 w-75" name="eddose " id="dose">
    </div>
    <div class="row mb-3 mt-3">
        <label for="edcost_price" class="col-md 6">Giá nhập</label>
        <input type="number" class="form-control col-md-6 w-75" name=" edcost_price" id="cost_price">
    </div>
    <div class="row mb-3 mt-3">
        <label for="edselling_price" class="col-md 6">Giá bán</label>
        <input type="number" class="form-control col-md-6 w-75" name="edselling_price " id="selling_price">
    </div>
    <div class="row mb-3 mt-3">
        <label for="edexpiry" class="col-md 6">Trạng thái Hạn sử dụng</label>
        <div class="mb-3 form-check col-md-6 ps-4">
            <input type="checkbox" class="form-check-input" name="edexpiry " id="expiry">
            <label class="form-check-label" for="exampleCheck1">Hết hạn</label>
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <label for="edcompany_name" class="col-md 6">Công ty</label>
        <input type="text" class="form-control col-md-6 w-75" name="edcompany_name " id="company_name">
    </div>
    <div class="row mb-3 mt-3">
        <label for="edproduction_date" class="col-md 6">Ngày sản xuất</label>
        <input type="date" class="form-control col-md-6 w-75" name="edproduction_date " id="production_date">
    </div>

    <div class="row mb-3 mt-3">
        <label for="edexpiration_date" class="col-md 6">Ngày hết hạn</label>
        <input type="date" class="form-control col-md-6 w-75" name=" edexpiration_date" id="expiration_date">
    </div>

    <div class="row mb-3 mt-3">
        <label for="edplace" class="col-md 6">Nơi sản xuất</label>
        <input type="text" class="form-control col-md-6 w-75" name="edplace " id="place">
    </div>
    <div class="row mb-3 mt-3">
        <label for="edquantity" class="col-md 6">Số lượng</label>
        <input type="number" class="form-control col-md-6 w-75" name="edquantity" id="quantity">
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" name="btnsubmit">Sửa</button>

    </div>
</form>
<?php include 'partical/footer.php'; ?>