
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="row mb-5">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <form id ="postForm" >
        <h4 class='mt-5 text-center text-dark '><b>Hãy tạo bài đăng </b></h4>
          <div id="result" class ="mt-2"></div>
          <div id="id" class ="mt-2"></div>
          <div id="result" class ="mt-2"></div>
          <div class="row g-3">
          <div class="col-md-12">
            <label for="">Tựa đề</label>
            <input type="text" class="form-control" id="title" aria-describedby="" placeholder = "Hãy viết tựa đề bài viết ">
          </div> 
            <div class="col-md-6">
            <label for="">Số tiền</label>
            <input type="text" class="form-control " id="money" aria-describedby="" placeholder = "Nhập số tiền">
          </div>
          <div class="col-md-6">
            <label for="">Thể loại</label>
            <input type="text" class="form-control  " id="type" aria-describedby="" placeholder = "VD: Công nghệ ,Xe ,..">
          </div> 
          </div>
        <div class="form-group mt-4">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="content" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Nhập nội dung</label>
          </div>
        </div>
        
       
        <button type="submit" class="btn btn-primary" id ="submit">Tạo</button>
        <a type="button" class="btn btn-primary" href ="/brand/page">Trở về</a>
    </form>

</div>   
<div class="col-md-3"></div>
</div>


	
<script>
//add
$(document).ready(function () {
    $('#submit').click(function (e) {
        e.preventDefault();
        // Lấy giá trị từ các trường input và select
        let  title = $('#title').val();
             money = $('#money').val();
             type = $('#type').val();
             content = $('textarea#content').val();

            console.log('title:'+ title);
            console.log('content:'+ content);
            console.log('money:'+ money);

        // Gửi request
        $.ajax({

            url: '/pages/brand/Action.php?act=addpost',
            type: 'POST',
            data: {
                title,
                money,
                content,
                type
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
                    $("#postForm")[0].reset();
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
</script>