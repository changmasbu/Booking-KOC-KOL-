


<!-- ------------ -->
<div class="row">
            <div class="col-md-3">
               
            </div>
            <div class="col-md-6">


               
                <div class="card bg-white boder-light shadow-sm mb-4 mt-4" >
                    <div class="card-header bg-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://i.pinimg.com/originals/ef/d7/8d/efd78d2e10b47a5e2552a06da25a0ec5.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h4 m-0"><?=$data_user['fullname']?></div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                        <!-- <i class="fa fa-ellipsis-h" style="color: #000"></i> -->
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right bg-danger" aria-labelledby="gedf-drop1" >
                                        <a class="dropdown-item bg-danger text-white" href="#" >Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php 
        if(isset($_GET['id_post'])){
        $id_post = check_input($_GET['id_post'], $db); 
        $query_run =  $db->num_rows("SELECT * FROM tbl_post WHERE id = '$id_post'");
        if ($query_run > 0 ) {
        $sql = "SELECT * FROM tbl_post WHERE id = $id_post";
        $post = $db->fetch_assoc($sql, 1);
        var_dump($post);
        ?>
                    <div class="card-body">
                        <!-- <div class="text-muted h7 mb-2"> <i class="fa fa-clock"></i>10 min ago</div> -->
                            <h5 class="card-title text-dark"><b><?php echo $post['title']; ?></b></h5>
                            <p class="card-text text-info mt-4" >Giá :
                            <?php echo $post['money']; ?>
                            </p>
                            
                            <p class="card-text text-info">Thể loại :
                            <?php echo $post['type']; ?> 
                            </p>

                            <p class="card-text text-dark">
                            <?php echo $post['content']; ?>
                            </p>
                    </div>
                    <div class="card-footer">
                        <input type="text" class="form-control" id = "comment">
                    <!-- <a href="brand/comment" class="card-link" value="<?php echo $post['id']; ?>"><i class="fa fa-comment"></i> Comment</a> -->
                    </div>
                </div>
                
                <?php
      }else 
      {
        echo "<h4> Không tìm thấy id hoạt động </h4>";
      };
}
?>


                <!-- Post /////-->
            </div>
            <div class="col-md-3">
               
        </div>
        </div>
        