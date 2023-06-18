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
    td
    {
        padding:8px;
    }
</style>
</head>
<body>
<?php
include('header.php');
?>
<div>
<?php
if(isset($error))
{
    echo $error;
}
?>
<div style="width:80%;float:right;">
<div class="container-fluid">
<h3 class="font-weight-normal p-4">Edit a vehicle</h3>
<?php
$as=$this->session->flashdata('success');
if(isset($as))
{
    echo '<p id="success">'.$as.'</p>';
}
$ba=$this->session->flashdata('error');
if(isset($ba))
{
    echo '<p id="error">'.$ba.'</p>';
}
?>
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header text-uppercase bg-danger text-white">basic info</div>
<div class="card-body">
<?php
if(isset($message))
{
    echo $message;
}
?>    
<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
<div class="row">
    <div class="col">
       <div class="form-inline">
       <label for="title">Vehicle title: </label>
       <input type="text" class="form-control ml-5" value="<?=$vehicle_id->title?>" placeholder="Enter vehicle title" name="title" id="title" size="40%" required>
        </div> 
    </div>
    <div class="col">
    <div class="form-inline">
    <label>Select Brand&nbsp;&nbsp;</label>
    <select name="brand" class="form-control ml-5 w-50 bg-dark text-white text-uppercase" required>
    <option value="" class="bg-white text-dark">Select</option>
    <?php
foreach($mybrand as $bee)
{
    
    ?>
    <option value="<?=$bee->id?>" class="bg-white text-dark" <?php if($vehicle_id->brand==$bee->id) { echo "selected"; } ?>><?=$bee->name?></option>
<?php
}
?>
  </select>
</div>

    </div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<div class="form-inline">
  <label for="vo">Vehicle Overview:</label>
  <textarea class="form-control ml-3" rows="5" id="vo" name="overview" cols="112%" required>
    <?=$vehicle_id->overview?>
  </textarea>
</div>
</div>
</div>
<div class="row mt-3">
    <div class="col">
       <div class="form-inline">
       <label for="price">Price per day: &nbsp;</label>
       <input type="text" class="form-control ml-4" name="price" value="<?=$vehicle_id->price?>"  placeholder="Enter price" id="price" size="40%" required>
        </div> 
    </div>
    <div class="col">
    <div class="form-inline">
    <label>Select Fuel type&nbsp;&nbsp;</label>
    <select name="fuel" class="form-control ml-4 w-50 bg-dark text-white text-uppercase" required>
    <option value="">Select</option>
    <option value="petrol" <?php if($vehicle_id->fuel=="petrol") { echo "selected"; } ?>  class="bg-white text-dark">Petrol</option>
    <option value="diesel" <?php if($vehicle_id->fuel=="diesel") { echo "selected"; } ?> class="bg-white text-dark">diesel</option>
    <option value="cng" <?php if($vehicle_id->fuel=="cng") { echo "selected"; } ?> class="bg-white text-dark">cng</option>
  </select>
</div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
       <div class="form-inline">
       <label for="model">Model year: &nbsp;&nbsp;&nbsp;&nbsp;</label>
       <input type="number" class="form-control ml-4" value="<?=$vehicle_id->year?>" name="year" placeholder="Enter year" id="model" size="40%" required>
        </div> 
    </div>
    <div class="col">
    <div class="form-inline">
       <label for="capacity">Seating capacity: </label>
       <input type="number" class="form-control ml-4" name="seat" value="<?=$vehicle_id->seat?>" placeholder="Enter seating capacity" id="capacity" size="38%" required>
        </div> 
  </select>

    </div>
</div>
<h5 class="my-4">Upload images</h5>
<div class="row my-3">
<div class="col-md-4">
<label>Image 1 : <?=$vehicle_id->myimage1?></label>
<input type="file" name="myimage1">
</div>
<div class="col-md-4">
<label>Image 2 : <?=$vehicle_id->myimage2?></label>
<input type="file" name="myimage2">
</div>
<div class="col-md-4">
<label>Image 3 : <?=$vehicle_id->myimage3?></label>
<input type="file" name="myimage3">
</div>
<div class="col-md-4 mt-3">
<label>Image 4 : <?=$vehicle_id->myimage4?></label>
<input type="file" name="myimage4">
</div>
<div class="col-md-4 mt-3">
<label>Image 5 : <?=$vehicle_id->myimage5?></label>
<input type="file" name="myimage5">
</div>
</div>
    </div>
    </div>    
<div class="row my-4">
   <div class="col-md-12">
    <div class="card">
        <div class="card-header text-uppercase text-white" style="background-color:tomato;">accessories</div>
        <div class="card-body">
<table class="w-100">
<?php
$a=$accessory_id;
$acce=array();
foreach($a as $ac)
{
    array_push($acce,$ac["name"]);
}
    ?>
   <tr>
        <td><input type="checkbox" <?php if(in_array("Air Conditioner",$acce)) { echo "checked"; } ?> name="accessory[]" value="Air Conditioner"> Air Conditioner</td>
        <td><input type="checkbox" <?php if(in_array("Power Door Locks",$acce)) { echo "checked"; } ?>  name="accessory[]" value="Power Door Locks"> Power Door Locks</td>
        <td><input type="checkbox" <?php if(in_array("Antilock Braking System",$acce)) { echo "checked"; } ?> name="accessory[]" value="Antilock Braking System"> Antilock Braking System </td>
        <td><input type="checkbox" <?php if(in_array("Brake Assist",$acce)) { echo "checked"; } ?> name="accessory[]" value="Brake Assist"> Brake Assist</td>
    </tr>
    <tr>
        <td><input type="checkbox" <?php if(in_array("Power Steering",$acce)) { echo "checked"; } ?> name="accessory[]" value="Power Steering"> Power Steering</td>
        <td><input type="checkbox" <?php if(in_array("Driver Airbag",$acce)) { echo "checked"; } ?> name="accessory[]" value="Driver Airbag"> Driver Airbag</td>
        <td><input type="checkbox" <?php if(in_array("Passenger Airbag",$acce)) { echo "checked"; } ?> name="accessory[]" value="Passenger Airbag"> Passenger Airbag </td>
        <td><input type="checkbox" <?php if(in_array("Power Windows",$acce)) { echo "checked"; } ?> name="accessory[]" value="Power Windows"> Power Windows</td>
    </tr>
    <tr>
        <td><input type="checkbox" <?php if(in_array("CD Player",$acce)) { echo "checked"; } ?> name="accessory[]" value="CD Player"> CD Player</td>
        <td><input type="checkbox" <?php if(in_array("Central Locking",$acce)) { echo "checked"; } ?> name="accessory[]" value="Central Locking"> Central Locking</td>
        <td><input type="checkbox" <?php if(in_array("Crash Sensor",$acce)) { echo "checked"; } ?> name="accessory[]" value="Crash Sensor"> Crash Sensor </td>
        <td><input type="checkbox" <?php if(in_array("Leather Seats",$acce)) { echo "checked"; } ?> name="accessory[]" value="Leather Seats"> Leather Seats</td>
    </tr>
    <?php

?>
 
</table>
<input type="reset" class="btn btn-dark" value="Cancel">
<input type="submit" class="btn btn-primary" value="Update changes" name="edit">
        </div>
    </div>
   </div>
</div>
</form>
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