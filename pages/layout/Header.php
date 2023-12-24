<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
</head>
<body>
<!-- <div class="container-fluid"> -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow">
    <div class="container d-flex flex-wrap">
  
      <?php
         if($user == ''){
            echo'
           
  <!-- Navbar content -->

            <ul class="nav">
                <li class="nav-item"><a href="/login" class="nav-link link-dark px-2">Đăng nhập</a></li>
                <li class="nav-item"><a href="/register" class="nav-link link-dark px-2">Đăng ký</a></li>
            </ul>
      ';
         }else{
            echo'
                <div class="dropdown">
                    <a class="btn btn-link dropdown-toggle link-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      <span id="dis_name"> '.$data_user['fullname'].'</span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/change">Cập nhật thông tin</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/logout">Đăng xuất</a></li>
                        <li><a class="dropdown-item" href="/">Trở về</a></li>

                    </ul>
                </div>
                ';

                
         }
      ?>
      
    </div>
    
  </nav>