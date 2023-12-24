<?php
include 'pages/kol/layout/header.php';
$act = $_GET['page'];
switch ($act) {
    case '':
    case 'page':
        include('Page.php');
        break;
    case 'profile':
        include('Profile.php');
        break;
    case 'pay':
        include('Pay.php');
        break;
    case 'update':
        include('Update.php');
        // Lấy danh sách
        break;
    case 'del':
        // Xóa bài viết
        break;

    case 'test':
        // Xóa bài viết
        break;
    default:
        // Báo lỗi
        break;
}
include 'pages/kol/layout/footer.php';
