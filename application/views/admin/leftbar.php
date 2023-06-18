<ul class="nav bg-secondary flex-column ram" style="height:152vh;">
 <span class="navbar-text ml-2 text-dark bg-secondary">
    MAIN
</span>
  <li class="nav-item">
    <a class="nav-link text-white" href="<?=base_url('admin/dashboard')?>"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
  </li>
  <li class="nav-item dropd">
    <a class="nav-link text-white" href="#"><i class="fa-sharp fa-solid fa-file"></i>&nbsp;&nbsp;&nbsp;Brands<i class="fa fa-caret-down float-right"></i></a>
  </li>
<div class="dropdown_list">
  <li class="nav-item bg-danger">
    <a class="nav-link text-white" href="<?=base_url('admin/addBrand')?>"><i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;&nbsp;Add Brands</a>
  </li>
  <li class="nav-item bg-danger">
    <a class="nav-link text-white" href="<?=base_url('admin/manageBrand')?>"><i class="fa-solid fa-list-check"></i>&nbsp;&nbsp;&nbsp;Manage Brands</a>
  </li>
</div>
<li class="nav-item dropd2">
    <a class="nav-link text-white" href="#"><i class="fa-sharp fa-solid fa-car"></i>&nbsp;&nbsp;&nbsp;Vehicle<i class="fa fa-caret-down float-right"></i></a>
  </li>
<div class="dropdown_list2" style="display:none;">
  <li class="nav-item bg-danger">
    <a class="nav-link text-white" href="<?=base_url('admin/addVehicle')?>"><i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;&nbsp;Post a Vehicle</a>
  </li>
  <li class="nav-item bg-danger">
    <a class="nav-link text-white" href="<?=base_url('admin/manageVehicle')?>"><i class="fa-solid fa-list-check"></i>&nbsp;&nbsp;&nbsp;Manage Vehicles</a>
  </li>
</div>
  <li class="nav-item">
    <a class="nav-link text-white" href="<?=base_url('admin/manageBooking')?>"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;Manage booking</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="<?=base_url('admin/manageTestimonial')?>"><i class="fa-sharp fa-regular fa-calendar-days"></i>&nbsp;&nbsp;&nbsp;Manage Testimonials</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="<?=base_url('admin/manageContactUs')?>"><i class="fa-solid fa-desktop"></i>&nbsp;&nbsp;&nbsp;Manage Contact us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="<?=base_url('admin/Regusers')?>"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;Reg users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-file-contract"></i>&nbsp;&nbsp;&nbsp;Manage Pages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="<?=base_url('admin/update_contactinfo')?>"><i class="fa-solid fa-address-book"></i>&nbsp;&nbsp;&nbsp;Update Contact Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="<?=base_url('admin/manageSubscriber')?>"><i class="fa-solid fa-users-rectangle"></i>&nbsp;&nbsp;&nbsp;Manage Subscriber</a>
  </li>
</ul>
<script type="text/javascript">
$(document).ready(function(){
$(".dropd").click(function(){
$(".dropdown_list").slideToggle();
});
$(".dropd2").click(function(){
$(".dropdown_list2").slideToggle();
});
});
</script>