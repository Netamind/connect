@extends('web.home')
@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Cropper CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css'>






<link rel="stylesheet" href="Admin320/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="Admin320/plugins/toastr/toastr.min.css">


<style>
.spinner {
  border: 4px solid rgba(0, 0, 0, 0.1);
  border-top: 4px solid #f35800; /* orange color */
  border-radius: 50%;
  width: 20px;
  height: 20px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.loading-status {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 8px;
  background-color: #f7f7f7;
  z-index: 1000;
  overflow: hidden;
}

.waves {
  position: absolute;
  top: 0;
  left: -30%;
  width: 160%;
  height: 100%;
  background-image: repeating-linear-gradient(120deg, #007bff, #007bff 10px, #000 10px, #000 20px);
  border-radius: 0;
  animation: move 2.5s linear infinite;
}

@keyframes move {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 40px 0;
  }
}

.disabled {
  /*opacity: 0.5;*/
 /* cursor: not-allowed;*/
}






</style>


</head>

<div class="loading-status" id="loading-status" style="display:none">
  <div class="waves"></div>
</div>



<div class="site-wrapper">
<ul
class="breadcrumb"><li><a
href="index9328.html?route=common/home">

<i class="fa fa-home"></i></a></li><li>
    
<a href="register">Register</a></li></ul>



<div
class="container blog-home"><div
class="row"><div
id="content"><div
class="main-posts post-list">
<div class="row">




<div class="col-md-6">
<form action="user-registration" method="post" enctype="multipart/form-data" class="register-form form-horizontal" id="registrationForm">
  @csrf
    <div id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required account-firstname">
            <label class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text"   name="name"  placeholder="Enter your name"  class="form-control" />
               </div>
          </div>
          <div class="form-group required account-lastname">
            <label class="col-sm-2 control-label" >Phone Number</label>
            <div class="col-sm-10">
              <input type="text"    name="phone"  placeholder="Enter your phone Number"  class="form-control" />
               </div>
          </div>
          <div class="form-group required account-email">
            <label class="col-sm-2 control-label" >E-Mail</label>
            <div class="col-sm-10">
              <input type="email"   name="email"  placeholder="Enter your Email Address"  class="form-control" />
               </div>
          </div>
           </div>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label account-pass" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password"   name="password"  placeholder="Password" id="password" class="form-control" minLength="4"  />
               </div>
          </div>
          <div class="form-group required account-pass2">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password"    name="password_confirmation"  placeholder="Password Confirm" id="comfirmpassword" minLength="4" class="form-control" />
               </div>
          </div>
        </fieldset>
          <div class="buttons">
          <div class="pull-left">
          <a href="#" class="btn btn-primary" id="registerBtn" data-loading-text="<span>Submit</span>">Submit</a>
          </div>
        </div>
    </form>


</div>


<div class="col-md-2"></div>

<div class="col-md-4">

<br>
<h2 class="title">Already have an account?</h2>
            <p><strong>Fill the form to login</strong></p>
            <form action="user-authentication" method="post" enctype="multipart/form-data" class="form-horizontal login-form" id="loginForm">
             @csrf
            <div class="form-group">
                <label class="control-label" for="input-email">E-Mail Address</label>
                <input type="text" name="email"  placeholder="E-Mail Address"  autocomplete="off" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Password</label>
                <input type="password" name="password"  placeholder="Password"  class="form-control" />
                <div><a href="#" target="_top">Forgotten Password</a></div></div>
              <div class="buttons">
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary" data-loading-text="<span>Login</span>"><span>Login</span></button>
                </div>
              </div>
    </form>




</div>



</div>
</div></div></div></div></div>
</div>
</div></div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js'></script>



<!-- jQuery -->

<script src="Admin320/plugins/jquery/jquery.min.js"></script>


<script src="Admin320/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="Admin320/plugins/toastr/toastr.min.js"></script>


<script>


    
var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 12000
    });

 </script>

  <script>
  $(document).on("click", "#registerBtn", function(e) {
  var self = $(this);
  $(this).prop("disabled", true);
  $(this).html('<div class="spinner"></div>');
  var form = document.getElementById("registrationForm");

  e.preventDefault(); 
  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
      type:"post",
      url: '/user-registration',
      data: $(form).serialize(),
      success:function(data) {

        if(data==2){
        toastr.success('Registration submitted successifully we have sent a link to your email to verify your account','Success')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
          
        }

        
        if(data==3){
        toastr.error('Unspecified error occured','Unspecified Error') 
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        }
        
        
      },

      error:function(jqXHR, textStatus, errorThrown) {

        console.log(textStatus); console.log(eeeeee)
        
        var errors = jqXHR.responseJSON.errors;
        var errorPassage = '';
        if(textStatus === 'timeout')
          {   
            toastr.error('It is taking longer to submit the data check your internet connection and try again','Timeout Error')  
            form.reset();
          }
          else{
          
            $.each(errors, function(key, value) {
                errorPassage += value + '\n';
            });
            toastr.error(errorPassage, 'Validation Errors', {
                timeOut: 60000
            });
            self.text("Submit")
            self.prop("disabled", false)
            form.reset();
          
          
          
          }
      },
      timeout: 60000
  });

  })





function countUnfilledInputs(inputIds) {
  return inputIds.filter(id => document.getElementById(id).value === '').length;
}


</script>



<!--js toastr notification-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
<!--js toastr notification--> 








@endsection