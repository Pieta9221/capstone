<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$query  = "SELECT * FROM admindata";
$result = $conn->query($query);
$row = $result -> fetch_array()
  
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="stylesheet" href="../inc/dashboard.css">
   <link rel="stylesheet" href="../inc/carousel.css">
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
    <?php 
      include('nav.php');
    ?>
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
        <input type="search" name="" id="" placeholder="Search here">
      </div> 

      <div class="user-wrapper">
        <?php echo "<img src = ".'../'.$row['passport']." width='60px' height='60px' />"; ?> 
      <div>
          <h3><?php echo $row['fname']; ?></h3>
          <small>Admin</small>
        </div>
      </div>
    </header>

    <main>
      <div class="recent-grid">
        <div class="card">
          <h3>Welcome back,</h3>
          <h2><?php echo $row['fname']; ?></h2>
          <p>Trust you have achieved up to 70% of your daily goals</p>
        </div>

        <div class="card slideshow-container fade">
         
          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>FOCUS</p>
            <p>"It is during our darkest moments that we must focus to see the light"</p>
            <em><small>-Aristotle Onassis</small></em>
            </div>
          </div>
          
          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>PASSION</p>
            <p>"Greatness comes from living with purpose and passion."</p>
            <em><small>-Ralph Martson</small></em>
            </div>
          </div>

          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>COMMUNITY</p>
            <p>"Alone, we can do so little; together, we can do so much."</p>
            <em><small>-Helen Keller</small></em>
            </div>
          </div>

          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>OPPORTUNITY</p>
            <p>"In the middle of difficulty lies opportunity."</p>
            <em><small>-Albert Einstein</small></em>
            </div>
          </div>
         
        </div>

        
      </div>

      <div class="cards">
        <a href="">
          <div class="card-single">
            <div>
              <h1>Students</h1>
              <span>List of all students admitted</span>
            </div>
            <div><i class="fa-solid fa-graduation-cap fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Tutors</h1>
              <span>List of all tutors in the hub</span>
            </div>
            <div><i class="fa-solid fa-person-chalkboard fa-3x"></i></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Attendance</h1>
              <span>Track students' attendance </span>
            </div>
            <div><i class="fa-regular fa-rectangle-list fa-3x"></i></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>View Schedule</h1>
              <span>Keep track of the program for each day</span>
            </div>
            <div><i class="fa-solid fa-calendar-days fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Grade</h1>
              <span>Track students' performance</span>
            </div>
            <div><i class="fa-solid fa-spinner fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Read Mail</h1>
              <span>Stay up to date with important information</span>
            </div>
            <div><i class="fa-solid fa-envelope fa-3x"></i></div>
          </div>
        </a>  
               
      </div>
     
    </main>
  </div>

  <section class="copyright">
      <p class="copy">&copy 2022 LM Tech Hub</p>
  </section>  

  <script src="../inc/carousel.js"></script>
</body>
</html>