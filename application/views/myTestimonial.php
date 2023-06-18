<div class="container-fluid bgc" style="color:white;background-image:url(<?=base_url('assets/images/car4.jpg')?>">
<div class="row">
<div class="col-md-12 text-center p-5">
    <h3>My Testimonial</h3>
    <p class="font-weight-bold">Home <i class="fa-solid fa-chevron-right" style="font-size:12px;"></i> My Testimonial</p>
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
<h3 class="text-uppercase mb-4"><u>My Testimonial</u></h3>
<!-- <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Id</th>
            <th>Message</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody> -->
<?php
$i=1;
foreach($data as $d)
{
  ?>
<!-- <tr>
  <td><?php echo $i; ?></td>
  <td><?=$d->message?></td>
  <td>
    <a href="testimonialEdit?id=<?=$d->id?>"><i class="fa-solid fa-pen-to-square text-primary"></i></a>
  </td>
<td>
<a href="testimonialDelete?id=<?=$d->id?>"><i class="fa-solid fa-trash text-danger"></i></a>
</td>
</tr> -->
<div class="my-4" style="border-bottom:1px solid gray;">
<p class="text-muted"><?=$d->message?></p>
<p><b>Posting Date : </b><span class="text-secondary"><?=$d->reading_time?></span></p>
<?php
if($d->status=="Waiting for approval")
{
  echo "<button class='btn btn-outline-danger btn-sm px-3 my-2 float-right mt-n5'>".$d->status."</button>";
}
else
{
  echo "<button class='btn btn-outline-success btn-sm px-3 my-2 float-right mt-n5'>".$d->status."</button>";
}
?>
</div>
  <?php
  //$i++;
}
?>
       
    <!-- </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function () {
    $('.display').DataTable();
});
</script> -->
</div>

</div>
</div>
