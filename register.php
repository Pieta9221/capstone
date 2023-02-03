<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LM Tech Hub</title>

   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="images/favicon.png">   
   <link href="https:fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            
  </head>
  <body>
    <section class="head">
      <nav>
        <a href="index.php"><img src="images/logo.png"/></a>
        <div class="nav-links" id="nav-links">
          <i class="fa fa-times-circle" onclick="hideMenu()"></i>
            <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li class="active"><a href="register.php">REGISTER</a></li>
            <li><a href="sign.php">SIGN IN</a></li>
            
              
          </ul>
        </div>
        <i class="fa fa-bars-staggered" onclick="showMenu()"></i>
          
      </nav>

      <section class="journey">
        <h1>Registration Process</h1>
          <div class="row">
            
            <div class="journey-col">
              <h3>1. Apply Online</h3>
              <p>Begin the application process by completing the application form online to create a profile.</p>
            </div>
          
  
            <div class="journey-col">
              <h3>2. Take Quiz</h3>
              <p>Login to your dashboard to test your knowledge. Successful candidates will proceed to the next phase.</p>
            </div>
          
            <div class="journey-col">
              <h3>3. Start Program</h3>
              <p>Once admitted, your learning phase begins. Track your progress via your dashboard.</p>
            </div>
          </div>
  
          <a href="form.php" class="btn" >REGISTER</a></br></br>
          <a href="sign.php" class="but">REGISTERED? LOGIN</a>
         
      </section>
    
      <!--Footer -->
      <?php
      include("footer.php");
      ?>