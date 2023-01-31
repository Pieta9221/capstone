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
        <a href="index.html"><img src="images/logo.png"/></a>
        <div class="nav-links" id="nav-links">
          <i class="fa fa-times-circle" onclick="hideMenu()"></i>
            <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li class="active"><a href="register.html">REGISTER</a></li>
            <li><a href="sign.html">SIGN IN</a></li>
            
              
          </ul>
        </div>
        <i class="fa fa-bars-staggered" onclick="showMenu()"></i>
          
      </nav>
      <div class="null" ></div>

      
      <section>
        <form action="formpro.php" id= "form" method="POST" enctype="multipart/form-data" class="form">
          <h1 class="text-center">Registration Form</h1>
          <!-- Progress bar -->
          <div class="progressbar">
            <div class="progress" id="progress"></div>
            
            <div
              class="progress-step progress-step-active"
              data-title="Biodata"
            ></div>
            <div class="progress-step" data-title="Contact"></div>
            <div class="progress-step" data-title="Course"></div>
            <div class="progress-step" data-title="Login"></div>
          </div>
    
          <!-- Steps -->
          <div class="form-step form-step-active">
            <div class="input-group">
              <label for="passport">Upload Your Passport</label>
              <input type="file" class="pass fill" name="passport" accept="image/*" required/>
              
            </div>
  
            <div class="input-group">
              <label for="fname">Full Name</label>
              <input type="text" name="fname" class="fill" placeholder="Input your full name" required/>
             
            </div>
  
            <div class="input-group">
              <label for="dob">Date of Birth</label>
              <input type="date" name="dob" class="fill" placeholder="Input your dob" required/>
           </div>
            
            <div class="input-group">
               <label for="gender">Gender</label>
                <select type="select" id="gender" name="gender" class="sel fill" required> 
                  <option value="nothing">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select> 
            </div>

            
            <div class="butns-group">
              <a href="register.html" class="butn">BACK</a>
              <a href="#" class="butn btn-next" name="next">NEXT</a>
            </div>
          </div>
          
          
          <div class="form-step">
            <div class="input-group">
              <label for="phone">Phone Number</label>
                <input type="tel" name="phone" class="fill" placeholder="Input your phone number" required/>
            </div>

            <div class="input-group">
              <label for="address">Address</label>
              <input type="text" class="fill" name="address" placeholder="Input your home address" required/>
            </div>

            <div class="input-group">
              <label for="state">State of Origin</label>
              <select type="select" id="state" name="state" class="sel fill"> 
                  <option value="nothing">Select State</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="Akwa Ibom">Akwa Ibom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamfara</option>
               </select>
            </div>
          
              <div class="butns-group">
                <a href="#" class="butn btn-prev">PREVIOUS</a>
                <a href="#" class="butn btn-next" name="next">NEXT</a>
              </div>
              
          </div>
  
          <div class="form-step">
            <div class="input-group">
                
              <label for="course">Select Your Learning Track</label>
              
              <select type="select" id="course" name="course" class="sel fill" required> 
                <option value="nothing">Select Course</option>
                <option value="Product Design">Product Design</option>
                <option value="Front-end Web Development">Front-end Development</option>
                <option value="Back-end Web Development">Back-end Development</option>
                
              </select>  
            </div>
  
            <div class="input-group">
              <label for="bio">Tell us a bit about yourself and why you want to join the program</label>
              <textarea name="bio" id="bio" cols="120" rows="5" class="fill"  maxlength="1000" placeholder="1000 characters only" required></textarea>
            </div>
         
            
            <div class="butns-group">
              <a href="#" class="butn btn-prev">PREVIOUS</a>
              <a href="#" class="butn btn-next" name="next">NEXT</a>
            </div>
          </div>
  
          <div class="form-step">
           <div class="input-group">
              <label for="email">Email Address</label>  
              <input type="email" name="email" placeholder="Input your email address" required/>
              
            </div>
  
            <div class="input-group">
              <label for="pword">Password</label>
              <input type="password" class="fill" name="pword" placeholder="Create a password" required/>
            </div>
  
            <div class="input-group">
              <label for="pword2">Confirm Password</label>
              <input type="password" class="fill" name="pword2" placeholder="Retype your password" required/>
            </div>
  
  
            <div class="butns-group">
              <a href="#" class="butn btn-prev">PREVIOUS</a>
              <button type="submit" name="next" class="butn">SUBMIT</button>
              
            </div>
          </div>
          
  
        </form>

      </section>
      
      <div class="null" ></div>
      <!--Footer -->
      <section class="footer">
        <div class="row">
          <div class="footer-col">
              <h3 >About us</h3>
              <p>We are a community focused on empowering youths with technical and soft skills. It is a 6-month training program with an emphasis on front-end and back-end web development.We provide a platform for students to cultivate new ideas, collaborate and create innovative solutions for Nigeria and the world at large. </p>
              
          </div>   
            
          <div class="footer-col">
              <h3>Connect with us</h3>
              <p><i class="fa-solid fa-phone"></i>&nbsp; +234 803 315 0441</p>
              <p><i class="fa-solid fa-location-dot"></i>&nbsp; &nbsp;105 Zik Avenue, Awka, Anambra State, Nigeria</p>
              <p><i class="fa-regular fa-envelope"></i> &nbsp; info@lmtechub.org</p>
              <h3>Follow us on our social media platforms</h3>
              <div class="icons"> 
                <a href="https://www.facebook.com/lmtechub/" target="_blank"><i class="fa-brands fa-facebook fa-lg"></i></a>
                <a href="https://www.youtube.com/channel/UCaN0wLt_rbbCGlAOsDiY1_A" target="_blank"><i class="fa-brands fa-youtube fa-lg"></i></a>
                <a href="https://www.linkedin.com/company/lm-tech-hub/" target="_blank"><i class="fa-brands fa-linkedin fa-lg"></i></a>
              </div> 
          </div> 
        
        <div class="footer-col">
                <h3>How can we help you?</h3>
                <form action="">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" required>
                  <label for="email">E-mail</label>
                  <input type="email" id="name" name="email" required>
        
                  <label for="message">Message</label>
                  
                  <textarea name="message" id="message" cols="10" rows="3"></textarea>
        
                  <input type="submit" class="submit" value="SEND MESSAGE">
                </form>            
            </div>
          </div>
        
      </div>
          
    </section>
   

      <!--Copyright-->
      <section class="copyright">
          <p class="copy">&copy 2022 LM Tech Hub</p>
          <a href="#" class="back-home top"><i class="fa fa-arrow-circle-o-up fa-lg"></i></a>

      </section>

    <!--Site JS-->
    <script src="./js/main.js"></script>
    <script src="./js/multi.js"></script>
              
  </body>
</html>