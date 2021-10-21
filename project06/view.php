<?php
$file = file($_GET['file']);
include 'header.php';

//lấy name
$getname = explode(":",$file[1]);
// mảng name 2 phần tử
$name = explode(",", $getname[1]);
// print_r($name[1]);
// print_r($name[0]);

//lấy điểm
$getmark = explode(":", $file[4]);
$mark = $getmark[1];
// print_r($mark);

// lấy số báo danh
$getid = explode("_",$_GET['file']);
$id = $getid[3];
// print_r($id);

// lấy mã bài
$getexam = $_GET['file'];
// print_r($getexam);

// lấy ngày thi
$getday = explode("_",$_GET['file']);
$day = $getday[4];
// print_r($day);

// lấy giờ hoàn thành bài thi
$gettime = explode("_", $_GET['file']);
$time = $gettime[5];
// print_r($time);

?>
<div class="contaimer-fluid">
    <div class="row text-center pt-2 pb-2">
        <h3>KẾT QUẢ BÀI THI ỨNG DỤNG CÔNG NGHỆ THÔNG TIN</h3>
    </div>


    <div class="row col-md-6">
        <p class="col">Số báo danh: <?php echo $id; ?></p>
        <p class="col">Họ và tên: <?php echo $name[1].$name[0]; ?></p>
        <p class="col">Điểm thi: <?php echo $mark; ?></p>
    </div>
    <div class="row col">
        <p class="col">Mã tệp tin làm bài: <?php echo $getexam; ?></p>
    </div>
    <div class="row col-md-6">
        <p class="col">Ngày thi: <?php echo $day; ?></p>
        <p class="col">Giờ nộp bài: <?php echo $time; ?></p>
    </div>

</div>
<div class="card-group col-10 me-auto ms-auto mb-3 container">
    <div class="card me-2 border-dark border-start">

        <div class="card-body">
            <h5 class="card-title text-center pb-5">Thí sinh</h5>

        </div>
    </div>
    <div class="card me-2 border-dark border-start">

        <div class="card-body">
            <h5 class="card-title text-center pb-5">Giám thị 1</h5>

        </div>
    </div>
    <div class="card me-2 border-dark border-start">

        <div class="card-body">
            <h5 class="card-title text-center pb-5">Giám thị 2</h5>

        </div>
    </div>
</div>
<div class="container-fluid">
    <table class="table table-bordered border-primary border-dark  mt-3">
        <thead>
            <tr class="text-white bg-dark">
                <th scope="col">Stt</th>
                <th scope="col">Nội dung câu hỏi</th>
                <th scope="col">Điểm đạt</th>
                <th scope="col">Đáp án đã chọn</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // lấy các đoạn văn phân tách nhau bằng đấu \n\n
            // explode chỉ cắt chuỗi string; r: read
            $fopen = fopen($_GET['file'],"r");
            // đọc file
            $fread = fread($fopen, filesize($_GET['file']));
            // tách chuỗi
            $paragraphs = explode("\n\n", $fread);

           for($i = 1 ; $i < count($paragraphs) - 1; $i++){
            //    lấy từng line trong paragraphs
            $line = explode("\n", $paragraphs[$i]); 

            $mark = explode(":", $line[1]); 

            $response = explode(":", $line[3]); ?>
            <tr>
                <td> <?php echo $i ;?></td>
                <td> <?php echo $line[0];?></td>
                <td> <?php echo $mark[1];?></td>
                <td> <?php echo $response[1];?></td>
            </tr>
            
            <?php
            }
            ?>
                
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>