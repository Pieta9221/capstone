<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
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
          <li class="active"><a href="about.php">ABOUT US</a></li>
          <li ><a href="register.php">REGISTER</a></li>
          <li><a href="sign.php">SIGN IN</a></li>
          
            
        </ul>
      </div>
      <i class="fa fa-bars-staggered" onclick="showMenu()"></i>
        
    </nav>

   

   </section>
   <!--About us -->
   <section class="about">
       
    <div class="row" >
      <div class="about-col">          
        <h2>About Us</h2> 
        <p>
          LM Tech Hub is a learning environment based in Awka, Anambra State, Nigeria. We provide technological training skills to passionate and exceptional young people who are eager to exploit the digital realm and realise their dream of becoming talented software developers. The programme will benefit candidates with demonstrable knowledge in Information Technology who are committed in exceling in this field of endeavour. At the end of the program, these accomplished youths will secure full time roles as software engineers. LM Tech Hub initiative to develop talented well-rounded youths while narrowing youth unemployment is accomplished through the collaboration of Advisors, Trainers, Mentors, Volunteers and Partners.</p> 
        
      </div>

      <div class="about-col">
        <img src="images/g1.jpg">
       </div>
    </div>

  </section>

  <section class="journey">
    
      <div class="row">
        
        <div class="journey-col">
          <h3>1. Our Vision </h3>
          <p>To build a community of young, trained savvy tech engineers, that are employable and willing to share their knowledge to help others in the community.
            .</p>
        </div>
      

        <div class="journey-col">
          <h3>2. Our Mission</h3>
          <p>To contribute to this change through learning and development.</p>
        </div>
      
        <div class="journey-col">
          <h3>3. Our Values</h3>
          <p>We value:Hard work, Integrity, Creativity, Collaboration, Kindness and Willingness to help others.</p>
        </div>
      </div>

           
  </section>

   

 
   
    <!--Team Members -->
  <section class="team">
   <h1>Meet Our Team</h1>
     <div class="row">
     <div class="team-col">
       <img src="images/dilibe.png">
       <h3>Mr. Dilibe Chinweze</h3>
       <h4>Founder</h4>
       </div>  
    
       <div class="team-col">
        <img src="images/osy.png">
        <h3>Mrs. Ngozi Osy-Agbata</h3>
        <h4>Director</h4>
        </div>

     <div class="team-col">
       <img src="images/vin.png">
       <h3>Mr. Vincent Obiorah</h3>
       <h4>Tutor</h4>
       </div> 

     <div class="team-col">
       <img src="images/rita.png">
       <h3>Miss Rita Nweke</h3>
       <h4>Supervisor</h4>
       </div> 
     </div>
   </div>
  </section>

    
  <!--Footer -->
  <?php
      include("footer.php");
      ?>