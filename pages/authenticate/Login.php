<?php  include 'pages/layout/Header.php';?>
<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div id="result" class="mb-3"></div>
        <div class="card mt-5">
            <div class="card-header" style="background-color:blue-200;">
                <center>Đăng nhập</center>
            </div>
            <div class="card-body">
            <form id="login_form">
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" maxlength="8">
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" maxlength="14">
                </div>
                <div class="form-group mb-3"  >
                    <div class="form-check" style="text-align: left;">
                        <input class="form-check-input" type="checkbox" id="remeber" >
                        <label class="form-check-label" for="remeber">
                            Ghi nhớ đăng nhập
                        </label>
                        <a href="/forgot" style="float: right;">Quên mật khẩu?</a>
                    </div>
                </div>
                <div class="form-group mb-3 text-center">
                  <button class="btn btn-primary" name="submit" id="login"> Đăng nhập</button>
                </div>
                <div class="form-group mb-3 text-center" >
                    <span>Bạn chưa có tài khoản? </span> <a href="/register">Đăng ký ngay</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<script>
    
    document.title = "Đăng nhập | <?=SITE_NAME?>" ;
</script>
<script>
        $(document).ready(function () {
            // Bắt sự kiện khi người dùng click vào button
             $('#login').click(function (e) {
                 // Ngăn không cho load lại trang
                 e.preventDefault();
                 //Lấy giá trị của 2 ô input
                 let username = $('#username').val(),
                     password = $('#password').val(),
                     remeber  = $('#remeber').is(':checked');
                 // Gửi request 
                 $.ajax({
                    url: '/pages/authenticate/Action.php?act=login',
                    type: 'POST',
                    data: {
                        username,
                        password,
                        remeber
                    },
                     // Nếu thành công thì hiển thị kết quả ra trình duyệt
                     success: function (response) {
                        let res = JSON.parse(response);
                        $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                        $('#result').fadeIn('slow', function(){
                            $('#result').delay(5000).fadeOut();
                        });
                        if(res.type == "success"){
                            $("#login_form")[0].reset();
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
<?php
include 'pages/layout/Footer.php';
?>