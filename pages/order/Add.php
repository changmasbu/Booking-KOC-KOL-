<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div id="result" class="mb-3"></div>
            <div class="card">
                <div class="card-header">
                    Đặt món
                </div>
                <div class="card-body">
                <form id="order_form">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="username" class="form-label">Tên món</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="order_name" placeholder="Nhập tên món" maxlength="128">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="username" class="form-label">Ghi chú</label>
                        </div>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="order_note" placeholder="Nhập ghi chú" maxlength="128">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="username" class="form-label">Đặt dùm</label>
                        </div>
                        <div class="col-md-10">
                            <input class="form-check-input" type="checkbox" value="false" id="order_by">
                            <label class="form-check-label" for="order_by">
                            </label>
                        </div>
                    </div>
                    <div class="row mb-3" id="order_by_on" style="display: none">
                        <div class="col-md-2">
                            <label for="username" class="form-label">Họ & Tên</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="order_name_by" placeholder="Họ & Tên người đặt dùm" maxlength="55">
                        </div>
                    </div>

                

                    <div class="form-group text-center">
                    <button class="btn btn-primary" id="order_now"> Đặt món</button>
                    <button class="btn btn-primary" id="clear_now"> Nhập lại</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end col  -->
            <?php
            $uId = $data_user['id'];
            $limit = LIMIT_ROW;
            $sql    = "SELECT tbl_order.*, tbl_user.fullname  
            FROM tbl_order, tbl_user 
            where tbl_order.user_id = tbl_user.id 
            AND tbl_order.user_id ='$uId' ORDER BY id desc";

            $total = $db->num_rows($sql);

            $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : LIMIT_ROW;
            $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
            $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 2;
            $Pagination  = new Pagination( $db->GetCn(), $sql );
         
            $results    = $Pagination->getData( $limit, $page  );
            // $total_pages = ceil($total / $limit); 
            // $pagLink = '<li class="page-item"> <a class="page-link" page="1" onclick="pagination(0, this)" aria-label="First"> <span aria-hidden="true">&laquo;</span> </a> </li>';  
            // for ($i=1; $i<=$total_pages; $i++) {
            //     $active = $i == 1 ? "active" : "";
            //     $pagLink .= '<li class="page-item"><a class="page-link '.$active.'" onclick="pagination('.$i.', this)" page="'.$i.'">'.$i.'</a></li>';   
            // }
            // $pagLink .= '<li class="page-item"> <a class="page-link" onclick="pagination('.($total_pages +1) .', this)" page="'.($total_pages + 1).'" aria-label="Last"> <span aria-hidden="true">&raquo;</span> </a> </li>';  

            ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Danh sách đặt món <span id="total"> ( <?=$total?> đơn)</span>
                    <a style="float:right;margin-top: 2px;color:white" href="/export/pdf" target="_bank" class="badge bg-primary">EXPORT PDF</a>
                </div>
                <div class="card-body" >
                <div class="table-responsive">
                        <table class="table" id="data_order">
                            <thead>
                                <tr>
                                <th scope="col">No_</th>
                                <th scope="col">Họ & Tên</th>
                                <th scope="col">Tên món</th>
                                <th scope="col">Note</th>
                                </tr>
                            </thead>
                            <tbody>
                <?php
                if ($total > 0) {
                    ?>
                    
                                <?php
                                foreach($results->data as $row){
                                    $name = $row['fullname'];
                                    if($row['order_by'] == 1 && $row['name_by'] != '') $name = $row['name_by'];
                                    $note = $row['note'];
                                    if($row['note'] == '') $note = "Không";
                                    echo '<tr>
                                    <th scope="row">'.$row['id'].'</th>
                                    <td>'. $name.'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$note.'</td>
                                    </tr>';
                                }
                                ?>
                      
                
                <?php
                    }else{
                        echo'<tr><td colspan="4"><center>Chưa có dữ liệu</center></td></tr>'; 
                    }
                ?>
                      </tbody>
                        </table>
                    </div>
                </div>
                <nav style=" margin: 0 auto; ">
                <?php echo $Pagination->createLinks( $links, 'pagination', 'order'); ?> 
                </nav>
            </div>
        </div>
    </div>
</div>
<script>
    document.title = "Đặt món | <?=SITE_NAME?>" ;
</script>
<script>
        $(document).ready(function () {
            // Bắt sự kiện khi người dùng click vào button
            $('#clear_now').click(function (e) {
                 // Ngăn không cho load lại trang
                e.preventDefault();
                // reset form
                $("#order_form")[0].reset();
                // ẩn cái form họ & tên
                $("#order_by_on").fadeOut('slow');
                $('#order_by').val("false");
            });
            $('#order_by').click(function (e) {
                let checked = $(this).is(':checked');
                if(checked == true){
                    // $("#order_by_on").show();
                    $('#order_by').val("true");
                    $("#order_by_on").fadeIn('slow')
                }else{
                    // $("#order_by_on").hide();
                    $('#order_by').val("false");
                    $("#order_by_on").fadeOut('slow')
                }
                // document.getElementById('order_by_on').style.display = "flex"
            });
             $('#order_now').click(function (e) {
                 // Ngăn không cho load lại trang
                 e.preventDefault();
                 //Lấy giá trị của 2 ô input
                 let order_name = $('#order_name').val(),
                    order_note = $('#order_note').val(),
                    order_by = $('#order_by').val(),
                    order_name_by = $('#order_name_by').val();
                    $.ajax({
                        url: '/pages/order/Action.php?act=new',
                        type: 'POST',
                        data: {
                            order_name,
                            order_note,
                            order_by,
                            order_name_by
                        },
                        // Nếu thành công thì hiển thị kết quả ra trình duyệt
                        success: function (response) {
                            // console.log(response)
                            let res = JSON.parse(response);
                            $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                            $('#result').fadeIn('slow', function(){
                                $('#result').delay(3000).fadeOut();
                            });
                            if(res.type == "success"){
                                $("#order_form")[0].reset();
                                $("#order_by_on").fadeOut('slow');
                                $('#order_by').val("false");
                                LoadTable();
                                LoadRecord();
                                pagination(1, $('.page-link')[1]);
                            }
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                    
                 
             });
             
        });
        function pagination($i, e) {
            $('.page-item').removeClass("active");
            $('.page-link').removeClass("active");
            $(e).addClass('active');
            $.ajax({
                url: '/pages/order/Action.php?act=get',
                method: 'POST',
                data: {
                    page: $i
                },
                success: function (data) { 
                        $('#data_order > tbody').html(data)
                }
            });
        }
        function LoadTable() {
            $.ajax({
                url: '/pages/order/Action.php?act=get',
                method: 'POST',
                data: {
                    page: 1
                },
                success: function (data) { 
                        $('#data_order > tbody').html(data)
                }
            });
        }
        function LoadRecord() {
            $.ajax({
                url: '/pages/order/Action.php?act=count',
                method: 'GET',
                success: function (data) { 
                        $('#total').html(`( ${data} đơn)`)
                }
            });
        }
    </script>