<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<div class="container-fluid bgc2" >
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>Signup Form</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> Signup</p>
</div>
</div>
</div>
<script>

</script>
<div class="container p-5">
<h3 class="text-center font-weight-bold">Signup Form</h3>
<?php
if(isset($success))
{
  echo $success;
}
if(isset($message))
{
  echo $message;
}
?>
<form action="" method="post" autocomplete="off" name="myform" required>
  <div class="form-group">
    <label for="email" id="one">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="email" name="name" required>
    <span class="text-danger" id="nameErr"></span>
  </div>
  <div class="form-group">
    <label for="">Mobile number:</label>
    <input type="number" class="form-control" placeholder="Enter mobile" id="" name="mobile" required>
    <span class="text-danger" id="mobileErr"></span>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
    <span class="text-danger" id="emailErr"><?php if(isset($error)) { echo $error; }?></span>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required>
    <span class="text-danger" id="passwordErr"></span>
  </div>
  <div class="form-group">
    <label for="email">Confirm Password:</label>
    <input type="password" class="form-control" placeholder="Enter confirm Password" id="cp" name="confirmpassword" required>
    <span class="text-danger" id="cpErr"><?php if(isset($error2)) { echo $error2; }?></span>
  </div>
  <input type="checkbox" name="checkbox" required> I agree with <span style="color:Fuchsia;"> Terms and Conditions</span>
  <br>
  <input type="submit" class="btn btn-primary mt-2 px-4" name="signup" value="signup">
</form>
</div>
</body>
</html>