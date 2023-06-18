<style type="text/css">
    input[type=text]:focus
    {
       background-color:#FFFFC9;
       outline:none;
       box-shadow:none;
       border-color:black;
    }
 
</style>
<div class="container-fluid bgc" >
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>Contact Us</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> Contact us</p>
</div>
</div>
</div>
<div class="container-fluid p-5 bg-white">
<div class="row">
   <div class="col-md-6 col-sm-12">
    <h3 class="text-left font-weight-bold">Get in touch using the form below</h3>
  <?php
if(isset($message))
{
  echo $message;
}
  ?>
    <form action="<?=base_url('home/contact')?>" id="mycontactform" method="post" autocomplete="off">
  <div class="form-group">
    <label for="email">Full name:</label>
    <input type="text" class="form-control" name="cname" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Email Address:</label>
    <input type="email" class="form-control" id="pwd" name="cemail" required>
  </div>
  <div class="form-group">
    <label for="email">Phone Number:</label>
    <input type="text" class="form-control" id="email" name="cmobile" required>
  </div>
  <div class="form-group">
  <label for="comment">Message:</label>
  <textarea class="form-control" rows="5" id="comment" name="cmessage" style="resize:none;" required></textarea>
</div>
  <input type="submit" class="btn px-4 text-white" style="background-color:rgb(232,75,47);border-radius:0;" value="Send message" name="contact">
</form>
  </div>
  <div class="col-md-6 col-sm-12">
  <?php
  foreach($company as $c)
  {
  ?>
  <h3 class="text-left font-weight-bold">Contact info</h3>
  <p><i class="fa-solid fa-location-dot mt-3 border p-3 rounded-circle"></i>&nbsp;&nbsp; <?=$c->address?></p>
  <p><i class="fa-solid fa-phone border p-3 rounded-circle"></i>&nbsp;&nbsp; <?=$c->mobile?></p>
  <p><i class="fa-regular fa-envelope border p-3 rounded-circle"></i>&nbsp;&nbsp; <?=$c->email?></p>
<?php
  }
?>
  </div>
</div>
</div>
</div>
