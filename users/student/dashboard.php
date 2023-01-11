<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
  
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="stylesheet" href="dashboard.css">
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
        <img src="../inc/img5.png" width="60px" height="60px" alt="">
        <div>
          <h3>Monsieur Abraham</h3>
          <small>Student</small>
        </div>
      </div>
    </header>

    <main>
      <div class="recent-grid">
        <div class="card">
          <h3>Welcome back,</h3>
          <h2>Monsieur Abraham</h2>
          <p>Trust you have achieved up to 70% of your daily goals</p>
        </div>

        <div class="card">
          <div><h3>Our Core Values</h3></div>
          <div></div>
        </div>
      </div>

      <div class="cards">
        <a href="">
          <div class="card-single">
            <div>
              <h1>Take Quiz</h1>
              <span>Start quiz to test your knowledge</span>
            </div>
            <div><i class="fa-solid fa-list-check fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Quiz Score</h1>
              <span>Check your quiz score</span>
            </div>
            <div><i class="fa-solid fa-file-circle-check fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Make Payment</h1>
              <span>Pay to accept admission</span>
            </div>
            <div><i class="fa-solid fa-credit-card fa-3x"></i></div>
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
              <h1>Track Course</h1>
              <span>Check course progress, assignments, project etc.</span>
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
</body>
</html>