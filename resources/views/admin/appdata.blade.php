@extends('admin.dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>





	<style>



.cropper-container {
  width: 100%;
  height: 100%;
}

.cropper-container img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}



.modal {
  transition: all 0.5s ease-in-out;
  transform: translate3d(100%, 0, 0);
}

.modal.show {
  transform: translate3d(0, 0, 0);
  animation: slideIn 0.5s;
}

@keyframes slideIn {
  from {
    transform: translate3d(100%, 0, 0);
  }
  to {
    transform: translate3d(0, 0, 0);
  }
}


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
<body>


<!--<div class="page-header">
<div class="row align-items-end">
<div class="col-md-12">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item" style="float: left">
<a href="../index.html"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item" style="float: left;"><a href="#!">Dashboard</a>
</li>
<li class="breadcrumb-item" style="float: left;"><a href="#!">Users</a>
</li>
</ul>
</div>
</div>
</div>
</div>-->








<div class="card">
<div class="card-header">
<h5><i class="feather icon-grid" style="font-size:16px"></i> App data </h5>
<span>
Manage data displayed on the website about this app.
</span>

<div class="card-header-right">
<ul class="list-unstyled card-option">
<!--<li><i class="feather icon-maximize full-card"></i></li>-->
<!--<li><i class="feather icon-minus minimize-card"></i></li>-->
<!--<li><i class="feather icon-trash-2 close-card"></i></li>-->
<!--<li><i class="feather icon-edit"></i></li>-->
<i class="feather icon-info" style="font-size:16px"></i>
</ul>
</div>
</div>


<div class="row card-block">
<div class="col-md-12 col-lg-4" id="generaldiv">
<h6 class="sub-title">General <a href="#" style="float:right"  data-toggle="modal" data-target="#general-modal"><i class="feather icon-edit text-info" style="font-size:16px"></i></a>    
<?php
$appName = DB::table('appdata')->value('appname');
$appLink = DB::table('appdata')->value('applink');
$appTitle = DB::table('appdata')->value('apptitle');
?>
</h6>
<ul class="basic-list">
<li class>
<h6><i class="feather icon-grid t"  style="color:#fe8a7d!important;font-size:16px"></i> App Name   </h6>
<p class="generaldiv"><i class="feather icon-angle-right"></i>{{$appName}}</p>
</li>
<li class>
<h6> <i class="icofont icofont-globe  "  style="color:#fe8a7d!important;font-size:16px"></i> App Link (Domain)</h6>
<p  class="generaldiv" >{{$appLink}}</p>
</li>
<li class>
<h6><i class="icofont icofont-underline  "  style="color:#fe8a7d!important;font-size:16px"></i> App Title</h6>
<p class="generaldiv">{{$appTitle}}</p>
</li>
</ul>
</div>



<div class="col-md-12 col-lg-4" id="contactdiv">
<h6 class="sub-title">Contact <a href="#" style="float:right" data-toggle="modal" data-target="#contact-modal"><i class="feather icon-edit text-info" style="font-size:16px"></i></a></h6>
<?php
$appAddress = DB::table('appdata')->value('appaddress');
$appContact = DB::table('appdata')->value('appcontact');
$appEmail = DB::table('appdata')->value('appemail');
?>
<ul class="basic-list list-icons">
<li>

<h6><i class="icofont icofont-home " style="color:#fe8a7d!important;font-size:16px"></i> Address</h6>
<p>{{$appAddress}}</p>
</li>
<li>
<h6> <i class="icofont icofont-phone  "  style="color:#fe8a7d!important;font-size:16px"></i> Contact</h6>

<p>{{$appContact}}</p>

</li>
<li>
<h6><i class="icofont icofont-email "  style="color:#fe8a7d!important;font-size:16px"></i> Email</h6>

<p>{{$appEmail}}</p>
</li>
</ul>
</div>



<div class="col-md-12 col-lg-4">
<h6 class="sub-title">Resources <a href="#" style="float:right"><i class="feather icon-cog text-info" style="font-size:16px"></i></a></h6>
<?php
$appLogo = DB::table('appdata')->value('applogo');
$appLetterhead = DB::table('appdata')->value('appletterhead');
$appTerms = DB::table('appdata')->value('appterms');
?>
<ul class="basic-list list-icons-img">
<li>
<h6><i class="icofont icofont-image  " style="color:#fe8a7d!important;font-size:16px"></i> Logo 
<button style="float:right;border:1px solid #fe8a7d!important" id="changelogobtn" ><i class="feather icon-edit"></i>Change</button>


