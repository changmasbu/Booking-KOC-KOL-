

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <form>
        <h4 class='mt-5 text-center text-dark '><b>Hãy tạo bài đăng </b></h4>
          <div class="form-group mt-5">
            <label for="">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="" placeholder = "Hãy viết tựa đề bài viết ">
          </div> 

        <div class="form-group">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="content" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Content</label>
          </div>
        </div>

        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01"><i class="fa-solid fa-square-plus" style="color: #000000;"></i></label>
          <input accept="image/*,image/heif,image/heic,video/*,video/mp4,video/x-m4v,video/x-matroska,.mkv" class="form-control" multiple="" id="img" type="file">
        </div>

        <button type="submit" class="btn btn-primary">Tạo</button>
    </form>

</div>   
<div class="col-md-3"></div>
</div>



<script>
	var editor = new FroalaEditor('#example');	
</script>	
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
</script>