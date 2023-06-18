<div class="container-fluid bgc" style="color:white;background-image:url(<?=base_url('assets/images/car4.jpg')?>">
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>Change Password</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> Update password</p>
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
<h3 class="text-uppercase"><u>Update Password</u></h3>
<form action="<?=base_url('home/updatePassword')?>" method="post" autocomplete="off">
  <div class="form-group">
    <label for="old_password">Old Password:</label>
    <input type="password" class="form-control" name="old_password" placeholder="Enter old password" id="old_password" required>
  </div>
  <div class="form-group">
    <label for="new_password">New Password:</label>
    <input type="password" class="form-control" name="new_password" placeholder="Enter new password" id="new_password" required>
  </div>
    <div class="form-group">
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" class="form-control" name="confirm_password" placeholder="Enter confirm password" id="confirm_password"  required>
  </div>  
  <input class="log_button" type="submit" name="submit" value="Update Password">
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