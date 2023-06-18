<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car rental management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<style>
a:hover
{
color:red;
}
.bgc
{
  background-image:url(<?php echo base_url('assets/images/car4.jpg'); ?>);background-repeat:no-repeat;background-size:100% 100%;
  color:white;

}
.bgc2
{
  background-image:url(<?php echo base_url('assets/images/car4.jpg'); ?>);background-repeat:no-repeat;background-size:100% 100%;
  color:white;

}

/* Style The Dropdown Button */
.dropbtn {
  background-color:blue;
  color: white;
  padding:8px 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1;text-decoration:none;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color:blue;
}
html
{
  scroll-behavior:smooth;
}
body
{
  width:100vw;
  overflow-x:hidden;
}
</style>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid bg-white">
<div class="row" id="scr">

<div class="col">
    <img src="<?=base_url('assets/images/car-rental.jpg')?>">
</div>
<div class="col mt-5">
<table>
    <tr>
        <th><i class="fa-solid fa-envelope" style="border:2px solid grey;padding:10px;border-radius:250px;"></i></th>
        <th><span class="text-uppercase">For Support Mail Us </span><br/><small>info@example.com</small></th>
    </tr>
</table>
</div>
<div class="col mt-5">
<table>
    <tr>
        <th><i class="fa-solid fa-phone" style="border:2px solid grey;padding:10px;border-radius:250px;"></i></th>
        <th><span class="text-uppercase">Service Helpline Call Us </span><br/><small>+91 98765 12131</small></th>
    </tr>
</table>
</div>
<div class="col mt-5">
  <?php if(!$this->session->has_userdata('uid')) { ?>
    <button class="log_button" data-toggle="modal" data-target="#myModal">Login/Register
    </button>
  <?php } else { ?>
    <div class="dropdown">
  <button class="dropbtn">User settings <i class="fa-solid fa-chevron-down" style="font-size:12px;"></i></button>
  <div class="dropdown-content">
    <a href="<?=base_url('home/profile')?>">Profile settings</a>
    <a href="<?=base_url('home/updatePassword')?>">Update password</a>
    <a href="<?=base_url('home/mybookings')?>">My booking</a>
    <a href="<?=base_url('home/postaTestimonial')?>">Post a testimonial</a>
    <a href="<?=base_url('home/myTestimonial')?>">My testimonial</a>
    <a href="<?=base_url('home/logout')?>">Logout</a>
  </div>
</div>
</div>
  <?php } ?>
  <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title font-weight-bold">Login Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form action="<?=base_url('home/login')?>" method="post" autocomplete="off">
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
      <div class="text-center mt-4">
       <p>Don't have an account?<a href="<?=base_url('home/signup')?>" class="text-decoration-none"> Signup Here</a><br/>
       <a href="" class="text-decoration-none">Forgot password</a></p>
      </div>
     </div>
    </div>
  </div>
</div>  
</div>


</div>
</div>
<!-- nav bar start -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white small" href="<?=base_url('home')?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="<?=base_url('home/about')?>">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="<?=base_url('home/car_listing')?>">Car listing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="<?=base_url('home/faq')?>">Faqs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="<?=base_url('home/Contact')?>">Contact us</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link text-white small btn px-4" style="background-color:black;" href="#"> User</a>
      </li>-->
    
      
    </ul>
  </div>
</nav>

<!-- nav bar end -->
</body>
</html>
