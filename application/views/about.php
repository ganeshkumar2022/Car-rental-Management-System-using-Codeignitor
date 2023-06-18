<style>
    .error
    {
        color:white;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container-fuid bg-dark">
<div class="row p-5">
<div class="offset-md-2 col-md-3">
    <h6 class="text-uppercase text-white">About Us</h6><br>
<ul class="list-unstyled">
    <li class="text-white"><i class="fa-solid fa-chevron-right" style="font-size:10px;"></i> <a href="<?=base_url('home/about')?>" class="text-decoration-none text-white">About us</a></li>
    <li class="text-white"><i class="fa-solid fa-chevron-right" style="font-size:10px;"></i> <a href="" class="text-decoration-none text-white">FAQs</a></li>
    <li class="text-white"><i class="fa-solid fa-chevron-right" style="font-size:10px;"></i> <a href="" class="text-decoration-none text-white">Privacy</a></li>
    <li class="text-white"><i class="fa-solid fa-chevron-right" style="font-size:10px;"></i> <a href="" class="text-decoration-none text-white">Terms of use</a></li>
    <li class="text-white"><i class="fa-solid fa-chevron-right" style="font-size:10px;"></i> <a href="<?=base_url('admin')?>" class="text-decoration-none text-white">Admin login</a></li>
</ul>
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">
<h6 class="text-uppercase text-white">Subscribe newsletter</h6><br>
<form method="post" action="" id="signup_form" autocomplete="off">
<div class="form-group">
    <input type="text" id="newSub" name="email" class="form-control" placeholder="Enter Email Address">
</div>
<button class="log_button btn-block font-weight-bold" type="submit" name="submit">Subscribe <i class="fas fa-arrow-circle-right"></i></button>
</form>
</div>
</div>
</div>
<?php
if(isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","root","","car_rental");
 $email=$_POST["email"];
 $sql="insert into subscriber values (NULL,'$email',NULL)";
 if(mysqli_query($con,$sql))
 {
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Success...',
        text: 'Subscribed successfully!'
      });
    </script>";
 }
 else
 {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!'
      });
    </script>";
 }
}
?>
<div class="container-fluid text-white p-3" style="background-color:#111;">
<div class="row">
<div class="offset-md-2 col-md-3">
Copyright &copy; <?php echo date('Y'); ?> All rights reserved
</div>
<div class="offset-md-3 col-md-3">
Connected With Us:&nbsp;
<i class="fa-brands fa-square-facebook"></i>&nbsp;
<i class="fa-brands fa-square-twitter"></i>&nbsp;
<i class="fa-brands fa-linkedin"></i>&nbsp;
<i class="fa-brands fa-square-google-plus"></i>&nbsp;
<i class="fa-brands fa-instagram"></i>
</div>

</div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#newSub").focus(function(){
$(this).css({"background-color":"#ffff80"});
});
$("#newSub").blur(function(){
$(this).css({"background-color":"white"});
});
$("#signup_form").validate({
rules:{
    email:{
        required:true,
        email:true
    },
},
messages:
{
    email:{
        required:"Please enter your email",
        email:"Please enter a valid email"
    }
}
});

</script>
