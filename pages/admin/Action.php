<?php
include('../../include/init.php');

$act = $_GET['act'];
switch ($act) {
   case 'addUser': 
            // $data_user['id']
            // $id         = check_input($_POST['id'], $db);
            $email      = check_input($_POST['email'], $db);
            $username   = check_input($_POST['username'], $db);
            $fullname   = check_input($_POST['fullname'], $db);
            $role       = check_input($_POST['role'], $db);
            $password   = md5(md5(trim($_POST['password'])));
            $rePassword = md5(md5(trim($_POST['repassword'])));
            $check      = $db->num_rows("SELECT * FROM `tbl_user` WHERE username = '$username'");
            if(!$email || !$username || !$password || !$rePassword || !$fullname){
                $result['type']     = "danger";
                $result['message']  = "<b>Thất bại!</b> Vui lòng điền đầy đủ thông tin.";
                echo json_encode($result);
            }elseif(strlen($username)  > 8 || strlen($username)  < 2){
                $result['type']     = "danger";
                $result['message']  = "<b>Thất bại!</b> Tên đăng nhập giới hạn từ 2 -> 8 ký tự.";
                echo json_encode($result);
            }elseif(strlen($_POST['password'])  > 14 || strlen($_POST['password'])  < 6){
                $result['type']     = "danger";
                $result['message']  = "<b>Thất bại!</b> Mật khẩu giới hạn từ 6 -> 14 ký tự.";
                echo json_encode($result);
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $result['type']     = "danger";
                $result['message']  = " <b>Thất bại!</b>Email không đúng định dạng.";
                echo json_encode($result);
            }elseif($password != $rePassword){
                $result['type']     = "danger";
                $result['message']  = " <b>Thất bại!</b> Xác nhận mật khẩu không khớp.";
                echo json_encode($result);
            }elseif($check > 0){
                $result['type']     = "danger";
                $result['message']  = " <b>Thất bại!</b> Người dùng đã tồn tại.";
                echo json_encode($result);
            }else{
                $createAt = CUR_DATE;
                $db->query("INSERT INTO `tbl_user`(`fullname`, `username`, `password`, `email`,`role`, `create_at`) VALUES ('$fullname', '$username', '$password', '$email','$role', '$createAt')");
                $result['type']     = "success";
                $result['message']  = "<b>Thành công!</b> Bạn đã đăng ký tài khoản thành công";
                echo json_encode($result);
               //  $session->send($username);
            }
        break;
    case 'show':
            $id = check_input($_GET['id'], $db); 
            $query_run= $db->num_rows("SELECT * FROM `tbl_user`  WHERE `id` = '$id' ");
        
            if ($query_run > 0 ) {
                $sql ="SELECT * FROM `tbl_user`  WHERE id = '$id'";
                $user =$db->fetch_assoc($sql, 1) ;
                $result['type'] = "success";
                $result['message'] = "<b>Thành công!</b> Bạn đã tìm thấy id ";
                $result['data'] = $user;
                
            } else {
                $result['type'] = "danger";
                $result['message'] = "<b>Thất bại</b> Ban da ko tim thay id";
            } 
            echo json_encode($result);
        

    break;
    case 'get':
        // Lấy danh sách
        break;  
            case 'del':
                $deleteAt = CUR_DATE;
                $id_user = $data_user['id'];
                $id_del = check_input($_POST['id'], $db); 
                if($id_del == $id_user){
                    $result['type']     = "danger";
                    $result['message']  = "<b>Thất bại</b> Bạn không thể xóa chính bạn";
                }else{
                    $check = $db->query("UPDATE tbl_user 
                                         SET id_del = $id_user ,  del = 1  , delete_at = '$deleteAt' 
                                         WHERE id = $id_del AND `role` > 0 "); 
                    $result['type']     = "success";
                    $result['message']  = "<b>Thành công!</b> Bạn đã xóa user thành công";
                }
                echo json_encode($result);
        break;
        case 'update': 
            // $data_user['id']
            // $id         = check_input($_POST['id'], $db);
            $id_up      = check_input($_POST['id'], $db); 
            $email      = check_input($_POST['email'], $db);
            $fullname   = check_input($_POST['fullname'], $db);
            $role       = check_input($_POST['role'], $db);
            $password   = md5(md5(trim($_POST['password'])));
            $rePassword = md5(md5(trim($_POST['repassword'])));
            if(!$email || !$password || !$rePassword || !$fullname){
                $result['type']     = "danger";
                $result['message']  = "<b>Thất bại!</b> Vui lòng điền đầy đủ thông tin. ";
            }elseif(strlen($_POST['password'])  > 14 || strlen($_POST['password'])  < 6){
                $result['type']     = "danger";
                $result['message']  = "<b>Thất bại!</b> Mật khẩu giới hạn từ 6 -> 14 ký tự.";
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $result['type']     = "danger";
                $result['message']  = " <b>Thất bại!</b>Email không đúng định dạng.";
            }elseif($password != $rePassword){
                $result['type']     = "danger";
                $result['message']  = " <b>Thất bại!</b> Xác nhận mật khẩu không khớp.";
            }else{
                $updateAt = CUR_DATE;
                $db->query("UPDATE tbl_user
                            SET fullname= '$fullname' ,password='$password' ,email='$email' ,update_at='$updateAt'
                            WHERE id = $id_up AND `role` > 0 ");
                $result['type']     = "success";
                $result['message']  = "<b>Thành công!</b> Bạn đã cập nhật tài khoản thành công";  
                }         
            echo json_encode($result);
        
        break;
    default:
        // Báo lỗi
        break;
}