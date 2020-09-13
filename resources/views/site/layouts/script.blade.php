
<!-- Modal -->
<div class="modal fade" id="loginModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
            </div>
            <div class="modal-body">
                <form  method="post">
                <div class="col-md-12 form-group p_star">
                    <input type="email" id="idemailLogin" required placeholder="email" class="form-control"  name="email">
                    <span id="emailError" style="color: red"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                    <input type="password" id="idPasswordLogin" required placeholder="password" class="form-control"  name="password">

                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                <button onclick="PopUpLogin()" type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
    function addStar(ths,sno){


        for (var i=1;i<=5;i++){
            var cur=document.getElementById("star"+i)
            cur.className="fa fa-star"
        }

        for (var i=1;i<=sno;i++){
            var cur=document.getElementById("star"+i)
            if(cur.className=="fa fa-star")
            {
                cur.className="fa fa-star checked"
            }
        }
        $('#rateProduct').val(sno);
    }
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function wishlist($id) {
        $.ajax({
            type:'GET',
            url: '/wishlist/'+$id,
            success:function(data) {
                if(data){
                    $('#wishlist-'+$id).addClass('liked');
                }
                else{
                    $('#wishlist-'+$id).removeClass('liked');
                }
            }

        });
    }
    function showlogin() {
        event.preventDefault();
        $('#loginModel').modal('toggle');
    }
    function PopUpLogin() {
        $email=$('#idemailLogin').val();
        $password=$('#idPasswordLogin').val();

        $.ajax({
            type:'POST',
            url: '/ajax/popup-login',
            data:{
              'email':$email,
                'password':$password,
                _token: '{!! csrf_token() !!}'
            },
            success:function(data) {
                if(data){
                    location.reload();
                }
                else{
                    $('#emailError').append('username or password not correct');
                }

            }

        });
    }
</script>

<script src="{{asset("")}}main/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="{{asset("")}}main/js/vendor/bootstrap.min.js"></script>
<script src="{{asset("")}}main/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset("")}}main/js/jquery.nice-select.min.js"></script>
<script src="{{asset("")}}main/js/jquery.sticky.js"></script>
<script src="{{asset("")}}main/js/nouislider.min.js"></script>
<script src="{{asset("")}}main/js/countdown.js"></script>
<script src="{{asset("")}}main/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset("")}}main/js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset("")}}main/js/gmaps.min.js"></script>
<script src="{{asset("")}}main/js/main.js"></script>
