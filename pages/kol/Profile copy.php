<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header" style="">
            <div class="fs-3" style="text-align: center; color: #000;">Profile</div>

            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <button class="btn btn-secondary" type="button" id="button-addon1" >Tên đăng nhập</button>
                    <input type="text" class="form-control" placeholder="" value="<?=$data_user['username']?>" aria-label="Tên đăng nhập" aria-describedby="button-addon1" disabled>
                </div>


                <div class="input-group mb-3">
                    <button class="btn btn-secondary" type="button" id="button-addon2">Địa chỉ Email</button>
                    <input type="text" class="form-control" placeholder="" value="<?=$data_user['email']?>" aria-label="Địa chỉ Email" aria-describedby="button-addon2" disabled>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-secondary" type="button" id="button-addon3">Họ & tên</button>
                    <input type="text" class="form-control" placeholder ="" value="<?=$data_user['fullname']?>" aria-label="Họ & tên" aria-describedby="button-addon3" disabled>
                </div>

                <?php
                $id = $data_user['id'];
                $sql = "SELECT * FROM tbl_kol WHERE `id_user` = $id";
                foreach($db->fetch_assoc($sql, 0) as $row){
                ?>
                   <div class="input-group mb-3">
                        <button class="btn btn-secondary" type="button" id="button-addon4"><?php echo $row['key']; ?></button>
                        <input type="text" class="form-control" placeholder="" value="<?php echo $row['value']; ?>" aria-label="<?php echo $row['key']; ?>" aria-describedby="button-addon4" disabled>
                    </div>

                <?php } ?>
                        <div class="form-group mb-3 text-center">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" name="submit" id="" data-toggle="modal" data-target="#addinfo">Thêm</button>
                            <!-- <button class="btn btn-primary" name="submit" id="update" data-toggle="modal" data-target="#updateinfo">Cập nhật </button> -->
                            <a class="btn btn-primary" data-bs-toggle="modal" href="/kol/update" role="button">Cập nhật </a>
                        </div>
                            

                        </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        </div>  
    <div class="col-md-3">
    <div class="card" style="width: 18rem;margin-top: 20px;border-radius: 10px;">
            <img src="https://www.nicepng.com/png/detail/195-1953608_luffy-sticker-luffy-face-png.png" class="card-img-top" alt="..." >
            <div class="card-body " style="text-align: center;">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-card-image"></i>

                    </button>
                </div>
            <p class="card-text"><b>kol2</b></p>
                <p class="card-text">10/10//2001</p>
                <p class="card-text">Nothing is true, everything is permitted</p>
            </div>
        </div>
    </div>    
    <div class="col-md-2">
        

    </div>   
</div>
                <!-- Modal thêm info-->
                <div class="modal fade" id="addinfo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Thêm thông tin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div id="result" class="mb-3"></div>
                        <form id="add_form" class="form-inline">
                            <div class="form-group">
                                <label class='p-2' for="selectType">Socials</label>
                                <select class="custom-select" id="selectType" name= "socials" aria-label="Example select with button addon">
                                    <option value="">--choose--</option>
                                    <option value="Birth">Ngày sinh</option>
                                    <option value="Tiktok">Tiktok</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Zalo">Zalo-sdt</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class='p-2' for="customInput">Tên kênh :</label>
                                <input id="customInput" name="customInput" type="text" class="form-control" aria-label="">
                            </div>
                            <div class="form-group">
                                <label class='p-2' for="customInput">Link:</label>
                                <input id="linksocial" name="customInput" type="url" class="form-control" aria-label="" pattern="https://.*" placeholder="https://example.com" >
                            </div>
                            <div class="form-group ml-2">
                                <!-- <button type="submit" class="btn btn-primary">Thêm</button> -->
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="add">Thêm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                    </div>
                    </div>
                </div>
                </div>

                    <!-- Modal cập nhật info-->
                    <div class="modal fade" id="updateinfo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Cập nhật thông tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div id="result" class="mb-3"></div>
                            <form id="add_form" class="">
                                <div class="form-group">
                                <?php
                                    $id = $data_user['id'];
                                    // $sql = "SELECT * FROM tbl_kol WHERE `id_user` = $id";
                                    $sql = "SELECT * FROM tbl_kol WHERE `id_user` = $id";
                                    
                                    foreach($db->fetch_assoc($sql, 0) as $row){
                                    ?>
                                    <div class="input-group mb-3">
                                        <p><?php echo $row['id']; ?></p>
                                            <button class="btn btn-secondary"  id="button-addon4"><?php echo $row['key']; ?></button>
                                            <input type="text" class="form-control" placeholder="" value="<?php echo $row['value']; ?>" aria-label="<?php echo $row['key']; ?>" aria-describedby="button-addon4" >
                                            
                                            <button class="delete btn btn-outline-danger" data-id="<?php echo $row['id'];?>"  data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" >
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                            
                                            <button class="btn btn-outline-info" type="button" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" data-target="#updateUser">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </div>
                                <?php } ?>
                                </div>
                                
                            
                            </form>
                        </div>
                        <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-primary" id="add">Lưu thay đổi</button> -->
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

                        </div>
                        </div>
                    </div>
                    </div>
                        <!-- Modal cập nhật info 2-->
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Cập nhật</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="update_form">
                                <p><?php echo $row['id']; ?></p>
                                    <button class="btn btn-secondary" id=""><?php echo $row['key']; ?></button>
                                    <input type="text" class="form-control" value="<?php echo $row['value']; ?>" >
                            </form>
                            </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#updateinfo" data-bs-toggle="modal">Trở về</button>
                            <button type="submit" class="btn btn-primary" id="update">Lưu</button>
                        </div>
                        </div>
                    </div>
                    </div>

<script>
    let selectType = document.getElementById('selectType');
    let customInput = document.getElementById('customInput');

    selectType.addEventListener('change', function () {
        let selectedValue = selectType.value;
        if (selectedValue === 'Zalo') {
                customInput.type = 'number';
            } else if (selectedValue === 'Birth') {
                customInput.type = 'date';
            } else {
                customInput.type = 'text';
            }
    });


    $(document).ready(function () {
    $('#add').click(function (e) {
        e.preventDefault();

        // Lấy giá trị từ các trường input và select
        let  selectedSocial = $('#selectType').val();
             customInput = $('#customInput').val();
             link      = $('#linksocial').val();

            console.log('key:'+selectedSocial);
            console.log('value:'+customInput);
            console.log('link:'+link);

        // Gửi request
        $.ajax({

            url: '/pages/kol/Action.php?act=addinfo',
            type: 'POST',
            data: {
                selectedSocial,
                customInput,
                link
            },
            success: function (response) {
                let res = JSON.parse(response);
                // Xử lý kết quả và hiển thị thông báo tương ứng
                $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                $('#result').fadeIn('slow', function () {
                    $('#result').delay(5000).fadeOut();
                });
                if (res.type == "success") {
                    // Đặt lại giá trị của các trường input và select
                    $("#add_form")[0].reset();
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});

</script>
