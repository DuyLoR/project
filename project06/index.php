<?php include 'header.php'; ?>
        <div class="row">
            <h3 class="text-center pt-2 pb-2">DANH SÁCH TỔNG HỢP KẾT QUẢ THI CỦA THÍ SINH</h3>
        </div>
    </div>
    <div class="container">

        <table class="table table-bordered border-primary border-dark text-center ">
            <thead>
                <tr class="text-white bg-dark">
                    <th scope="col">Số thứ tự</th>
                    <th scope="col">Số báo danh</th>
                    <th scope="col">Mã bài thi</th>
                    <th scope="col">Ngày thi</th>
                    <th scope="col">Giờ nộp bài</th>
                    <th scope="col">Điểm thi</th>
                    <th scope="col">Tệp kết quả</th>
                    <th scope="col">Kí tên</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // đọc và hiển thị tệp trên thu mục: scandir();
                    $myfile = scandir("result/");
                    // gán stt
                    $stt = 1;
                    // duyệt từng file
                        foreach($myfile as $key => $value){
                            // lấy file từ 3
                            if($key >= 3){
                ?>
                                <tr>
                                    <th scope="row"><?php echo $stt; ?></th>
                                    <!-- tách chuỗi theo kí tự '_' và lấy phần tử cần thiết từ mảng -->
                                    <td><?php echo explode('_',$value)[3]; ?></td>
                                    <td><?php echo explode('_',$value)[2]; ?></td>
                                    <td><?php echo explode('_',$value)[4]; ?></td>
                                    <td><?php echo explode('_',$value)[5]; ?></td>
                                    <td><?php echo explode('.',explode('_',$value)[6])[0]; ?></td>
                                    <td><a href="view.php?file=result/<?php echo $value;?>">result/<?php echo $value;?></a></td>
                                    <td></td>
                                </tr>
                <?php
                            $stt++;
                            }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php include 'footer.php'; ?>