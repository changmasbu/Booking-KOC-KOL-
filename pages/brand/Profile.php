<div class="row mt-5">
    <div class="col-md-1"></div>
    <div class="col-md-6">
        <div class="card border-light mb-3 shadow-sm" style="width: 100%">
            <div class="card-body" >    
            <h4 class="fs-3 mb-4" style="text-align: center; color: #000;">Profile</h4>           
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button" id="button-addon3"  style="width: 125px;">Họ & tên</button>
                    </div>
                    <input type="text" class="form-control" placeholder ="" value="<?=$data_user['fullname']?>" aria-label="Họ & tên" aria-describedby="button-addon3" disabled>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button" id="button-addon2"  style="width: 125px;">Email</button>
                    </div>
                    <input type="text" class="form-control" placeholder="" value="<?=$data_user['email']?>" aria-label="Địa chỉ Email" aria-describedby="button-addon2" disabled>
                </div>
              
                    <!-- socials -->
                    <?php
                    $id = $data_user['id'];
                    $sql = "SELECT * FROM tbl_brand WHERE `id_user` = $id";
                    foreach($db->fetch_assoc($sql, 0) as $row){
                    ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button"  style="width: 125px;" id="button-addon4"><?php echo $row['key']; ?></button>
                    </div>
                    <input type="text" class="form-control" placeholder="" value="<?php echo $row['value']; ?>" aria-label="<?php echo $row['key']; ?>" aria-describedby="button-addon4" disabled>
                </div>
                    <?php } ?>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                            <button class="btn btn-secondary" type="button" id="button-addon2"  style="width:125px;">Type </button>
                        </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="" data-toggle="modal" data-target="#typeModal">+</button>
                </div>
                </div>
                    <div class="d-flex justify-content-end">
                        <div class="form-group mb-3">
                            <button class="btn btn-primary" id="" data-toggle="modal" data-target="#addinfo">Thêm</button>
                            <a class="btn btn-primary" type ="button" href="/brand/update" >Cập nhật</a>
                        </div>
                    </div>

            </div>
                        


        </div>
    </div>
    <div class="col-md-1">
        </div>  
    <div class="col-md-3">
    <div class="card shadow-sm" style="width: 18rem;margin-top: 20px;border-radius: 10px;">
            <img src="https://th.bing.com/th/id/OIP.rOmwzor-MehlgcjijyRX9wHaIO?rs=1&pid=ImgDetMain" class="card-img-top" alt="..." >
            <div class="card-body " style="text-align: center;">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <!-- <button type="button" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-card-image"></i>
                    </button> -->
                    <input type="file" id="fileInput" style="display: none;">
                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="selectFile()">
                        <i class="bi bi-pencil"></i>
                    <i class="bi bi-image"></i>

                    </button>

<script>
    function selectFile() {
        const fileInput = document.getElementById('fileInput');
        fileInput.click(); // Khi nút được nhấn, kích hoạt sự kiện chọn tệp
    }
