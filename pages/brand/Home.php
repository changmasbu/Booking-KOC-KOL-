<?php
include 'pages/brand/layout/header.php';
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
        break;
    case 'post':
        include('Post.php');
        break;
    case 'comment':
        include('Comment.php');
        break;
    default:
        // Báo lỗi
        break;
}
include 'pages/brand/layout/footer.php';