<!-- Hidden file input -->
<input type="file" id="logoinput" accept="image/*" style="display: none;">

</h6>
<img src="dashboard/files/assets/images/avatar-1.jpg" class="img-fluid p-absolute d-block text-center" alt>
</li>

<li>
<h6> <br>
<i class="icofont icofont-file-image " style="color:#fe8a7d!important;font-size:16px"></i>  Letter Head
<button style="float:right;border:1px solid #fe8a7d!important"><i class="feather icon-edit"></i>Change</button>
</h6>
  <img src="dashboard/files/assets/images/avatar-1.jpg" class="img-fluid p-absolute d-block text-center" alt>
</li>

<li>
	<br>
<h6><i class="icofont icofont-file-pdf " style="color:#fe8a7d!important;font-size:16px"></i> Terms & Conditions
<button style="float:right;border:1px solid #fe8a7d!important"><i class="feather icon-edit"></i>Change</button>
</h6>
<a href="#">{{$appTerms}}</a>

</li>

</ul>
</div>
</div>
</div>

</div>
</div>
</div>































<div class="modal fade modal-flex" id="general-modal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title">General</h6>
<a href="#" style="float:right" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
</div>
<div class="modal-body model-container" id="generalformdiv">
	
<form action="update-app-data-general" method="post" class="j-pro"  novalidate id="generalform">
@csrf

<div class="j-content">

<div class="j-row">
<div class="j-span12 j-unit">
<label for="" style="margin-bottom:5px">App Name</label>
<div class="j-input">
<label class="j-icon-left" >
<i class="feather icon-grid"></i>
</label>
<input type="text"  name="appname" placeholder="App Name" value="{{$appName}}" class="name-group">
</div>
</div>


<div class="j-span12 j-unit">
<label for="" style="margin-bottom:5px">App Link</label>
<div class="j-input">
<label class="j-icon-left" for="last_name">
<i class="icofont icofont-globe"></i>
</label>
<input type="text" name="applink" placeholder="App Link"  value="{{$appLink}}" class="name-group">
</div>
</div>
</div>



<div class="j-row">
<div class="j-span12 j-unit">
<label for="" style="margin-bottom:5px">App Title</label>
<div class="j-input">
<label class="j-icon-left" for="url">
<i class="icofont icofont-underline"></i>
</label>
<input type="text" name="apptitle" value="{{$appTitle}}" placeholder="App title">
</div>
</div>
</div>



</div>

<div class="j-footer">
<button class="btn btn-default border border-info"   data-dismiss="modal" aria-label="Close" style="float:left;">Cancel</button>
<button type="submit" class="btn btn-primary" id="generalUpdate">Update</button>
</div>



</form>
</div>
</div>
</div>
</div>







<div class="modal fade modal-flex" id="contact-modal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title">Contact</h6>
<a href="#" style="float:right" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
</div>
<div class="modal-body model-container" id="contactformdiv">
	
<form action="update-app-data-contact" method="post" class="j-pro"  novalidate id="contactform">
@csrf

<div class="j-content">

<div class="j-row">
<div class="j-span12 j-unit">
<label for="" style="margin-bottom:5px">App Address</label>
<div class="j-input">
<label class="j-icon-left" >
<i class="feather icon-grid"></i>
</label>
<input type="text"  name="appaddress" placeholder="App Address" value="{{$appAddress}}" class="name-group">
</div>
</div>


<div class="j-span12 j-unit">
<label for="" style="margin-bottom:5px">App Contact</label>
<div class="j-input">
<label class="j-icon-left" for="last_name">
<i class="icofont icofont-globe"></i>
</label>
<input type="text" name="appcontact" placeholder="App Contact"  value="{{$appContact}}" class="name-group">
</div>
</div>
</div>



<div class="j-row">
<div class="j-span12 j-unit">
<label for="" style="margin-bottom:5px">App Email</label>
<div class="j-input">
<label class="j-icon-left" for="url">
<i class="icofont icofont-underline"></i>
</label>
<input type="text" name="appemail" value="{{$appEmail}}" placeholder="App email">
</div>
</div>
</div>



</div>

<div class="j-footer">
<button class="btn btn-default border border-info"   data-dismiss="modal" aria-label="Close" style="float:left;">Cancel</button>
<button type="submit" class="btn btn-primary" id="contactUpdate">Update</button>
</div>



