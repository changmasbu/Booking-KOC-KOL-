<?php
include('../../include/init.php');

$act = $_GET['act'];
switch ($act) {
    case 'addinfo':
      $id_user    = $data_user['id']; // Lấy id của người dùng từ $data_user
      $selectedSocial = check_input($_POST['selectedSocial'], $db);
      $customInput = check_input($_POST['customInput'], $db);
      $link = check_input($_POST['link'], $db);
      $check      = $db->num_rows("SELECT * FROM `tbl_kol` WHERE `value` = '$customInput'");
      $checkBirth      = $db->num_rows("SELECT * FROM `tbl_kol` WHERE `id_user`='$id_user' and  `key` = 'Birth'");

    if(!$selectedSocial || !$customInput){
        $result['type']     = "danger";
        $result['message']  = "<b>Thất bại!</b> Vui lòng điền social và tên kênh";
        echo json_encode($result);
    }elseif($selectedSocial === 'Birth' && $checkBirth > 0){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b> Bạn đã thêm ngày sinh rồi";   
        echo json_encode($result);
    }elseif($check > 0){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b> Tên kênh hoặc sdt zalo đã tồn tại";   
        echo json_encode($result);
    }else{
        $db->query("INSERT INTO `tbl_kol` (`id_user`, `key`, `value`,`link`) VALUES ('$id_user', '$selectedSocial', '$customInput','$link')");
        $result['type']     = "success";
        $result['message']  = "<b>Thành công!</b> Bạn đã thêm thông tin thành công";
        echo json_encode($result);
      break;
    }
    
    case 'update':
    //   Đếm
        break;
    case 'delete':
        // Lấy danh sách
        break;
    case 'show':
            $id = check_input($_GET['id'], $db); 
            $query_run = $db->query("SELECT * FROM `tbl_kol`  WHERE `id` = '$id'");
        
            if (num_rows($query_run) > 0) {
                $sql ="SELECT * FROM `tbl_kol`  WHERE id = '$id'";
                $kol =$db->fetch_assoc($sql, 1) ;
                  // Truy cập các giá trị từ cột "key" và "value"
                $key = $kol['key'];
                $value = $kol['value'];
                $link = $kol['link'];

                $result = [
                    'type' => 'success',
                    'message' => '<b>Thành công!</b>',
                    'data' => [
                        'key' => $key,
                        'value' => $value,
                        'link' => $link
                    ]
                ];
            } else {
                $result['type'] = "danger";
                $result['message'] = "<b>Thất bại</b> Bạn không tìm thấy id ";
            } 
            echo json_encode($result);
        

    break;
    case 'test':
        // Xóa bài viết
        break;
    default:
        // Báo lỗi
        break;
}
