<?php  include 'pages/layout/Header.php';?>

<div class="row mt-5">
    <div class="col-md-12">
        <div id="result"></div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <center>Cập nhật thông tin</center>
            </div>
            <div class="card-body">
                <form id="change-form">
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="username" value="<?=$data_user['username']?>" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Địa chỉ Email</label>
                            <input type="text" class="form-control" id="email" value="<?=$data_user['email']?>" disabled>

                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label">Họ & tên</label>
                            <input type="text" class="form-control" id="fullname" value="<?=$data_user['fullname']?>">
                        </div>
                        <div class="form-group mb-3 text-center">
                            <button class="btn btn-primary" name="submit" id="update"> Cập nhật</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <center>Đổi mật khẩu</center>
            </div>
            <div class="card-body">
                <form id="change-password-form">
                    <div class="form-group mb-3">
                        <label for="old_password" class="form-label">Mật khẩu cũ</label>
                        <input type="password" class="form-control" id="old_password" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="new_password" class="form-label">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="new_password" >

                    </div>
                    <div class="form-group mb-3">
                        <label for="confirm_password" class="form-label">Nhập lại mật khẩu mới</label>
                        <input type="password" class="form-control" id="confirm_password" >
                    </div>
                    
                    <div class="form-group mb-3 text-center">
                        <button class="btn btn-primary" name="submit" id="change"> Cập nhật</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php include 'pages/layout/Footer.php'; ?>


<script>
    document.title = "Cập nhật thông tin | <?=SITE_NAME?>" ;
</script>
<script>
        $(document).ready(function () {
            // Bắt sự kiện khi người dùng click vào button
            $('#update').click(function (e) {
                 // Ngăn không cho load lại trang
                 e.preventDefault();
                 //Lấy giá trị của 2 ô input
                 let fullname = $('#fullname').val();
                 $.ajax({
                    url: '/pages/authenticate/Action.php?act=change_info',
                    type: 'POST',
                    data: {
                        fullname
                    },
                     // Nếu thành công thì hiển thị kết quả ra trình duyệt
                     success: function (response) {
                        let res = JSON.parse(response);
                        $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                        $('#result').fadeIn('slow', function(){
                            $('#result').delay(5000).fadeOut();
                        });
                        //dis_name
                        if(res.type == "success"){
                            $("#dis_name").html(fullname);
                        }
                     },
                     error: function (error) {
                        console.log(error);
                     }
                 });
            });
        });
        $(document).ready(function () {
            $('#change').click(function (e) {
                 // Ngăn không cho load lại trang
                 e.preventDefault();
                 //Lấy giá trị của 2 ô input
                 let old_password = $('#old_password').val();
                 let new_password = $('#new_password').val();
                 let confirm_password = $('#confirm_password').val();
                 $.ajax({
                    url: '/pages/authenticate/Action.php?act=change_password',
                    type: 'POST',
                    data: {
                        old_password,
                        new_password,
                        confirm_password
                    },
                     // Nếu thành công thì hiển thị kết quả ra trình duyệt
                     success: function (response) {
                        let res = JSON.parse(response);
                        $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                        $('#result').fadeIn('slow', function(){
                            $('#result').delay(5000).fadeOut();
                        });
                        if(res.type == "success"){
                            $("#change-password-form")[0].reset();
                        }
                     },
                     error: function (error) {
                        console.log(error);
                     }
                 });
            });
        });

    </script>