</form>
</div>
</div>
</div>
</div>









<div class="modal  modal-flex" id="changeLogoModal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title">Change logo</h6>
<a href="#" style="float:right" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
</div>
<div class="modal-body">


<div class="cropper-container">
<img src=" " id ="logoImage" alt class="crop-img img-fluid">
</div>

</div>
</div>
</div>
</div>





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


  $(document).on("click", "#generalUpdate", function(e) {
  var self = $(this);
  $(this).prop("disabled", true);
  $(this).html('<div class="spinner"></div>');
  var form = document.getElementById("generalform");

  e.preventDefault(); 
  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
      type:"post",
      url: '/update-app-data-general',
      data: $(form).serialize(),
      success:function(data) {

        if(data == 2){
        toastr.success('Data updateed successifully','Success')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        $("#generaldiv").load(" #generaldiv  > *",function(){});
        $("#generalformdiv").load(" #generalformdiv  > *",function(){});
        }
        if(data == 4){
        toastr.success('Data inserted successifully','Success')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        $("#generaldiv").load(" #generaldiv  > *",function(){});
        $("#generalformdiv").load(" #generalformdiv  > *",function(){});
        }

        if(data == 1){
        toastr.error('An error occured probably no data change detected','Error')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        }
        
        if(data == 3){
        toastr.error('An known error occured during inserting data try again later','Error')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        }
        


  
        
      },
      error:function(jqXHR, textStatus, errorThrown) {

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
            toastr.error(errorPassage, 'Server Errors', {
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



  $(document).on("click", "#contactUpdate", function(e) {
  var self = $(this);
  $(this).prop("disabled", true);
  $(this).html('<div class="spinner"></div>');
  var form = document.getElementById("contactform");

  e.preventDefault(); 
  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
      type:"post",
      url: '/update-app-data-contact',
      data: $(form).serialize(),
      success:function(data) {

        if(data == 2){
        toastr.success('Data updateed successifully','Success')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        $("#contactdiv").load(" #contactdiv  > *",function(){});
        $("#contactformdiv").load(" #contactformdiv  > *",function(){});
        }
        if(data == 4){
        toastr.success('Data inserted successifully','Success')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        $("#contactdiv").load(" #contactdiv  > *",function(){});
        $("#contactformdiv").load(" #contactformdiv  > *",function(){});
        }

        if(data == 1){
        toastr.error('An error occured probably no data change detected','Error')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        }
        
        if(data == 3){
        toastr.error('An known error occured during inserting data try again later','Error')  
        self.text("Submit")
        self.prop("disabled", false)
        form.reset();
        }
        


  
        
      },
      error:function(jqXHR, textStatus, errorThrown) {

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
            toastr.error(errorPassage, 'Server Errors', {
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



/*$(document).on("click", "#changelogobtn", function(e) {

  $('#logoinput').trigger('click');


})*/



/*$(document).on("change", "#logoinput", function(e) {

  var image = $('#logoImage');
  var cropper = image.cropper({
  aspectRatio: 4/3,
  });

 $('#changeLogoModal').modal('show');


})*/





$(document).ready(function() {
  // Trigger file input click on button click
  $('#changelogobtn').click(function() {
    $('#logoinput').click();
  });

  // Handle file input change
  $('#logoinput').change(function(e) {
    var file = e.target.files[0];

    if (file.type.startsWith('image/')) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#logoImage').attr('src', e.target.result);
        var image = $('#logoImage');

        var cropper = image.cropper({
             aspectRatio: 4/3,
            viewMode: 1,
            dragMode: 'crop',
            autoCrop: true,
            zoomable: true,
            scalable: true,
            cropBoxMovable: true,
            cropBoxResizable: true,
                  
      
      });

        $('#changeLogoModal').modal('show');

      };

      reader.readAsDataURL(file);
    }
  });

 /* // Handle crop button click
  $('#crop-button').click(function() {
    // Get cropped canvas
    var canvas = cropper.getCroppedCanvas();

    // Convert canvas to data URL
    var dataURL = canvas.toDataURL();

    // Send data URL to server or display cropped image
    console.log(dataURL);

    // Hide modal popup
    $('#image-modal').modal('hide');
  });

  // Handle cancel button click
  $('#cancel-button').click(function() {
    // Hide modal popup
    $('#image-modal').modal('hide');
  });
*/


});



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

</body>
</html>
 @endsection

