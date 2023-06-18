<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Car rental Portal | Admin Panel</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar" style="position:absolute;right:0px;">
    <ul class="navbar-nav">
    <li class="nav-item dropdown bg-danger pr-2">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
      <img src="<?=base_url('assets/images/s3.jfif')?>" height="40" width="40" style="border-radius:20px;">  
      Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="<?=base_url('admin/logout')?>">Logout</a>
      </div>
    </li>
    </ul>
  </div>
</nav>