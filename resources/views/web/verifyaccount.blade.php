<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$appname = DB::table('appdata')->where('id',1)->value('name');
$link = DB::table('appdata')->where('id',1)->value('link');
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{$appname}} - Verify Account</title>
</head>
<body>

<br>
<div style="text-align:center;border:1px solid #f0f5f5; background-color:#f0f5f5;padding-left:10px;padding-right:10px">
<br>
<h4>Verify your {{$appname}} account</h4>
<br>
<p>
You created an account on <strong>{{$appname}}</strong>  platform click on the link below to verify your account, note that only verified accounts can upload items on the platform
</p>
<br>


<?php
$token=$data["token"];
?>

<p>
<a href="https://{{$link}}/user-account-verification?token={{$token}}" style="background-color:blue; color: white;  padding: 15px 25px;  text-decoration: none">
    click here to verify your account
</a>
</p>

<br><br>

</div>
</body>
</html>
