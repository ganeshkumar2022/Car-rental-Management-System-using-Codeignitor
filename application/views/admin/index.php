<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
body
{
    height:100vh;
    width:100vw;
    background-image:url(<?=base_url('assets/images/bg2.jpg')?>);
    background-repeat:no-repeat;
    background-size:100% 100%;
}
label
{
    font-weight:bold;
    font-family:arial;
    text-transform:uppercase;
    font-size:14px;
}
input[type=submit]
{
    font-family:arial;
    text-transform:uppercase;
    font-weight:bold;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-4 offset-md-2 admin_index_layout" style="margin-top:100px;">

<h3 class="text-white text-center my-2">Signin</h3>
<div class="card p-5">
<?php
if(isset($logerr))
{
  echo $logerr;
}
?>
<div class="card-body">
<form name="myform" action="<?=base_url('admin/checkdetails')?>" autocomplete="off" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
    <span id="emailErr" class="text-danger"><?php if(isset($m)) { echo $m;} ?></span>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
    <span id="passwordErr" class="text-danger"><?php if(isset($p)) { echo $p;} ?></span>
  </div>
  <input type="submit" class="btn btn-primary btn-block" value="Login">
</form>

</div>
</div>
</div>
</div>
</div>
</body>
</html>