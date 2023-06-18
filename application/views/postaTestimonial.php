<div class="container-fluid bgc" style="color:white;background-image:url(<?=base_url('assets/images/car4.jpg')?>">
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>Post a Testimonial</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> Post a testimonial</p>
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
<h3 class="text-uppercase"><u>Post a Testimonial</u></h3>
<form action="" method="post">
<div class="form-group">
  <label for="comment" class="font-weight-bold">Testimonial:</label>
  <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
</div>
<input type="submit" name="submit" class="log_button font-weight-bold" value="save">
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