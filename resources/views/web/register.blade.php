@extends('web.home')
@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Cropper CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css'>

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
    
<a href="blog.html">Register</a></li></ul>



<div
class="container blog-home"><div
class="row"><div
id="content"><div
class="main-posts post-list">
<div class="row">




<div class="col-md-6">
<form action="#" method="post" enctype="multipart/form-data" class="register-form form-horizontal">
        <div id="account">
          <legend>Your Personal Details</legend>
          
          <buttpn class="btn btn-primary" id="test">BBBBBB</buttpn>
          <div class="form-group required account-firstname">
            <label class="col-sm-2 control-label" for="input-firstname">Full Name</label>
            <div class="col-sm-10">
              <input type="text" autocomplete="off" name="name" value="" placeholder="Enter your name" id="input-firstname" class="form-control" />
               </div>
          </div>
          <div class="form-group required account-lastname">
            <label class="col-sm-2 control-label" for="input-lastname">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" autocomplete="off"  name="phone" value="" placeholder="Enter your phone Number" id="input-lastname" class="form-control" />
               </div>
          </div>
          <div class="form-group required account-email">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" autocomplete="off"  name="email" value="" placeholder="Enter your Email Address"  class="form-control" />
               </div>
          </div>


        



           </div>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label account-pass" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" autocomplete="off"  name="password" value="" placeholder="Password" id="input-password" class="form-control" />
               </div>
          </div>
          <div class="form-group required account-pass2">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" autocomplete="off"  name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
               </div>
          </div>
        </fieldset>

        
                <div class="buttons">
          <div class="pull-left">I have read and agree to the
            
           <a href="#" class="agree">
            <b>Terms and conditions</b>
            </a>

            <input type="checkbox" name="agree" value="1" />


            <a href="#" class="btn btn-primary" id="register" data-loading-text="<span>Submit</span>">Submit3</a>
          




          </div>
        </div>
    </form>


</div>


<div class="col-md-2"></div>

<div class="col-md-4">

<br>
<h2 class="title">Already have an account?</h2>
            <p><strong>Fill the form to login</strong></p>
            <form action="authenticate-user" method="post" enctype="multipart/form-data" class="form-horizontal login-form">
              <div class="form-group">
                <label class="control-label" for="input-email">E-Mail Address</label>
                <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" autocomplete="off" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Password</label>
                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                <div><a href="https://www.journal-theme.com/1/index.php?route=account/forgotten" target="_top">Forgotten Password</a></div></div>
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

<script src="Admin320/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="Admin320/plugins/toastr/toastr.min.js"></script>
<script>


    
var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 12000
    });



    

   $('body').on('click', '#test', function () {

    toastr.error('Data failed to updated an error occured, make sure you enter quantity');
 });

 </script>


<script>
// vars
let result = document.querySelector('.result'),
img_result = document.querySelector('.img-result'),
img_w = document.querySelector('.img-w'),
img_h = document.querySelector('.img-h'),
options = document.querySelector('.options'),
save = document.querySelector('.save'),
cropped = document.querySelector('.cropped'),
dwn = document.querySelector('.download'),
upload = document.querySelector('#file-input'),

// on change show image with crop options
upload.addEventListener('change', e => {
  if (e.target.files.length) {
    // start file reader
    const reader = new FileReader();
    reader.onload = e => {
      if (e.target.result) {
        // create new image
        let img = document.createElement('img');
        img.id = 'image';
        img.src = e.target.result;
        // clean result before
        result.innerHTML = '';
        // append new image
        result.appendChild(img);
        // show save btn and options
        save.classList.remove('hide');
        options.classList.remove('hide');
        // init cropper
        cropper = new Cropper(img);
      }
    };
    reader.readAsDataURL(e.target.files[0]);
  }
});

// save on click
save.addEventListener('click', e => {
  e.preventDefault();
  // get result to data uri
  let imgSrc = cropper.getCroppedCanvas({
    width: img_w.value // input value
  }).toDataURL();
  // remove hide class of img
  cropped.classList.remove('hide');
  img_result.classList.remove('hide');
  // show image cropped
  cropped.src = imgSrc;
  dwn.classList.remove('hide');
  dwn.download = 'imagename.png';
  dwn.setAttribute('href', imgSrc);
});

</script>

<script>



document.addEventListener("DOMContentLoaded", function() {
  // Add event listener to the register button
  document.getElementById("register").addEventListener("click", function(e) {
    e.preventDefault();

    // Disable the button and show a spinner
    var registerButton = document.getElementById("register");
    registerButton.disabled = true;
    registerButton.style.color = "red";
    registerButton.innerHTML = '<div class="spinner"></div>';

    // Get the CSRF token and form data
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var form = document.getElementById('fullrectificationform');
    var formData = new FormData(form);

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/retail-stock-fullrectification', true);
    xhr.timeout = 3000; // 3 seconds
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

    // Add event listener for the load event
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Check the response data
        var data = xhr.responseTex..t;
        if (data == 2) {
          // Full rectification completed successfully
          toastr.success('Full rectification completed successfully');
          registerButton.disabled = false;
          registerButton.style.color = "white";
          registerButton.innerHTML = "Submit";
          document.getElementById('fullrectifybtn').style.display = 'none';
          location.reload();
        } else if (data == 1) {
          // Incorrect password entered
          toastr.error('Incorrect password entered, please enter your password correctly');
          registerButton.disabled = false;
          registerButton.style.color = "white";
          registerButton.innerHTML = "Submit";
        } else if (data == 3) {
          // No data found to rectify
          toastr.error('No data found to rectify');
          registerButton.disabled = false;
          registerButton.style.color = "white";
          registerButton.innerHTML = "Submit";
        }
      } else {
        // Display a generic error message
        toastr.error('An unknown error occurred. Please try again later.');
      }
    };

    // Add event listener for the timeout event
    xhr.ontimeout = function() {
      toastr.error('The request took too long to process. Please check your internet connection and try again.');
      registerButton.disabled = false;
      registerButton.style.color = "white";
      registerButton.innerHTML = "Submit";
    };

    // Add event listener for the error event
    xhr.onerror = function() {
      toastr.error('A network error occurred. Please try again later.');
    };

    // Send the request
    xhr.send(formData);
  });
});


</script>








     

@endsection