
<div class="row">
            <div class="col-md-3">
               
            </div>
            <div class="col-md-6">

                <?php 
                $name = $data_user['fullname'];
                $sql = "SELECT * FROM tbl_post";
                foreach ($db->fetch_assoc($sql,0) as $row){

                ?>
                <div class="card bg-white boder-light shadow-sm mb-4 mt-4" >
                    <div class="card-header bg-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://i.pinimg.com/originals/ef/d7/8d/efd78d2e10b47a5e2552a06da25a0ec5.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h4 m-0"><?php echo $row['fullname']; ?></div>
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
                    <div class="card-body">
                        <!-- <div class="text-muted h7 mb-2"> <i class="fa fa-clock"></i>10 min ago</div> -->
                            <h5 class="card-title text-dark"><b><?php echo $row['title']; ?></b></h5>
                            <p class="card-text text-info mt-4" >Giá :
                            <?php echo $row['money']; ?>
                            </p>
                            
                            <p class="card-text text-info">Thể loại :
                            <?php echo $row['type']; ?> 
                            </p>

                            <p class="card-text text-dark">
                            <?php echo $row['content']; ?>
                            </p>
                    </div>
                    <div class="card-footer">
                    <a href="/pages/kol/Comment.php?id_post=<?php echo $row['id'];?>" class="card-link" value="<?php echo $row['id']; ?>"><i class="fa fa-comment"></i> Comment</a>
                    </div>
                </div>
                <?php } ?>
                <!-- Post /////-->
            </div>
            <div class="col-md-3">
               
        </div>
        </div>
        