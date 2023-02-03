<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LM Tech Hub</title>
    <script type="text/javascript">
    function preventBack() { window.history.forward(); }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
    </script>
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
            <li><a href="register.php">REGISTER</a></li>
            <li class="active"><a href="sign.php">SIGN IN</a></li>
            
              
          </ul>
        </div>
        <i class="fa fa-bars-staggered" onclick="showMenu()"></i>
          
      </nav>
    </section>
    
    <section class="about">
      <form action="signpro.php" method="POST" class="form">
        <h1 class="text-center">Sign In</h1>
        <div class="input-group">
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="Your Email" required/> 
        </div>

        <div class="input-group">
          <label for="password">Password:</label>
          <input type="password" name="pword" placeholder="Your Password" required/>
        </div>

        <div class="butns-group">
          
          <a href="register.php" class="btn-outline">REGISTER</a>
          <button class="btn" type="submit" >LOGIN</button> 
        </div>
      </form>  
              
           
    </section>
    
      <!--Footer -->
      <?php
      include("footer.php");
      ?>