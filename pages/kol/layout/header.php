<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking Admin</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow-sm">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" style = "color: #fff;" href="/brand/page">

                    <!-- Sidebar Toggle (Topbar) -->
                    <div class="sidebar-brand-text mx-3 mr-5">
                        <i class="fa-solid fa-b"  style="color: #000;"></i>
                        <i class="fa-solid fa-o" style="color: #000;"></i>
                        <i class="fa-solid fa-o fa-2xl" style="color: #000;" ></i>
                        <i class="fa-solid fa-k fa-sm" style="color: #000;"></i>
                        <i class="fa-solid fa-i" style="color: #000;"></i>
                        <i class="fa-solid fa-n" style="color: #000;"></i>
                        <i class="fa-solid fa-g" style="color: #000;"></i>
                        </div>
                </a>
                <!-- Topbar -->
                <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow"> -->

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                      -->
                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                              <!-- <ul class="nav me-auto">
                              <li class="nav-item"><a href="/kol/page" class="nav-link link-dark px-2 active" aria-current="page">Trang chủ</a></li>                    
                              </ul> -->
                    <ul class="navbar-nav ml-auto">
                   


<!-- Nav Item - Alerts  aaaaaaaaaaaaaaa-->
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="/kol/page" id="alertsDropdown" role="button"
        data-toggle="" aria-haspopup="true" aria-expanded="false">
        <i class="fa-solid fa-house" style="color: #000000;"></i> 
    </a>
</li>


                        <div class="topbar-divider d-none d-sm-block"></div>
                                <?php
                                    if($user == ''){
                                    
                                    }else{
                                        echo'
                                            <!-- Nav Item - User Information -->
                                            <li class="nav-item dropdown no-arrow">
                                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"> '.$data_user['fullname'].'</span>
                                                    <img class="img-profile rounded-circle"
                                                        src="../assets/img/undraw_profile.svg">
                                                </a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                    aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="/kol/profile">
                                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Profile
                                                </a>
                                                    <a class="dropdown-item" href="/kol/pay">
                                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Thanh toán 
                                                </a>
                                                    <a class="dropdown-item" href="/change">
                                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Cập nhật thông tin
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Logout
                                                    </a>
                                                </div>
                                            </li>
                                            ';
                                    }
                                ?>

                     
                    </ul>

                </nav>
                <!-- End of Topbar -->
                  <!-- Logout Modal-->
                  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc muốn đăng xuất ?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">Hãy chọn "Có" nếu bạn muốn đăng xuất</div>
                                 <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                                    <a class="btn btn-primary" href="/logout">Có</a>
                                 </div>
                              </div>
                        </div>
                     </div>
