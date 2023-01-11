<?php
  $url = $_SERVER['PHP_SELF'];
?>

<ul>
  <li><a href="dashboard.php" class="<?php echo str_ends_with($url, '/capstone/dashboard.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-gauge fa-lg"></i></span><span>Dashboard</a></li>
  <li><a href="profile.php" class="<?php echo str_ends_with($url, '/capstone/profile.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-user fa-lg"></i></span><span>My Profile</a></li>
  <li><a href="settings.php" class="<?php echo str_ends_with($url, '/capstone/settings.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-gears fa-lg"></i></span><span>Settings</a></li>
  <li><a href="support.php" class="<?php echo str_ends_with($url, '/capstone/support.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-circle-question fa-lg"></i></span><span>Help & Support</a></li>
        
  <li><a href="logout.php" class="<?php echo str_ends_with($url, '/capstone/logout.php') ? 'active' : '' ?>"><span><i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i></span><span>Logout</span></a></li>      
</ul>