
<div class="row mt-5 mb-5">
    <div class="col-md-3"></div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header" style="">
            <div class="fs-3" style="text-align: center; color: #000;">Profile</div>

            </div>
            <div class="card-body">
                <div id="result" class="mb-3"></div>    

                    <form id="add_form" class="">
                    <div class="form-group">
                        
                        <?php
                        $id = $data_user['id'];
                        $sql = "SELECT * FROM tbl_brand where `key` != 'Type' and id_user = '$id'";
                        foreach($db->fetch_assoc($sql, 0) as $row){
                        ?>
                    
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary" id="button-addon4" style="width: 150px;" data-id="<?php echo $row['id']; ?>"> <?php echo $row['key']; ?></button>
                        </div>
                            <input type="text" class="form-control" placeholder="" value="<?php echo $row['value']; ?>" aria-label="<?php echo $row['key']; ?>" aria-describedby="button-addon4" >
                        
                           
                            <button class="delete btn btn-outline-danger" data-id="<?php echo $row['id']; ?>"  >
                                <i class="fa-solid fa-trash"></i></button>
                            <button class="edit btn btn-outline-info update-btn" type="button"  value ="<?php echo $row['id'];?>" >
                                <i class="fa-solid fa-pen"></i></button>
                        </div>
                        <?php } ?>
                    </div>
                    
                </form>
                <div class="d-flex justify-content-end">
                        <a class ="btn btn-primary" href= "/brand/profile">Trở về</a>
                    </div>
               
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>  
    <div class="col-md-2"></div>   
</div>

        <!-- Modal update user -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2" >Cập nhật <span id="key" > </span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result_up" class="mb-3"></div>
                    <form id="update_form">
                                <div class="form-group mb-3">
                                    <label for=""> Thông tin cũ</label>
                                    <input type="text" class="form-control"  name ="value" id="value" disabled>
                                </div>
                                <div class="form-group mb-3">
                                    <label for=""> Thông tin mới</label>
                                    <input type="text" class="form-control"  name ="value" id="value_up" placeholder="Hãy chỉnh sửa ở đây ">
                                </div>
                        </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button class="btn btn-primary" name="submit" id="update" >Cập nhật</button>
                </div>
            </div>
        </div>
    </div>


<script>


//modal show
$(document).ready(function () {
    $('.edit').click(function (e) {
        
        e.preventDefault();
        var id = $(this).val();
        console.log(id);
        $.ajax({
            url: '/pages/brand/Action.php?act=show&id=' + id,
            type: 'GET',
            success: function (response) {
                console.log(response);
                let res = JSON.parse(response);
                // Xử lý kết quả và hiển thị thông báo tương ứng
                $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                $('#result').fadeIn('slow', function () {
                    $('#result').delay(5000).fadeOut();
                });
                if (res.type == "success") {
                    console.log(res.data);
                    $('#update').val(res.data.id); // truyền cho nút lưu id
                    $('#key').html(res.data.key);
                    $('#value').val(res.data.value);
                    $('#updateModal').modal('show');
                    
                }
            },
            error: function (error) {
                console.log(error);
            }
            });
    });
});


//update
$(document).ready(function () {
            // Bắt sự kiện khi người dùng click vào button
             $('#update').click(function (e) {
                 // Ngăn không cho load lại trang
                 e.preventDefault();
                 //Lấy giá trị của 2 ô input
                 let value = $('#value_up').val(),
                     link = $('#link').val(),
                    //  id_up = $(this).data('id'); // Lấy giá trị id từ thuộc tính data-id
                    id_up = $(this).val();
                    console.log("Value: " + value);
                    console.log("id: " + id_up);

        
                 // Gửi request
                 $.ajax({
                    url: '/pages/brand/Action.php?act=update',
                    type: 'POST',
                    data: {
                        value,
                        'id': id_up
                    },
                    
                     // Nếu thành công thì hiển thị kết quả ra trình duyệt
                     success: function (response) {
                        console.log(response)

                        let res = JSON.parse(response);
                        $('#result_up').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                        $('#result_up').fadeIn('slow', function(){
                            $('#result_up').delay(5000).fadeOut();
                        });
                        if(res.type == "success"){
                        }
                     },
                     error: function (error) {
                        console.log(error);
                     }
                 });
             });
        });
    //delete
    $(document).ready(function () {
        $('.delete').click(function (e) {
        e.preventDefault();
        if (confirm('Xác nhận xóa hàng này ?')) {
            let id = $(this).data('id'); // Lấy giá trị id từ thuộc tính data-id
            $.ajax({
                url: '/pages/brand/Action.php?act=del',
                type: 'POST',
                data: {
                    'delete': true,
                    'id': id
                },
                success: function (response) {
                console.log(response)
                    let res = JSON.parse(response);
                            $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`); // chổ này có 2 TH sẽ lỗi,1: trar về k có gì. 2 kết uqar tra rveef k phải là array hoặc trả về dư ký tự. chổ này bên ACTION.PHP rm pải đảm bảo trả về luôn có kq và kq hải đầy đủ
                            $('#result').fadeIn('slow', function(){
                                $('#result').delay(5000).fadeOut();
                        });
                        if(res.type == "success"){

                            location.reload(); 
                            }   
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
});
</script>
