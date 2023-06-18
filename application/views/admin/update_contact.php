<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rental | Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style type="text/css">
    #success
    {
        border-left:5px solid green;
        color:green;
        background-color:linen;
        padding:10px;
    }
    #danger
    {
        border-left:5px solid red;
        padding:10px;
        color:red;
        background-color:linen;
    }
    .ram li
    {
        padding:3px;
    }
    .ram li:hover
    {
background-color:black;
color:white;        
    }
    .dropdown_list
    {
      display:none;
    }
    .dropdown_list li:hover
    {
      opacity:0.6;
    }
    .dropdown_list2 li:hover
    {
      opacity:0.6;
    }
</style>
</head>
<body>
<?php
include('header.php');
?>
<div>

<div style="width:80%;float:right;">
<div class="container-fluid">

 <h3 class="font-weight-normal p-4">Update Contact Info</h3>
<div class="row">

<div class="col-md-8 offset-md-2">
<div class="card">
    <div class="card-header text-uppercase text-white" style="background-color:lightpink;">FORM FIELD</div>
<div class="card-body">
<?php
if(isset($message))
{
    echo $message;
}
foreach($data2 as $row):
?>    
<form action="<?=base_url('admin/update_contactinfo')?>" method="post" autocomplete="off">
<table>
<tr>
<th style="width:20%;">
<label for="brand">Address</label>
</th>
<td>
<div class="form-group">
<input type="text" class="form-control" onfocusin="fun1(this)" onfocusout="fun2(this)" value="<?=$row->address?>" placeholder="Enter address" name="address" id="brand" size="80%" required>
</div>
</td>
</tr>
<tr>
<th style="width:20%;">
<label for="brand">Email Id</label>
</th>
<td>
<div class="form-group">
<input type="text" class="form-control" onfocusin="fun1(this)" value="<?=$row->email?>" onfocusout="fun2(this)" placeholder="Enter email address" name="email" id="brand" size="80%" required>
</div>
</td>
</tr>
<tr>
<th style="width:20%;">
<label for="brand">Contact Number</label>
</th>
<td>
<div class="form-group">
<input type="text" class="form-control" onfocusin="fun1(this)" onfocusout="fun2(this)" value="<?=$row->mobile?>" placeholder="Enter contact no" name="mobile" id="brand" size="80%" required>
</div>
</td>
</tr>
<tr>
<th>
</th>
<td>
  <input type="submit" class="btn text-white p-2" style="background-color:RGB(44 84 152);" name="update" value="Update">
</td>
</tr>
</table>
</form>
<?php
endforeach;
?>
<script type="text/javascript">
    function fun1(x)
    {
     x.style.background="#FFFF66";
    }
    function fun2(x)
    {
     x.style.background="none";
    }
</script>
    </div>
</div>
</div>

</div>
</div>
</div>
<div style="width:20%;">
<?php
include('leftbar.php');
?>
</div>

</div>
</body>
</html>