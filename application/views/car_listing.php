<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car listing</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<a href="#scr">
<i class="fa-solid fa-angle-up onew" style="padding:10px;background-color:orange;color:white;border-radius:200px;position:fixed;right:10px;bottom:5px;">
</i>
</a>
<div class="container-fluid bgc" >
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>Car Listing</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> Car Listing</p>
</div>
</div>
</div>
<div class="container-fluid p-5 bg-white">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="card">
    <div class="card-body">
        <h4 class="text-capitalize font-weight-bolder mb-5"><i class="fa-solid fa-filter" style="color: #e6770f;"></i> Find your car</h4>
<form>
<div class="form-group">
  <select class="form-control form-control-lg" id="sel1" name="brand" style="background-color:lightgray;">
    <option value="" style="background-color:white;">Select Brand</option>
    <?php
foreach($brands as $brand)
{
?>
<option value="<?=$brand->id?>" style="background-color:white;"><?=$brand->name?></option>
<?php
}
    ?>
  </select>
</div>
<div class="form-group">
  <select class="form-control form-control-lg" id="sel1" style="background-color:lightgray;" name="fuel">
    <option value="" style="background-color:white;">Select Fuel type</option>
    <option value="petrol"  class="bg-white text-dark">Petrol</option>
    <option value="diesel" class="bg-white text-dark">diesel</option>
    <option value="cng"  class="bg-white text-dark">cng</option>
  </select>
</div>
<a class="log_button text-decoration-none text-white btn-block text-center" href="<?=base_url('home/car_listing/')?>">
<i class="fa-solid fa-magnifying-glass"></i> Search Car
</a>
</form>
    </div>
</div>
<div class="card mt-5">
<h5 class="text-capitalize font-weight-bolder text-center mt-2 mb-4"><i class="fa-solid fa-car" style="color: #e6770f;"></i>
Recently listed cars
</h5>
<?php
$b=array_slice($cars,-2,2);

    foreach($b as $c)
    {
        ?>
        <div class="row mt-2">
         <div class="col-md-5">
    <img src="<?=base_url($c->myimage1)?>" class="img-fluid" style="width:100%;height:100%;">
    </div>
    <div class="col-md-7 ml-n3" style="background-color:RGB(229 231 231);">
    <h6 class="text-capitalize font-weight-bolder"><?=$c->title?></h6>
    <p class="font-weight-light">&#8377;<?=$c->price?> per day</p>    
</div>
    </div>
        <?php
    }
 
?>
</div>
</div>
<div class="col-md-9">
<ul class="list-group">
    <li class="list-group-item" style="border-left:5px solid blue;background-color:#ddffff;"><?=count($cars)?> Listings</li>
</ul>

    <?php
    foreach($cars as $list_cars)
    {
        ?>
        <div class="row my-4">
         <div class="col-md-5 col-sm-6">
    <img src="<?=base_url($list_cars->myimage1)?>" class="img-fluid" style="width:100%;">
    </div>
    <div class="col-md-7 col-sm-6 ml-n3 p-3" style="background-color:RGB(229 231 231);">
    <h5 class="text-capitalize font-weight-bolder"><?=$list_cars->title?></h5>
    <p class="font-weight-light">&#8377;<?=$list_cars->price?> per day</p>
    <table class="w-100">
        <tr>
            <td><i class="fa-solid fa-user"></i> <?=$list_cars->seat?> Seats </td>
            <td><i class="fa-solid fa-calendar-days"></i> <?=$list_cars->year?> model</td>
            <td><i class="fa-solid fa-car"></i> <?=$list_cars->fuel?></td>
        </tr>
    </table>
    <div class="mt-4">
    <a class="log_button text-decoration-none text-white" href="<?=base_url('home/vehicleDetails/'.$list_cars->id)?>">View Details <i class="fas fa-arrow-circle-right"></i></a>
</div>    
</div>
    </div>
        <?php
    }
   ?>

</div>
</div>
</div>
</div>
<div>
<?php
echo $this->session->flashdata('mymessage');
?>
</body>
</html>