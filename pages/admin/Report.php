    
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-danger">BẢNG QUẢN LÝ REPORT</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Reporter</th>
                                            <th>Role</th>
                                            <th>Tile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>                                  
                                    <?php
                                    //     $sql = "SELECT * FROM tbl_user WHERE role = 1 and del != 1";
                                    //    foreach($db->fetch_assoc($sql, 0) as $row){
                                        ?>
                                    <tbody>
                                    <tr>
                                            <td>29</td>
                                            <td>Nguyễn văn A</td>
                                            <td>1</td>
                                            <td>SP của brand ko tốt</td>
                                            <td> 
                                                <button class="btn btn-outline-info" data-toggle="modal" data-id="<?php echo $row['id'];?>" data-target="#infoReport" >
                                                <i class="bi bi-info-circle-fill"></i>
                                                </button>
                                               
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                    <?php 
                                // };
                                 ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Modal update user -->
    <div class="modal fade" id="infoReport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- <div class="modal-dialog"> -->
        <div class="modal-dialog modal-lg">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết báo cáo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result_up" class="mb-3"></div>
                        <form id="info_report_form">

                                <div class="form-group mb-3">                                
                                    <label for="email" class="form-label"> <strong>Người báo cáo:</strong> </label>
                                    <div class="row">
                                        <div class="col">Username: kol1</div>
                                        <div class="col">role: 1</div>
                                        <div class="col">id_user: 29</div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">                                
                                    <label for="email" class="form-label"> <strong>Người bị báo cáo:</strong> </label>
                                    <div class="row">
                                        <div class="col">Username: brand1</div>
                                        <div class="col">role: 2</div>
                                        <div class="col">id_user: 30</div>
                                    </div>
                                </div>
                               <div class="form-floating mb-3">
                               <div class="card">
                                    <h5 class="card-header">Tiêu đề : abcxyz</h5>
                                    <div class="card-body">
                                        <p class="card-text">Chuyện là 1 ngày em tú cần 12k kim cương :3 https://getbootstrap.com/docs/5.0/components/card/</p>
                                    </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <!-- <button class="btn btn-primary" name="submit" id="update" data-id="<?php echo $row['id'];?>">Cập nhật</button>  -->
                    
                </div>
            </div>
        </div>
    </div>                                        
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
