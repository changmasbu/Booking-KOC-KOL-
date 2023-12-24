
<div class="row">
            <div class="col-md-3">
               
            </div>
            <div class="col-md-6">

                <!--- \\\\\\\Post-->
                <!-- <div class="card ">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                    a publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                           <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                              <button class="btn btn-primary me-md-2" type="button">Button</button>
                    
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <?php 
                $name = $data_user['fullname'];
                $sql = "SELECT * FROM tbl_post"
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
                                    <div class="h4 m-0"><?php echo $data_user['fullname'];?></div>
                                    <div class="h7 text-muted"> <i class="fa fa-clock"></i>10 min ago</div>
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
                        <a class="card-link" href="#">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        </a>

                        <p class="card-text">
                        <?php echo $row['content']; ?>
                        </p>
                        <p class="card-text">
                        <?php echo $row['money']; ?>
                        </p>
                        <p class="card-text">
                        <?php echo $row['type']; ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                    </div>
                </div>
                <?php } ?>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                <div class="card shadow-sm mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://cdn.dribbble.com/users/1028078/screenshots/7882579/spooky-face-luffy_4x.png" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h4 m-0">Chang 🌻</div>
                                    <div class="h7 text-muted"><i class="fa fa-clock"></i> 10 min ago</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <a class="card-link" href="#">
                            <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur
                                deserunt illo esse distinctio.</h5>
                        </a>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam omnis nihil, aliquam est, voluptates officiis iure soluta
                            alias vel odit, placeat reiciendis ut libero! Quas aliquid natus cumque quae repellendus. Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi. Doloremque, reprehenderit!
                            Quos in maiores, soluta doloremque molestiae reiciendis libero expedita assumenda fuga quae.
                            Consectetur id molestias itaque facere? Hic!
                        </p>
                        
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
                </div>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                <div class="card border-secondary shadow-sm ">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://th.bing.com/th/id/R.f3fcfcee5e43f1eaf440dd2c35f24485?rik=uIylRdGAwDrvtg&pid=ImgRaw&r=0" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">Chang👧🏿</div>
                                    <div class="h7 text-muted"><i class="fa fa-clock"></i> 40 min ago</div>

                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <a class="card-link" href="#">
                            <h5 class="card-title">Totam non adipisci hic! Possimus ducimus amet, dolores illo ipsum quos
                                cum.</h5>
                        </a>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt fugit reprehenderit consectetur exercitationem odio,
                            quam nobis? Officiis, similique, harum voluptate, facilis voluptas pariatur dolorum tempora sapiente
                            eius maxime quaerat.
                            <a href="https://froala.com/" target="_blank">https://froala.com/</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
                </div>
                <!-- Post /////-->



            </div>
            <div class="col-md-3">
               
        </div>
        </div>
        