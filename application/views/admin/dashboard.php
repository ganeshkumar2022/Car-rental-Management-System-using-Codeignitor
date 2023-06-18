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
 <h3 class="font-weight-normal p-4">Dashboard</h3>
<div class="row">
<div class="col-md-3">
 <div class="card">
  <div class="card-body text-white text-uppercase text-center" style="background-color:limegreen;">reg users
</div>
  <div class="card-footer">Footer</div>
</div>
</div>

<div class="col-md-3">
 <div class="card">
  <div class="card-body text-white text-uppercase text-center" style="background-color:peru;">listed vehicles</div>
  <div class="card-footer">Footer</div>
</div>
</div>

<div class="col-md-3">
 <div class="card">
  <div class="card-body text-white text-uppercase text-center" style="background-color:aquamarine;">total bookings</div>
  <div class="card-footer">Footer</div>
</div>
</div>

<div class="col-md-3">
 <div class="card">
  <div class="card-body text-white text-uppercase text-center" style="background-color:mediumvioletred;">listed brands</div>
  <div class="card-footer">Footer</div>
</div>
</div>

<div class="col-md-3">
 <div class="card">
  <div class="card-body text-white text-uppercase text-center" style="background-color:limegreen;">subscribers</div>
  <div class="card-footer">Footer</div>
</div>
</div>

<div class="col-md-3">
 <div class="card">
  <div class="card-body text-white text-uppercase text-center" style="background-color:peru;">queries</div>
  <div class="card-footer">Footer</div>
</div>
</div>

<div class="col-md-3">
 <div class="card">
  <div class="card-body text-white text-uppercase text-center" style="background-color:aquamarine;">testimonialss</div>
  <div class="card-footer">Footer</div>
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