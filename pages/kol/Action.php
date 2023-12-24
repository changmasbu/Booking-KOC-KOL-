<?php
include('../../include/init.php');

$act = $_GET['act'];
switch ($act) {
    case 'addinfo':
      $id_user    = $data_user['id']; // Lấy id của người dùng từ $data_user
      $selectedSocial = check_input($_POST['selectedSocial'], $db);
      
      if($selectedSocial === 'Birth'  ){
        $Input = check_input($_POST['customInput'], $db);
        $customInput = date('d/m/Y',strtotime($Input));
        }else {
        $customInput = check_input($_POST['customInput'], $db);
        };
      $check      = $db->num_rows("SELECT * FROM `tbl_kol` WHERE `value` = '$customInput'");
      $checkBirth      = $db->num_rows("SELECT * FROM `tbl_kol` WHERE `id_user`='$id_user' and  `key` = 'Birth'");

    if(!$selectedSocial || !$customInput){
        $result['type']     = "danger";
        $result['message']  = "<b>Thất bại!</b> Vui lòng điền social và link";
        echo json_encode($result);
    }elseif($selectedSocial === 'Birth' && $checkBirth > 0){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b> Bạn đã thêm ngày sinh rồi";   
        echo json_encode($result);
    }elseif($selectedSocial === 'Birth'  &&  $customInput == '01/01/1970'){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b>Chưa nhập ngày sinh";
        echo json_encode($result);
    }elseif($check > 0){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b> Tên kênh hoặc sdt zalo đã tồn tại";   
        echo json_encode($result);
    }else{

        $db->query("INSERT INTO `tbl_kol` (`id_user`, `key`, `value`) VALUES ('$id_user', '$selectedSocial', '$customInput')");
        $result['type']     = "success";
        $result['message']  = "<b>Thành công!</b> Bạn đã thêm thông tin thành công";
        echo json_encode($result);
     
    }

     break;
     case 'addtype':
        case 'addtype':
        $id_user    = $data_user['id']; // Lấy id của người dùng từ $data_user
        $key = check_input($_POST['key'], $db); 
        $types = check_input($_POST['types'], $db); 
        $check_type  = $db->num_rows("SELECT * FROM `tbl_kol` WHERE `key` = '$key' and id_user = '$id_user'");
        if(!$types){
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b> Vui lòng check vào lĩnh vực";
        }elseif($key === 'Type'&& $check_type > 0){
            $db->query("UPDATE `tbl_kol` SET `value`='$types' WHERE `id_user`='$id_user' and `key`='$key'");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b> Bạn đã cập nhật type ";
            }else{
            $db->query("INSERT INTO `tbl_kol`(`id_user`, `key`, `value`) VALUES ('$id_user', '$key','$types')");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b> Bạn đã thêm lĩnh vực thành công";
         }
        echo json_encode($result);

        break;
    case 'show':
            $id = check_input($_GET['id'], $db); 
            // $query_run = $db->query("SELECT * FROM `tbl_kol`  WHERE `id` = '$id'");
            $query_run= $db->num_rows("SELECT * FROM `tbl_kol`  WHERE `id` = '$id'");
           
            
            if ($query_run > 0 ) {
                $sql ="SELECT * FROM `tbl_kol`  WHERE id = '$id'";
                $kol =$db->fetch_assoc($sql, 1) ;
                  // Truy cập các giá trị từ cột "key" và "value"
            
                $value = $kol['value'];
                $key = $kol['key'];
                $id = $kol['id'];
                $result = [
                    'type' => 'success',
                    'message' => '<b>Thành công!</b>',
                    'data' => [
                        'key' => $key,
                        'value' => $value,
                        'id' => $id
                    ]
                ];
            } else {
                $result['type'] = "danger";
                $result['message'] = "<b>Thất bại</b>Bạn không tìm thấy id ";
            } 
            echo json_encode($result);
        

    break;
    case 'update':
        $id_up      = check_input($_POST['id'], $db); 
        $value      = check_input($_POST['value'], $db);
        $check      = $db->num_rows("SELECT * FROM `tbl_kol` WHERE `value` = '$value'");

        if(!$value){
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b>Vui lòng điền link hoặc sdt cho zalo";
        }elseif($check > 0){
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b>Tên kênh hoặc sdt zalo đã tồn tại";   
        }else{
            $updateAt = CUR_DATE;
            $db->query("UPDATE tbl_kol
                        SET `value`= '$value' 
                        ,update_at='$updateAt'
                        WHERE id = $id_up");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b>Bạn đã cập nhật tài khoản thành công"; 

            }         
            echo json_encode($result);

    break;

    case 'del':  
        $id_del = check_input($_POST['id'], $db); 
           $db->query("DELETE FROM tbl_kol  WHERE id = $id_del");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b> Bạn đã xóa thành công";
        echo json_encode($result);
    case 'comment':  

            $id_user =  $data_user['id']; 
            $name =  $data_user['fullname']; 
            $id_post = check_input($_POST['id_post'],$db);
            $comment = check_input($_POST['comment'],$db);
            // Thêm dữ liệu vào cơ sở dữ liệu
            $db->query("INSERT INTO `tbl_comment`(`id_post`, `id_user`, `fullname`, `comment`)
                                           VALUES ('$id_post','$id_user','$name','$comment')");
            $result['type']     = "success";
            echo json_encode($result);
    break;
    
break;
    default:
        // Báo lỗi
        break;
}
