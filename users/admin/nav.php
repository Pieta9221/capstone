<?php
  $url = $_SERVER['PHP_SELF'];
?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="stylesheet" href="../.././css/dashboard.css">
   <link rel="stylesheet" href="../.././css/carousel.css">
   <link rel="stylesheet" href="../.././css/form.css">
   <link rel="icon" href="../inc/favicon.png">   
   <link href="https:fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
      
  </head>
<body>
  <input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <img src="../inc/logo.png" alt="logo">     
      <h2>LM TECH HUB</h2>
    </div>
    
    <div class="sidebar-menu">
      <ul>
        <br>
        <li><a href="dashboard.php?" class="<?php echo str_ends_with($url, '/admin/dashboard.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-gauge fa-lg"></i></span><span>Dashboard</a></li>
        <li><a href="profile.php" class="<?php echo str_ends_with($url, '/admin/profile.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-user fa-lg"></i></span><span>My Profile</a></li>
        <li><a href="settings.php" class="<?php echo str_ends_with($url, '/admin/settings.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-gears fa-lg"></i></span><span>Settings</a></li>
        <li><a href="support.php" class="<?php echo str_ends_with($url, '/admin/support.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-circle-question fa-lg"></i></span><span>Help & Support</a></li>
       <li><a href="logout.php" class="<?php echo str_ends_with($url, '/admin/logout.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i></span><span>Logout</span></a></li>      
      </ul>
      </div>
  </div>

  <div class="main-content">
    <header>
      <h2>
          <label for="nav-toggle"><i class="fa fa-bars"></i></label>
          Dashboard
       </h2>
      
      <div class="search-wrapper">
        <i class="fa-solid fa-magnifying-glass fa-lg"></i>
        <form action="search.php" method="POST">
          <input type="search" name="fname" id="" placeholder="Search student">
          
        </form>
      </div> 

      <div class="user-wrapper">
        <?php echo "<img src = ".'../'.$row['passport']." width='60px' height='60px' />"; ?> 
      <div>
          <h3><?php echo $row['fname']; ?></h3>
          <small>Admin</small>
        </div>
      </div>
    </header>  