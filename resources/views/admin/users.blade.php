@extends('admin.dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<div class="card">
<div class="card-header">
<h5><i class="feather icon-users"></i> Users </h5>
<span>
	
Manage users view , delete , block , send emails , change password , change roles and many more.
</span>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li><i class="feather icon-maximize full-card"></i></li>
<li><i class="feather icon-minus minimize-card"></i></li>
<li><i class="feather icon-trash-2 close-card"></i></li>
</ul>
</div>
</div>
<div class="card-block">
<div class="table-responsive">
<div class="dt-responsive table-responsive">
<table id="res-config" class="table table-striped table-bordered nowrap table-sm">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>


</tbody>
</table>
</div>
</div>
</div>
</div>















	
</body>
</html>
 @endsection

