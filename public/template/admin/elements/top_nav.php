<!-- Navbar -->
<?php 
$avatar = DIR_UPLOAD . 'user/' . $_SESSION['login']['info']['picture'];
$name = $_SESSION['login']['info']['name'];

?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <?php echo $name ?>
            <img class="ava" src="<?php echo $avatar ?>" style="width:30px">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
         
         
          <a href="<?php echo URL::createLink('admin','login','logout') ?>" class="dropdown-item">
            Logout
          </a>
  
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->