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
            <li><a href="about.php">ABOUT US</a></li>
            <li class="active"><a href="register.php">REGISTER</a></li>
            <li><a href="sign.php">SIGN IN</a></li>
            
              
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
              <label for="passport" class="required">Upload Your Passport</label>
              <input type="file" class="pass fill" name="passport" accept="image/*" required/>
              
            </div>
  
            <div class="input-group">
              <label for="fname" class="required">Full Name</label>
              <input type="text" name="fname" class="fill" placeholder="Input your full name" required/>
             
            </div>
  
            <div class="input-group">
              <label for="dob" class="required">Date of Birth</label>
              <input type="date" name="dob" class="fill" placeholder="Input your dob" required/>
           </div>
            
            <div class="input-group">
               <label for="gender" class="required">Gender</label>
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
              <label for="phone" class="required">Phone Number</label>
                <input type="tel" name="phone" class="fill" placeholder="Input your phone number" required/>
            </div>

            <div class="input-group">
              <label for="address" class="required">Address</label>
              <input type="text" class="fill" name="address" placeholder="Input your home address" required/>
            </div>

            <div class="input-group">
              <label for="state" class="required">State of Origin</label>
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
                
              <label for="course" class="required">Select Your Learning Track</label>
              
              <select type="select" id="course" name="course" class="sel fill" required> 
                <option value="nothing">Select Course</option>
                <option value="Product Design">Product Design</option>
                <option value="Front-end Web Development">Front-end Development</option>
                <option value="Back-end Web Development">Back-end Development</option>
                
              </select>  
            </div>
  
            <div class="input-group">
              <label for="bio" class="required">Tell us a bit about yourself and why you want to join the program</label>
              <textarea name="bio" id="bio" cols="120" rows="5" class="fill"  maxlength="1000" placeholder="1000 characters only" required></textarea>
            </div>
         
            
            <div class="butns-group">
              <a href="#" class="butn btn-prev">PREVIOUS</a>
              <a href="#" class="butn btn-next" name="next">NEXT</a>
            </div>
          </div>
  
          <div class="form-step">
           <div class="input-group">
              <label for="email" class="required">Email Address</label>  
              <input type="email" name="email" placeholder="Input your email address" required/>
              
            </div>
  
            <div class="input-group">
              <label for="pword" class="required">Password</label>
              <input type="password" class="fill" name="pword" placeholder="Create a password" required/>
            </div>
  
            <div class="input-group">
              <label for="pword2" class="required">Confirm Password</label>
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
      <?php
      include("footer.php");
      ?>