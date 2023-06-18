<div class="container-fluid bgc" style="color:white;background-image:url(<?=base_url('assets/images/car4.jpg')?>">
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>My Bookings</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> My bookings</p>
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
<h3 class="text-uppercase"><u>My Bookings</u></h3>
<div class="row my-4">
<?php
if(count($booking)>0)
{
foreach($booking as $b)
{
  ?>
  <div class="col-md-2"><img src="<?=base_url($b['myimage1'])?>" style="height:100%;width:100%;"></div>
  <div class="col-md-4"><h5 class="text-capitalize"><?=$b["name"]?>, <?=$b["title"]?></h5><p class="small">From date:<?=$b["from_date"]?><br>To date:<?=$b["to_date"]?>
  <br>Message:<?=$b["message"]?><p></div>
  <div class="col-md-4">
    <?php
    if($b["status"]=="Not Confirm yet")
    {
      echo "<button class='status_effect blink_me small btn btn-sm px-3 btn-outline-danger text-dark'>".$b['status']."</button>";
    }
    else
    {
      echo "<button class='status_effect small btn btn-sm px-3 btn-outline-success text-dark'>".$b['status']."</button>";
    }
    ?>
  </div>
  <div class="col-md-2"></div>
  <?php
}
}
?>
</div>
</div>
<?php
if(isset($message))
{
  echo $message;
}
?>
<script type="text/javascript">
$(document).ready(function(){
function blink()
{
$(".blink_me").fadeOut(600).fadeIn(600,blink);
}
blink();
$(".status_effect").hover(function(){
$(this).css({"background-color":"white"});
},function(){
  $(this).css({"background-color":"white"});
});
  });
</script>
</div>
</div>