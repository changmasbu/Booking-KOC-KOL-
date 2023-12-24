<?php  include 'pages/layout/Header.php';?>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div id="result" class="mb-3"></div>
        <div class="card mt-5 mb-4">
            <div class="card-header">
                <center>Đăng ký</center>
            </div>
            <div class="card-body">
                <form id="register_form">
                <div class="form-group mb-3">
                    <div class="form-group mb-3"><label for="email" class="form-label">Bạn là:</label>
                   
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="role1" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">KOL-KOC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="role2" value="2">
                        <label class="form-check-label" for="exampleRadios2">Brand</label>
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

                    <div class="form-group mb-3 text-center">
                        <button class="btn btn-primary" name="submit" id="register"> Đăng ký</button>
                    </div>
                    <div class="form-group mb-3 text-center" >
                    <span>Bạn đã có tài khoản? </span> <a href="/login">Đăng nhập ngay</a>
                </div>
                </form>
               
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<?php include 'pages/layout/Footer.php'; ?>
<script>
    document.title = "Đăng ký tài khoản | <?=SITE_NAME?>" ;
</script>
<script>
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
                 // Gửi request
                 $.ajax({
                    url: '/pages/authenticate/Action.php?act=register',
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
                        let res = JSON.parse(response);
                        $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                        $('#result').fadeIn('slow', function(){
                            $('#result').delay(5000).fadeOut();
                        });
                        if(res.type == "success"){
                            $("#register_form")[0].reset();
                            window.setTimeout(function(){
                                //Chuyển trang qua trang chủ
                                window.location.href = "/";
                            }, 1500);
                        }
                     },
                     error: function (error) {
                        console.log(error);
                     }
                 });
             });
        });
    </script> 