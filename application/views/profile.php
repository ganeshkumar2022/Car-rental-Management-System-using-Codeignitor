<div class="container-fluid bgc" style="color:white;background-image:url(<?=base_url('assets/images/car4.jpg')?>">
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>Your Profile</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> Profile</p>
</div>
</div>
</div>
<div class="container p-5">
<div class="row">
<div class="col-md-4" style="border-right:2px solid lightgray;height:200px;">
<?php
include('leftbar.php');
?>
</div>
<div class="col-md-8">
<h3 class="text-uppercase"><u>General settings</u></h3>
<label>Reg date - <?=$user->reg_date?></label>

<form action="" method="post" autocomplete="off">
  <div class="form-group">
    <label for="email">Full name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" id="email" value="<?=$user->name?>" required>
  </div>
  <div class="form-group">
    <label for="pwd">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="pwd" value="<?=$user->email?>" required>
  </div>
    <div class="form-group">
    <label for="email">Phone number:</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter phone number" id="email" value="<?=$user->mobile?>" required>
  </div>
  <div class="form-group">
    <label for="pwd">Date of birth:</label>
    <input type="date" class="form-control" name="dob" value="<?=$user->dob?>" placeholder="Enter date of birth" id="pwd" required>
  </div>
  <div class="form-group">
  <label for="comment">Address:</label>
  <textarea class="form-control" rows="5" id="comment" name="address" placeholder="Enter your address" required>
  <?=$user->address?>
  </textarea>
</div>
  <div class="form-group">
    <label for="pwd">Country:</label>
    <input type="text" class="form-control" name="country" value="<?=$user->country?>" placeholder="Enter country" id="pwd" required>
  </div>
    <div class="form-group">
    <label for="pwd">City:</label>
    <input type="text" class="form-control" name="city" placeholder="Enter city" value="<?=$user->city?>" id="pwd" required>
  </div>
  
  <input class="log_button" type="submit" name="submit" value="Update Changes">
</form>

</div>
<?php
if(isset($message))
{
  echo $message;
}
?>
</div>
</div>