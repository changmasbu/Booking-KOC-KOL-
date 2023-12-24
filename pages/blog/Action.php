<?php
include('../../include/init.php');

$act = $_GET['act'];
switch ($act) {
    case 'new':
        $user_id    = $data_user['id'];
        // Thêm bài viết mới ở đây
        $title      = check_input($_POST['title'], $db);
        $content    = check_input($_POST['content'], $db);
        $categories = check_input($_POST['categories'], $db);
        $tags       = check_input($_POST['tags'], $db);
        //  Check bài viết đã tồn tại hay chưa
        $check      = $db->num_rows("SELECT * FROM `tbl_posts` WHERE title = '$title'");
        //  Check rỗng dùng !$tile hoặc empty($title) hoặc !(isset($title)) hoặc strlen($title) hoặc $title !=''
        if(!$title || !$content || !$categories){
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b> Vui lòng điền đầy đủ thông tin!!";
        }elseif($check > 0){ 
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b> Bài viết đã tồn tại !!";
        }else{
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b> Bạn đã đăng thành công";
            $time = time();
            $db->query("INSERT INTO `tbl_posts`(`id_user`, `title`, `content`, `categories`, `tags`, `time`) VALUES ('$user_id', '$title', '$content', '$categories', '$tags', '$time')");
        }
        echo json_encode($result);
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
