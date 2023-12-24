



<?php
require_once('./../../include/init.php');
include ('../kol/layout/header.php')
?>

<div class="row">
            <div class="col-md-3">
               
            </div>
            <div class="col-md-6">
            <div class="mb-3" id="result"></div>

            <?php 
        if(isset($_GET['id_post'])){
        $id_post = check_input($_GET['id_post'], $db); 
        // var_dump($id_post);
        $query_run =  $db->num_rows("SELECT * FROM tbl_post WHERE id = '$id_post'");
        if ($query_run > 0 ) {
        $sql = "SELECT * FROM tbl_post WHERE id = $id_post";
        $post = $db->fetch_assoc($sql, 1);
        $datacomment = "SELECT * FROM tbl_comment WHERE id = '$id_post'";
        $data = $db->fetch_assoc($sql, 1);
        ?>
            <h4 class='mt-5 text-center text-dark '><b>Bài viết</b></h4>
                <div class="card bg-white boder-light shadow-sm  mt-4" >
                    <div class="card-header bg-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://i.pinimg.com/originals/ef/d7/8d/efd78d2e10b47a5e2552a06da25a0ec5.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h4 m-0" id = "" value ="<?php echo $post['fullname']; ?>"><?php echo $post['fullname']; ?> </div>
                                    <!-- <div class="h4 m-0" id = "" value ="<?php echo $post['id_user']; ?>" hidden> <?php echo $post['id_user']; ?> </div> -->
                                    <!-- <div class="h4 m-0" id = "" value ="<?php echo $post['id']; ?>" hidden> <?php echo $post['id']; ?> </div> -->
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right bg-danger" aria-labelledby="gedf-drop1" >
                                        <a class="dropdown-item bg-danger text-white" href="#" >Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                            <h5 class="card-title text-dark"><b><?php echo $post['title']; ?></b></h5>
                            <p class="card-text text-info mt-4">Giá :
                            <?php echo $post['money'];?>
                            </p>
        
                            <p class="card-text text-info">Thể loại :
                            <?php echo $post['type']; ?> 
                            </p>

                            <p class="card-text text-dark">
                            <?php echo $post['content']; ?>
                            </p>

                            <p class="card-text text-dark" id ="id_post" value ="<?php echo $post['id'];?>" >id bài viết :
                            <?php echo $post['id']; ?>
                            </p>      
                    </div>
                    <div class="card-footer">
                    <form id="commentForm">
                        <div class="input-group">
                            <input type="text" class="form-control" id="comment" placeholder="Viết bình luận">
                            <button type="button" class="btn btn-primary" id="submit"><i class="bi bi-send"></i></button>
                        </div>
                    </form>
                    
                   
                </div>
                </div>
                <?php
      }else 
      {
        echo "<h4> Không tìm thấy id hoạt động </h4>";
      };
}
?>
  <?php 
        if(isset($_GET['id_post'])){
        $id_post = check_input($_GET['id_post'], $db); 
        // var_dump($id_post);
        $query_run =  $db->num_rows("SELECT * FROM tbl_comment WHERE id_post = '$id_post'");
        if ($query_run > 0 ) {
        $sql = "SELECT * FROM tbl_comment WHERE  id_post = '$id_post'";
        foreach($db->fetch_assoc($sql, ) as $comment){
        ?>
                    <div class ="content" id="content">
                    <div class="ml-4">
                            <button type="button" placeholder = "tên" class="btn btn-dark btn-sm mt-3 mr-3 mb-2" id="submit"><?php echo $comment['fullname']; ?></button>
                            <input type="text" class="form-control" id="comment" placeholder="Nội dung đã bình luận" value="<?php echo $comment['comment']; ?>" readonly>
                        </div>
                    </div>  
                    <?php }  } };
                    ?>
            </div>
            <div class="col-md-3"></div>
        </div>
<?php
include ('../kol/layout/footer.php');
?>

<script>
//add
$(document).ready(function () {
    // function loadData(){
    //             $.ajax({
    //                 url: '/pages/brand/Action.php?act=showComment',
    //                 type: 'POST',
    //                 success: function(response){
    //                     console.log(response);
    //                     $("#content").html(response);
    //                 }
    //             });
    //         }
    //         loadData();
    $('#submit').click(function (e) {
        e.preventDefault();
        // Lấy giá trị từ các trường input và select
        let  comment = $('#comment').val();
             id_post = $('#id_post').attr('value');
           
            console.log('comment:'+ comment);
            console.log('id_post:'+ id_post);

        // Gửi request
        $.ajax({

            url: '/pages/kol/Action.php?act=comment',
            type: 'POST',
            data: {
                id_post,
                comment
            },
            success: function (response) {
                // console.log(response);
                let res = JSON.parse(response);

                // // Xử lý kết quả và hiển thị thông báo tương ứng
                // $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                // $('#result').fadeIn('slow', function () {
                //     $('#result').delay(5000).fadeOut();
                // });
                if (res.type == "success") {
                    // Đặt lại giá trị của các trường input và select
                    // $("#commentForm")[0].reset();   
                    location.reload();
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
</script>