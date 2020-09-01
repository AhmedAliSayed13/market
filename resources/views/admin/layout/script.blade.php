<!-- jQuery -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('/js/jquery.fancybox.min.js')}}"></script>
<!-- Custom JS -->
<script  src="{{asset('js/script.js')}}"></script>
<script  src="{{asset('js/mask.js')}}"></script>
<script  src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
<!-- Bootstrap Tagsinput JS -->
<script src="{{asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>



@stack('scripts')
<script>
    // show img when selected item
    var loadimg = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imgid');
            var output2 = document.getElementById('aid');
            output.src = reader.result;
            output2.href = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
    var loadimg1 = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imgid1');
            var output2 = document.getElementById('aid1');
            output.src = reader.result;
            output2.href = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
    var loadimg2 = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imgid2');
            var output2 = document.getElementById('aid2');
            output.src = reader.result;
            output2.href = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

{{--add muilty image --}}
<script type="text/javascript">

    Dropzone.options.dropzoneForm = {
        autoProcessQueue : false,
        acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

        init:function(){
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this;

            submitButton.addEventListener('click', function(){
                myDropzone.processQueue();
            });

            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                {
                    var _this = this;
                    _this.removeAllFiles();
                }
                location.reload();
            });

        }

    };
    $(document).on('click', '.remove_image', function(){
        var id = $(this).attr('id');
        $.ajax({
            url:"{{ route('product.image.delete') }}",
            data:{id : id},
            success:function(data){
                location.reload();
            }
        })
    });

</script>
