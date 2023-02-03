<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LM Tech Hub</title>

   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./images/favicon.png">   
   <link href="https:fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
      
  </head>
 <body>
   <section class="header">
     <nav>
       <a href="index.php"><img src="images/logo.png"/></a>
       <div class="nav-links" id="nav-links">
        <i class="fa fa-times-circle fa-lg" onclick="hideMenu()"></i>
          <ul>
           <li class="active"><a href="index.php">HOME</a></li>
           <li><a href="about.php">ABOUT US</a></li>
           <li><a href="register.php">REGISTER</a></li>
           <li><a href="sign.php">SIGN IN</a></li>
           
            
         </ul>
       </div>
       <i class="fa fa-bars-staggered fa-lg" onclick="showMenu()"></i>
        
     </nav>

   <div class="text-box">
     <h1 class="dynamic-txt">Anybody can code!</h1>
     <p>Making website is now one of the easiest thing in the world. Our seasoned tutors will train<br/>scholars from beginner to pro level. No prior knowledge is required.</p>
     <a href="register.html" class="btn">START YOUR JOURNEY</a>
   </div>  

   </section>
   <!--Course -->
   <section class="course">
     <h1>Courses We Offer</h1>
     <p>Select a course from our list of courses</p>
   
     <div class="row" >
      <div class="course-col">
        <h3>Product Design</h3>
      </br>
        <img src="images/img11.png">
        <p>This module demonstrates all stages of the UI/UX development process, from user research to defining information architecture, to developing sitemaps and wireframes. Students are taught current best practices and conventions in UX design based experiences for websites or apps.</p>
      </div>

       <div class="course-col">
         <h3>Front-End Web Development</h3>
         <img src="images/img8.png">
         <p>This module introduces students to the core web deveopment technologies like HTML and CSS and prepares them to practice using them. You will also be introduced to modern UI frameworks such as Bootstrap and React that makes it easy to create interactive user experience. </p>
       </div>

       <div class="course-col">
         <h3>Back-End Web Development</h3>
         <img src="images/img9.png">
         <p>This module exposes students to backend topics such as: handling user input, producing templated output, storing information in databases and data stores, and building systems with secure user accounts.</p>
       </div>

       <div class="course-col">
         <h3>Non-Technical </br>Module</h3>
         <img src="images/img10.png">
         <p>This bonus module equips students with soft skills such as communication skills, teamwork and problem-solving abilities, </br> Non-technical skills are additional resource skills that complement the technical skills and contribute to effective performance in a workplace.</p>
       </div> 
     </div> 
   </section>

 
   
    <!--Facilities -->
  <section class="facilities">
   <h1>Our Facilities</h1>
     <div class="row">
     <div class="facilities-col">
       <img src="images/img2.jpg">
       <h3>Fully Equipped Lecture Rooms</h3>
       </div>  
    
     <div class="facilities-col">
       <img src="images/img3.jpg">
       <h3>Steady Power Supply</h3>
       </div> 

     <div class="facilities-col">
       <img src="images/img4.jpg">
       <h3>Recreational Room</h3>
       </div> 
     </div>
   </div>
  </section>

  <!--Testimonials -->
  <section class="testimonials">
   <h1>What Our Students Say</h1>
   <div class="row">
     <div class="testimonial-col">
       <img src="images/img6.png">
       <div>
         <p>Being a novice in tech, it was amazing to discover that the courses were beginner friendly. The tutors were highly trained and delivered above expectation.</p>
         <h3>Mercy Nwaodu</h3> 
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa-regular fa-star"></i>
       </div>  
    </div>

    <div class="testimonial-col">
     <img src="images/img5.png">
     <div>
       <p>LM Tech Hub is more than a training center, not only did they get me started in technology, they also gave me a community. </p>
       <h3>Joel Aniche</h3>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa-solid fa-star-half-stroke"></i>
     </div>  
         
  </section>

   
  <!--Call to Action -->
  <div class="text">
    <h1>Join our community, become a developer</h1> 
    <p>Study and collaborate with individuals from diverse backgrounds </p></br>
    <a href="register.html" class="btn">APPLY NOW</a>
  </div> 

  <br/>
     
  <!--Footer -->
  <?php
      include("footer.php");
      ?>