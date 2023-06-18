<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rental Management System</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
.im
{
    width:100%;
    height:200px;
}
.tooo
{
    width:33%;
    display:inline-block;
}
td,th,table
{
  padding:15px;
}
table td
{
  cursor:pointer;
}
.jquet
{
  display:none;
}
input[type=text]:focus
{
  background-color:#FFFF9A;
}
#comment:focus
{
  background-color:#FFFF9C;
}
#comment
{
  resize:none;
}
.pp2,.nn2
{
  background-color:transparent;
  border:none;
  border-radius:50px;
  color:white;
}
</style>
</head>
<body>
<div class="multiple-items" style="">

<div class="tooo">
<img src="<?=base_url($car_id->myimage1)?>" class="im">
</div>
<div class="tooo">
<img src="<?=base_url($car_id->myimage2)?>" class="im">
</div>
<div class="tooo">
<img src="<?=base_url($car_id->myimage3)?>" class="im">
</div>
<div class="tooo">
<img src="<?=base_url($car_id->myimage4)?>" class="im">
</div>
<div class="tooo">
<img src="<?=base_url($car_id->myimage5)?>" class="im">
</div>
</div>
<button class="pp2 float-left" style="position:absolute;bottom:350px;left:10px;"><i class="fas fa-angle-left clr-gry"></i></button>
<button class="nn2 float-right" style="position:absolute;right:0;bottom:350px;right:10px;"><i class=" fas fa-angle-right clr-gry"></i></button>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll:1,
  prevArrow: $(".pp2"),
  nextArrow: $(".nn2")
});
  });
  
</script>
<div class="container">
  <div class="row my-5">
  <div class="col-md-9">
    <h3 class="font-weight-bold"><?=$car_id->title?></h3>
    <p class="lead"><?=$brand_name->name?></p>
    <div class="border text-center mt-4 ml-2" style="color:gray;height:120px;width:120px;display:inline-block">
    <i class="fa-solid fa-calendar-days mt-2" style="font-size:40px;"></i>
    <h4 class="text-dark"><?=$car_id->year?></h4>
    <code>Reg year</code>
    </div>
    <div class="border text-center mx-2" style="color:gray;height:120px;width:120px;display:inline-block">
    <i class="fa-solid fa-gears mt-2" style="font-size:40px;"></i>
    <h4 class="text-dark"><?=$car_id->fuel?></h4>
    <code>Fuel type</code>
    </div>
    <div class="border text-center" style="color:gray;height:120px;width:120px;display:inline-block">
    <i class="fa-solid fa-user-plus mt-2" style="font-size:40px;"></i>
    <h4 class="text-dark"><?=$car_id->seat?></h4>
    <code>Seats</code>
    </div>
    <div class="row mt-3">
    <div class="col-md-12">
          <table style="width:100%;" id="tbl">
          <tr>
            <td style="width:30%;background-color:#e84b2f;" class="text-white vehi">Vehicle Overview</td>
            <td style="background-color:lightgray;" class="acce">Accessories</td>
          </tr>
          </table>
          <div class="card">
            <div class="card-body">
              <span id="pill_change"></span>
              <table class="table table-bordered jquet">
                <tr>
                  <th colspan="2" class="font-weight-bold" style="background-color:lightgray;">ACCESSORIES</th>
                </tr> <!-- &#9989; found  &#10060; not found  -->
                <tr><td>Air Conditioner</td><td><?php echo (in_array("Air Conditioner",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Power Door Locks</td><td><?php echo (in_array("Power Door Locks",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Antilock Braking System</td><td><?php echo (in_array("Antilock Braking System",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Brake Assist</td><td><?php echo (in_array("Brake Assist",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Power Steering</td><td><?php echo (in_array("Power Steering",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Driver Airbag</td><td><?php echo (in_array("Driver Airbag",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Passenger Airbag</td><td><?php echo (in_array("Passenger Airbag",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Power Windows</td><td><?php echo (in_array("Power Windows",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>CD Player</td><td><?php echo (in_array("CD Player",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Central Locking</td><td><?php echo (in_array("Central Locking",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Crash Sensor</td><td><?php echo (in_array("Crash Sensor",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
                <tr><td>Leather Seats</td><td><?php echo (in_array("Leather Seats",$access_id)?"&#9989;":"&#10060;"); ?></td></tr>
              </table>
            </div>
          </div>
    
    </div>
  </div>
</div>
  <div class="col-md-3">
    <h3 class=" text-right font-weight-bold" style="color:#e84b2f;"><?=$car_id->price?>&#8377;</h3>
    <p class="text-right">Per day</p>
<ul class="list-group">
  <li class="list-group-item font-weight-bold bg-dark text-white">Share: &nbsp;<i class="fa-brands fa-square-facebook"></i>&nbsp;
  <i class="fa-brands fa-square-twitter"></i> &nbsp;<i class="fa-brands fa-linkedin"></i>&nbsp;
  <i class="fa-brands fa-square-google-plus"></i>
</li>
</ul>
<div class="card my-5">
<div class="card-body">
<h4 class="font-weight-bold"><i class="fa-solid fa-envelope" style="color:#e84b2f;"></i> Book Now</h4>
<form action="<?=base_url('home/book_vehicle')?>" method="post" autocomplete="off">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="From Date(dd/mm/yyyy)" id="from_date" name="from_date" required pattern="[0-9/]+" title="Please enter valid numbers and slashes">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="To Date(dd/mm/yyyy)" id="to_date" name="to_date" required pattern="[0-9/]+" title="Please enter valid numbers and slashes">
  </div>
  <input type="hidden" name="car_id" value="<?=$car_id->id?>" required>
  <div class="form-group">
  <textarea class="form-control" rows="5" id="comment" name="message" placeholder="Message" required></textarea>
</div>
 <?php
if($this->session->has_userdata('uid'))
{
  echo '<input type="submit" class="btn px-3 text-white" name="book_now" value="Book Now" style="background-color:#e84b2f;">';
}
else
{
  echo "<a href='#' class='jooo btn px-3 text-white' style='background-color:#e84b2f;'>Book Now</a>";
}
 ?>
<p id="erro" class="text-danger font-weight-bold"></p>
</form>
</div>
</div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
  $("#pill_change").text('<?=$car_id->overview?>');
  $(document).ready(function()
  {
    $(".vehi").click(function(){
      $(".jquet").hide();
      $("#pill_change").text('<?=$car_id->overview?>');
    });
     $(".acce").click(function(){
     
      $("#pill_change").text('');
      $(".jquet").show();
    });
    $(".jooo").click(function(){
$("#erro").html("Login to book a car...");
    });
  });
</script>

</body>
</html>