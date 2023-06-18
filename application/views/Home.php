<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
body
{
  width:100vw;
  overflow-x:hidden;
}
.home_bg
{
    background-image:url("<?=base_url('assets/images/bg1.jpg')?>");
    background-repeat:no-repeat;
    background-size:100% 100%;
    background-attachment: fixed;
}

.testbg
{
    background-image:url("<?=base_url('assets/images/blur3.jfif')?>");
    background-repeat:no-repeat;
    background-size:100% 100%;
    background-attachment: fixed;
}

.bag
{
  height:200px;
  width:200px;
  border-radius:250px;
  background-color:red;
}
.onew
{
  position:fixed;
  bottom:8px;
  right:8px;
}
html
{
  scroll-behavior:smooth;
}
.bag2
{
  height:200px;
  width:200px;
}
.triangle
{
	position:relative;
}
.triangle::after
{
content:" ";
position:absolute;
top:100%;
left:50%;
margin-left:-5px;
border-left:6px solid transparent;
border-right:6px solid transparent;
border-top:10px solid red;
}
</style>
</head>
<body class="home_bg">
<a href="#scr">
<i class="fa-solid fa-angle-up onew" style="padding:10px;background-color:orange;color:white;border-radius:200px;"></i>
</a>
<!-- home page start -->
<div class="container">
<div class="row my-5">
<div class="col-md-8 mt-4">
  <img src="<?=base_url('assets/images/car2.png')?>" class="img-fluid">
</div>
<div class="col-md-4" style="margin-top:100px;">
<h2 class="text-uppercase text-white font-weight-bold" style="">Find the correct<br> car for you</h2>
<h5 class="text-white font-weight-bold" style="">We have more than a thousand of cars for you</h5>
<button class="log_button">Read more <i class="fas fa-arrow-circle-right"></i></button>
</div>
</div>
</div>
<!-- home page end -->

<div class="container-fluid bg-white p-5">
<div class="row">
<div class="col-md-12 text-center">
  <h3 class="text-capitalize"><span class="font-weight-bold">Find the best</span> <span class="font-weight-normal">car for you</span></h3>
<p>
Our Aim is to design and create a data management System for a car rental company.This enables admin can rent a vehicle that can be used by a customer This system increasescustomer retention and simplify vehicle and staff Management in an efficient way
The customers can also use the system to get car rent. The customer should create a new account before logging in or he / she can log into the System with his/her created account. Then he/shecan book the available cars and can book this car .This system will helpful to the admin as wellas to the customer also.
</p>
</div>
</div>
</div>

<div class="container-fluid bg-white p-5">
<div class="row">
<div class="col-md-12 text-center">
<div style="background-color:red;padding:6px;border-radius:50px;width:100px;margin:auto;" class="triangle">
<span class="text-white">New Car</span>
</div>
<div class="row my-5">
<?php	
foreach($newcar as $carss)
{
$car=base_url().$carss->myimage1;
?>
<div class="col-md-4">
	<div class="card">
<div class="img-top">
<img src='<?=$car?>' style="height:250px;width:100%;">
</div>
	<div class="card-body">
<div class="row py-3 mt-n5" style="background-color:rgba(60,60,60,0.7);color:white;">
	<div class="col small"><i class="fa-solid fa-car"></i> <?=$carss->fuel?></div>
	<div class="col small"><i class="fa-sharp fa-regular fa-calendar-days"></i> <?=$carss->year?> Model</div>
	<div class="col small"><i class="fa-solid fa-user"></i> <?=$carss->seat?> Seats</div>
</div>
	<div>
	<div class="card-footer">
		<div class="clear-fix">
			<div class="float-left"><h5><?php echo $carss->title; ?></h5></div>
			<div class="float-right text-muted">&#8377;<?php echo $carss->price; ?>/ day</div>
		</div>
	</div>
	</div>
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

<div class="container-fluid testbg p-5">
<div class="row text-center ml-4">

<div class="col-md-3">
<div class="card bag">
<div class="card-body"><br>
<i class="fa-solid fa-calendar-days text-white" style="font-size:40px;"></i><br>
<h2 class="text-white">100+</h2>
<p class="text-white">years in business</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card bag">
<div class="card-body"><br>
<i class="fa-solid fa-car text-white" style="font-size:40px;"></i><br>
<h2 class="text-white">4000+</h2>
<p class="text-white">new cars for sale</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card bag">
<div class="card-body"><br>
<i class="fa-solid fa-car text-white" style="font-size:40px;"></i><br>
<h2 class="text-white">1000+</h2>
<p class="text-white">used cars for sale</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card bag">
<div class="card-body"><br>
<i class="fa-solid fa-user text-white" style="font-size:40px;"></i><br>
<h2 class="text-white">600+</h2>
<p class="text-white">satisfied customers</p>
</div>
</div>
</div>

</div>
</div>



</div>
<div class="container-fluid" style="background-color:lightgray;background-size:100% 100%;height:450px;">
<h3 class="text-capitalize p-4 text-center"><span class="font-weight-bold">Our satisfied</span> <span class="font-weight-normal">customers</span></h3>
<div class="row multiple-items">

<!-- <div class="col-md-4" style="position:relative;">
<div class="card m-5 bag2" style="background-image:url('assets/images/s1.jfif');border-radius:0;width:80%;border-top-right-radius:50px;">
<img src="<?=base_url('assets/images/user.jfif')?>" style="height:100px;width:100px;position:absolute;bottom:-10px;left:-30px;border-radius:200px;">
<div class="card-body">
  <p style="margin-left:100px;">
  this is my text
</p>
</div>
</div>
</div> -->
<?php foreach($testimonials as $testimonial): ?>
<div class="col-md-4">
<div class="card m-5 bag2" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFJvxqX5sXDi5fK82ExIFmK-sBLY8vu_ycyQ&usqp=CAU);background-repeat:no-repeat;background-size:cover;border-radius:0;width:80%;border-top-right-radius:50px;">
<img src="<?=base_url('assets/images/user.jfif')?>" style="height:100px;width:100px;position:absolute;bottom:-10px;left:-30px;border-radius:200px;">
<div class="card-body">
<h6 style="margin-left:70px;" class="text-white">
<?=$testimonial->message?>
</h6>
</div>
</div>
</div>
<?php endforeach; ?>
<!-- <div class="col-md-4" style="position:relative;">
<div class="card m-5 bag2" style="background-image:url('assets/images/s1.jfif');border-radius:0;width:80%;border-top-right-radius:50px;">
<img src="<?=base_url('assets/images/user.jfif')?>" style="height:100px;width:100px;position:absolute;bottom:-10px;left:-30px;border-radius:200px;">
<div class="card-body">
<p style="margin-left:100px;">
  this is my text
</p>
</div>
</div>
</div> -->

</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.multiple-items').slick({
  slidesToShow: 3,
  slidesToScroll:1,
  autoplay: true,
  autoplaySpeed: 2000
});
  });
  
</script>
</body>
</html>
