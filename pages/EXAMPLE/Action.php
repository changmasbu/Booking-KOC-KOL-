<?php
include('../../include/init.php');

$act = $_GET['act'];
switch ($act) {
    case 'new':
        // Thêm bài viết mới ở đây
        break;
    case 'load':
       // Load danh sách bài viét
        break;
    case 'count':
    //   Đếm
        break;
    case 'get':
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
