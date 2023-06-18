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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="" type="text/javascript"></script>
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

 <h3 class="font-weight-normal p-4">Manage Vehicle</h3>
<div class="row">

<div class="col-md-12">
<div class="card">
    <div class="card-header text-uppercase bg-info text-white">Manage Vehicle</div>
<div class="card-body"> 
<table class="table table-striped table-bordered" id="mytable">
    <thead>
        <tr>
            <th>#</th>
            <th>Vehicle Title</th>
            <th>Brand</th>
            <th>Price per day</th>
            <th>Fuel type</th>
            <th>Model year</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
$i=1;
foreach($vehicles as $vehicle)
{
    ?>
      <tr>
            <td><?=$i?></td>
            <td><?=$vehicle->title?></td>
            <td><?=$vehicle->brand?></td>
            <td><?=$vehicle->price?></td>
            <td><?=$vehicle->fuel?></td>
            <td><?=$vehicle->year?></td>
            <td>
             <a href="<?=base_url('admin/editCar/'.$vehicle->id)?>" class="text-info"><i class="fa-solid fa-pen-to-square"></i></a>
             <a href="<?=base_url('admin/deleteCar/'.$vehicle->id)?>" class="ml-2 text-info"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
    <?php
$i++;
}
?>
      
    </tbody>
</table>
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
<script type="text/javascript">
    $(document).ready(function(){
        $("#mytable").DataTable();
    });
</script>
</div>
</body>
</html>