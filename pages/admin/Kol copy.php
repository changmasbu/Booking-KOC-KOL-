    
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">BẢNG QUẢN LÝ KOL_KOC</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
                            Add User
                            </button>
                            <div id="results" class="mb-3"></div>

                            <!-- Modal -->
                            <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="result" class="mb-3"></div>

                                                <form id="register_form">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="role" id="role1" value="1" checked>
                                                                    <label class="form-check-label" for="exampleRadios1">KOL-KOC</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="email" class="form-label">Địa chỉ Email</label>
                                                            <input type="email" class="form-control" id="email" placeholder="name@example.com" maxlength="32">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="username" class="form-label">Họ & Tên</label>
                                                            <input type="text" class="form-control" id="fullname" placeholder="Nhập họ & tên" maxlength="32">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="username" class="form-label">Tên đăng nhập</label>
                                                            <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" maxlength="8">
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label for="password" class="form-label">Mật khẩu</label>
                                                            <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" maxlength="14">
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label for="re-password" class="form-label">Xác nhận mật khẩu</label>
                                                            <input type="password" class="form-control" id="re-password" placeholder="Xác nhận mật khẩu" maxlength="14">
                                                        </div>

                                                </form>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <button class="btn btn-primary" name="submit" id="register"> Đăng ký</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        




                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                  
        
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Họ & Tên</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Action</th>
                                            <th>Report</th>
                                        </tr>
                                    </thead>
                                        <?php
                                        $sql = "SELECT * FROM tbl_user WHERE role = 1 and del != 1";
                                       foreach($db->fetch_assoc($sql, 0) as $row){
                                        ?>
                                    <tbody>
                                    <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td> 
                                                <button class="delete btn btn-outline-danger" data-id="<?php echo $row['id'];?>" >
                                                <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <button class="edit btn btn-outline-info" type = "button" value ="<?php echo $row['id'];?>">
                                                <i class="fa-solid fa-pen"></i>
                                                </button>
                                            </td>
                                            <td> <a href="show.php?edit=<?php echo $row['id'];?>" class="btn btn-danger">
                                                Report<i class="uil uil-info-circle"></i></a></td>
                                        </tr>
                                       
                                    </tbody>
                                    <?php }; ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
  

        <!-- Modal update user -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result_up" class="mb-3"></div>

                        <form id="update_form">
                                <div class="form-group mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role" id="role1_up" value="1" checked>
                                            <label class="form-check-label" for="exampleRadios1">KOL-KOC</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Địa chỉ Email</label>
                                    <input type="email" class="form-control" id="email_up" value="<?php echo $row['email']; ?>" maxlength="32" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="username" class="form-label">Họ & Tên</label>
                                    <input type="text" class="form-control" id="fullname_up" value="<?php echo $row['fullname']; ?>" maxlength="32" >
                                </div>
                                <div class="form-group mb-3">
                                    <label for="username" class="form-label">Tên đăng nhập</label>
                                    <input type="text" class="form-control" id="username_up" value="<?php echo $row['username']; ?>" maxlength="8"disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Mật khẩu mới</label>
                                    <input type="password" class="form-control" id="password_up" placeholder="Nhập mật khẩu" maxlength="14">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="re-password" class="form-label">Xác nhận mật khẩu mới</label>
                                    <input type="password" class="form-control" id="re-password_up" placeholder="Xác nhận mật khẩu" maxlength="14">
                                </div>
                        </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button class="btn btn-primary" name="submit" id="update" data-id="<?php echo $row['id'];?>">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        //add
        $(document).ready(function () {
            // Bắt sự kiện khi người dùng click vào button
             $('#register').click(function (e) {
                 // Ngăn không cho load lại trang
                 e.preventDefault();
                 //Lấy giá trị của 2 ô input
                 let email = $('#email').val(),
                     role = $('input[name="role"]:checked').val();
                     fullname = $('#fullname').val(),
                     username = $('#username').val(),
                     password = $('#password').val(),
                     repassword = $('#re-password').val();
                     console.log (email);
                 // Gửi request
                 $.ajax({
                    url: '/pages/admin/Action.php?act=addUser',
                     type: 'POST',
                    data: {
                        email,
                        role,
                        fullname,
                        username,
                        password,
                        repassword
                    },
                     // Nếu thành công thì hiển thị kết quả ra trình duyệt
                     success: function (response) {
                        console.log(response)
                        let res = JSON.parse(response);
                        $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                        $('#result').fadeIn('slow', function(){
                            $('#result').delay(5000).fadeOut();
                        });
                        if(res.type == "success"){
                            $("#register_form")[0].reset();
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
        if (confirm('Xác nhận xóa user này ?')) {
            let id = $(this).data('id'); // Lấy giá trị id từ thuộc tính data-id
            $.ajax({
                url: '/pages/admin/Action.php?act=del',
                type: 'POST',
                data: {
                    'delete': true,
                    'id': id
                },
                success: function (response) {
                console.log(response)
                    let res = JSON.parse(response);
                            $('#results').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`); // chổ này có 2 TH sẽ lỗi,1: trar về k có gì. 2 kết uqar tra rveef k phải là array hoặc trả về dư ký tự. chổ này bên ACTION.PHP rm pải đảm bảo trả về luôn có kq và kq hải đầy đủ
                            $('#results').fadeIn('slow', function(){
                                $('#results').delay(5000).fadeOut();
                        });
                        if(res.type == "success"){

                            // location.reload(); 
                            }   
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
});
//modal show
$(document).ready(function () {
    $('.edit').click(function (e) {
        
        e.preventDefault();
        var id = $(this).val();
        console.log(id);
        $.ajax({
            url: '/pages/admin/Action.php?act=show&id=' + id,
            type: 'GET',
            success: function (response) {
                console.log(response);

                let res = JSON.parse(response);
                // Xử lý kết quả và hiển thị thông báo tương ứng
                $('#result_up').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                $('#result_up').fadeIn('slow', function () {
                    $('#result_up').delay(5000).fadeOut();
                });
                if (res.type == "success") {
                    console.log(res.data);
                    $('#update').val(res.data.id); // truyền cho nút lưu id
                    
                    $('#email_up').val(res.data.email);
                    $('#fullname_up').val(res.data.fullname);
                    $('#username_up').val(res.data.username);
                    $('#password_up').val(res.data.password);
                    $('#re-password_up').val(res.data.password);
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
                 let email = $('#email_up').val(),
                     role = $('input[name="role"]:checked').val();
                     fullname = $('#fullname_up').val(),
                     password = $('#password_up').val(),
                     repassword = $('#re-password_up').val();
                     id_up = $(this).data('id'); // Lấy giá trị id từ thuộc tính data-id
                     console.log("Email: " + email);
                    console.log("Role: " + role);
                    console.log("Fullname: " + fullname);   
                    console.log("Password: " + password);
                    console.log("Repassword: " + repassword);
                    console.log("id: " + id_up);

        
                 // Gửi request
                 $.ajax({
                    url: '/pages/admin/Action.php?act=update',
                    type: 'POST',
                    data: {
                        email,
                        role,
                        fullname,
                        password,
                        repassword,
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
                            $("#update_form")[0].reset();
                        }
                     },
                     error: function (error) {
                        console.log(error);
                     }
                 });
             });
        });

    </script> 