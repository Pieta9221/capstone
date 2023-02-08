<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
if(!isset($_SESSION['email'])){
  header("location: ../../sign.php"); 
  }
  
  ?>
  <?php
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();
$pword = $row['pword'];
?>


    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
        <div class="card-header">
          <h2>Settings</h2>
        </div>
          <b>Change Password</b>
          <a href="#popup1"><button class="btn"><i class="fa-solid fa-lock"></i> Password</button></a> 
          <br/>
          <br/>
          <b>Change Theme</b>
          <a href="#"><button class="btn" onclick="toggleTheme()" ><i class="fa-solid fa-moon"></i> Switch Theme</button></a>  
                    
        </div>
      </div>
            
      
    </main>
     
   <div id="popup1" class="overlay">
      <div class="popup">
        <!-- <h2>Hey there!</h2> -->
        <a class="close" href="#">&times;</a>
        <div class="content">
          <div class="form-wrap">
            <h1>Update Password</h1>
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="pword1">Old Password</label>
                <input type="password" name="pword1" required/>
              </div>

              <div class="form-group">
                <label for="pword2">New Password</label>
                <input type="password" name="pword2" required/>
              </div>

              
            <button type="submit" class="update" name="update">CHANGE PASSWORD</button>
            </form>
         </div>
        </div> 
      </div>
    </div>
        
   
    

  <section class="copyright">
      <p class="copy">&copy; 2022 LM Tech Hub</p>
  </section>
  
  <script src="../.././js/theme.js"></script>
</body>
</html>


<?php 
if(isset($_POST['update'])){
  
  $pword1 = md5($_POST['pword1']);
  $pword2 = md5($_POST['pword2']);
  
  
  if($pword != $pword1){
    echo "<script> alert('Old password is incorrect') </script>";
    
  }else{      
  $edit = "UPDATE studentdata SET pword='$pword2'WHERE email='$email'";
  
  
  if($conn->query($edit) === TRUE ){
    echo "<script> alert('You have successfully changed your password') </script>";
    
     } else{  
    echo "<script> alert('Password not updated!') </script>";
   
    
  }
  }

 
}


  
?>