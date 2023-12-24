<?php
include('../../include/init.php');

$act = $_GET['act'];
switch ($act) {
    // PROFILE
    case 'addinfo':
      $id_user    = $data_user['id']; // Lấy id của người dùng từ $data_user
      $key = check_input($_POST['key'], $db);
      $value = check_input($_POST['value'], $db);
      $check           = $db->num_rows("SELECT * FROM `tbl_brand` WHERE `value` = '$value'");
      $check_Area      = $db->num_rows("SELECT * FROM `tbl_brand` WHERE `id_user`='$id_user' and  `key` = 'Khu vực'");
 

    if(!$key || !$value){
        $result['type']     = "danger";
        $result['message']  = "<b>Thất bại!</b> Vui lòng điền social và link";
        echo json_encode($result);
    }elseif($key === 'Khu vực' && $check_Area > 0){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b> Bạn đã thêm khu vực rồi , vui lòng bấm cập nhật";   
        echo json_encode($result);
    }elseif($key === 'Birth'  &&  $value == '01/01/1970'){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b>Chưa nhập ngày sinh";
        echo json_encode($result);
    }elseif($check > 0){
        $result['type']     = "danger";
        $result['message']  = " <b>Thất bại!</b> Tên kênh hoặc sdt zalo đã tồn tại";   
        echo json_encode($result);
    }else{

        $db->query("INSERT INTO `tbl_brand` (`id_user`, `key`, `value`) VALUES ('$id_user', '$key', '$value')");
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
        $check_type  = $db->num_rows("SELECT * FROM `tbl_brand` WHERE `key` = '$key'");
        if(!$types){
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b> Vui lòng check vào lĩnh vực";
        }elseif($key === 'Type'&& $check_type > 0){
            $db->query("UPDATE `tbl_brand` SET `value`='$types' WHERE `id_user`='$id_user' and `key`='$key'");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b> Bạn đã cập nhật type ";
            }else{
            $db->query("INSERT INTO `tbl_brand`(`id_user`, `key`, `value`) VALUES ('$id_user', '$key','$types')");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b> Bạn đã thêm lĩnh vực thành công";
         }
        echo json_encode($result);

        break;
    case 'show':
            $id = check_input($_GET['id'], $db); 
            $query_run= $db->num_rows("SELECT * FROM `tbl_brand`  WHERE `id` = '$id'");
           
            
            if ($query_run > 0 ) {
                $sql ="SELECT * FROM `tbl_brand`  WHERE id = '$id'";
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
        $check      = $db->num_rows("SELECT * FROM `tbl_brand` WHERE `value` = '$value'");

        if(!$value){
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b>Vui lòng điền link hoặc sdt cho zalo";
        }elseif($check > 0){
            $result['type']     = "danger";
            $result['message']  = "<b>Thất bại!</b>Tên kênh hoặc sdt zalo đã tồn tại";   
        }else{
            $db->query("UPDATE tbl_brand
                        SET `value`= '$value' 
                        WHERE id = $id_up");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b>Bạn đã cập nhật thông tin thành công"; 

            }         

            echo json_encode($result);
            

    break;

    case 'del':  
        $id_del = check_input($_POST['id'], $db); 
           $db->query("DELETE FROM tbl_brand  WHERE id = $id_del");
            $result['type']     = "success";
            $result['message']  = "<b>Thành công!</b> Bạn đã xóa thành công";
        echo json_encode($result);
    break;

    // PAGE
    case 'addpost':
        $fullname = $data_user['fullname'];
        $id_user    = $data_user['id']; // Lấy id của người dùng từ $data_user
        $title = check_input($_POST['title'], $db);
        $money = check_input($_POST['money'], $db);
        $content = check_input($_POST['content'], $db);
        $type = check_input($_POST['type'], $db);
        $check = $db->num_rows("SELECT * FROM `tbl_post` WHERE `content` = '$content'");
      if(!$title || !$money|| !$content|| !$type){
          $result['type']     = "danger";
          $result['message']  = "<b>Thất bại!</b> Vui lòng điền đầy đủ các phần.";
      }elseif($check > 0){
          $result['type']     = "danger";
          $result['message']  = " <b>Thất bại!</b>Đã có bài viết này tồn tại";   
      }else{
          $createAt = CUR_DATE;
          $db->query("INSERT INTO `tbl_post` (`id_user`,`fullname`, `title`, `money`,`content`,`type`,`create_at`) VALUES ('$id_user','$fullname', '$title', '$money','$content','$type','$createAt')");
          $result['type']     = "success";
          $result['message']  = "<b>Thành công!</b> Bạn đã tạo bài viết thành công";
      }
      echo json_encode($result);
  
       break;

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

    case 'showComment':  
        $sql = $db->num_rows("SELECT * FROM tbl_comment ORDER BY id DESC");
        if ($sql > 0 ) {
            $sql = "SELECT * FROM tbl_comment ORDER BY id DESC";
            foreach($db->fetch_assoc($sql, 0) as $data){
?>

                        <div class="ml-4">
                            <button type="button" class="btn btn-dark btn-sm mr-3 mb-2" id="submit">User1<?php echo $data['fullname']; ?></button>
                            <input type="text" class="form-control" id="comment" placeholder="Nội dung đã bình luận" value="<?php echo $data['comment']; ?>" readonly>
                        </div>
    <?php }  }
    break;

    default:
        // Báo lỗi
    break;
        }