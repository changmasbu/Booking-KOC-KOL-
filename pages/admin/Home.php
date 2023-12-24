<?php
include 'pages/admin/layout/header.php';
$act = $_GET['page'];
switch ($act) {
    case '':
    case 'dashboard':
            include 'Dashboard.php';
            break;
            echo ('trang chu admin');
    case 'kol':
        include 'Kol.php';
        break;
    case 'brand':
        include 'Brand.php';
        break;
    case 'report':
        include 'Report.php';
        break;
    case 'post':
        include 'Post.php';
        break;
    case 'money':
        include 'Money.php';
        break;
    case 'load':
       // Load danh sách bài viét
        break;
    case 'count':
    //   Đếm
        break;

        // Xóa bài viết
        break;
    default:
        include 'pages/admin/layout/NotFound.php';
    break;
}
include 'pages/admin/layout/footer.php';

?>