</script>


                </div>
            <p class="card-text"><b> <?=$data_user['fullname']?></b></p>
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
                        <h5 class="modal-title" id="staticBackdropLabel">Thêm thông tin liên hệ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="result" class="mb-3"></div>
                        <form id="add_form" class="form-inline mb-3">
                            <div class="form-group">
                                <label class='p-2' for="selectType">Thông tin </label>
                                <select class="custom-select" id="selectType" name= "socials" aria-label="Example select with button addon">
                                    <option value="">--choose--</option>
                                    <option value="Thương hiệu">Thương hiệu</option>
                                    <option value="Email contact">Email contact</option>
                                    <option value="Khu vực">Khu vực</option>
                                    <option value="Website">Website</option>
                                    <option value="Tiktok">Tiktok</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="LinkedIn">LinkedIn</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Zalo">Zalo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class='p-2' for="customInput">:</label>
                                <input id="customInput" name="customInput" type="text" class="form-control "  style="width: 300px;"  aria-label="">
                            </div>
                            
                        </form>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="add">Thêm</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                    </div>
                </div>
                </div>


                 <!-- Modal thêm type-->
                <div class="modal fade" id="typeModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Thêm lĩnh vực</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="result_type" class="mb-3"></div>
                                <form id="add_form" class="">
                                    <div class="row">
                                        <div class="col-md-2"></div>

                                        <div class="col-md-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Thời trang" id="flexCheckDefault">Thời trang
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Làm đẹp" id="flexCheckDefault">Làm đẹp
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Sức khỏe" id="flexCheckDefault">Sức khỏe
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Du lịch" id="flexCheckDefault">Du lịch
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Giải trí" id="flexCheckDefault">Giải trí
                                                </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                        
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Ẩm thực" id="flexCheckDefault">Ẩm thực
                                                </div>
                                            
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Âm nhạc" id="flexCheckDefault">Âm nhạc
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox"class = "type"  value="Gia đình" id="flexCheckDefault">Gia đình
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox"class = "type"  value="Nghệ thuật" id="flexCheckDefault">Nghệ thuật
                                                </div>   
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Động vật" id="flexCheckDefault">Động vật
                                                </div>   
                                                
                                        </div>
                                        <div class="col-md-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Công nghệ" id="flexCheckDefault">Công nghệ
                                                </div>
                                        
                                                <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" class = "type" value="Kinh doanh" id="flexCheckDefault">Kinh doanh
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Xe" id="flexCheckDefault">Xe 
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Giáo dục" id="flexCheckDefault">Giáo dục
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" class = "type" value="Xã hội" id="flexCheckDefault">Xã hội
                                                </div>
                                        </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" id="addtype">Thêm</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                




                    




<script>
//add type
$(document).ready(function () {
    $('#addtype').click(function (e) {
        e.preventDefault();
        let  type = [];
        $("input[type='checkbox']").each(function() {
            if($(this).is(":checked"))
            {
                type.push($(this).val());
            }
        });
        
        types = type.toString();
            console.log('type:'+ types);

        // Gửi request
        $.ajax({

            url: '/pages/brand/Action.php?act=addtype',
            type: 'POST',
            data: {
                key : 'Type',
                types ,

            },
            success: function (response) {
                console.log(response);
                let res = JSON.parse(response);
                // Xử lý kết quả và hiển thị thông báo tương ứng
                $('#result_type').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                $('#result_type').fadeIn('slow', function () {
                    $('#result_type').delay(5000).fadeOut();
                });
                if (res.type == "success") {
                    // Đặt lại giá trị của các trường input và select
                    // $("#add_form")[0].reset();
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
    let selectType = document.getElementById('selectType');
    let customInput = document.getElementById('customInput');

    selectType.addEventListener('change', function () {
        let selectedValue = selectType.value;
        if (selectedValue === 'Zalo') {
                customInput.type = 'number';
                customInput.placeholder = '012456789';

            } else if (selectedValue === 'Email contact') {
                customInput.type = 'text';
                customInput.placeholder = 'Name@gmail.com';

            } else if (selectedValue === 'Thương hiệu') {
                customInput.type = 'text';
                customInput.placeholder = 'Nhập tập thương hiệu của bạn';

            } else if (selectedValue === 'Khu vực') {
                customInput.type = 'text';
                customInput.placeholder = 'Hà nội , Sài gòn , Cần Thơ,..';
            } else {
                customInput.type = 'text';
                customInput.placeholder="https://example.com";

            }
    });

//add
    $(document).ready(function () {
    $('#add').click(function (e) {
        e.preventDefault();
        // Lấy giá trị từ các trường input và select
        let  key = $('#selectType').val();
             value = $('#customInput').val();
            console.log('key:'+key);
            console.log('value:'+value);

        // Gửi request
        $.ajax({

            url: '/pages/brand/Action.php?act=addinfo',
            type: 'POST',
            data: {
                key,
                value
            },
            success: function (response) {
                console.log(response);
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
