<div class="row">
    <div class="col col-12">
        <!-- Chổ này hiện thị thông báo nè -->
    <div id="result" class="mb-3"></div>
    <!-- Hết thông báo -->
        <div class="card">
            <div class="card-header">
                Đăng bài Viết
            </div>
            <div class="card-body">
                <form id="new_form">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tên bài viết</label>
                        <input type="text" class="form-control" id="title" placeholder="Nhập tên bài viết">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Nội dung</label>
                        <textarea class="form-control" id="content" rows="3" placeholder="Nhập nội dung"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col col-6">
                            <div class="mb-3">
                                <label for="categories" class="form-label">Chuyên mục</label>
                                <input type="text" class="form-control" id="categories" placeholder="Nhập chuyên mục">
                            </div>
                        </div>
                        <div class="col col-6">
                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                <input type="text" class="form-control" id="tags" placeholder="Nhập Tags: abc, xyz, hello,....">
                            </div>
                        </div>
                    
                    </div>
                
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button" id="clear_now">Nhập lại</button>
                        <button class="btn btn-primary" type="button" id="posts">Đăng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#clear_now').click(function (e) {
                 // Ngăn không cho load lại trang
                e.preventDefault();
                // reset form
                $("#new_form")[0].reset();
            });
        // Bắt sự kiện khi người dùng click vào button
         $('#posts').click(function (e) {
             // Ngăn không cho load lại trang
             e.preventDefault();
             //Lấy giá trị của 2 ô input
             let title = $('#title').val(),
             content = $('#content').val(),
             categories  = $('#categories').val(),
             tags  = $('#tags').val();
             // Gửi request 
             $.ajax({
                url: '/pages/blog/Action.php?act=new',
                type: 'POST',
                data: {
                    title,
                    content,
                    categories,
                    tags
                },
                 // Nếu thành công thì hiển thị kết quả ra trình duyệt
                 success: function (response) {
                    let res = JSON.parse(response);
                    $('#result').html(`<div class="alert alert-${res.type}" role="alert">${res.message}</div>`);
                    $('#result').fadeIn('slow', function(){
                        $('#result').delay(5000).fadeOut();
                    });
                    if(res.type == "success"){
                        $("#new_form")[0].reset();
                    }
                 },
                 error: function (error) {
                    console.log(error);
                 }
             });
         });
    });
</script>