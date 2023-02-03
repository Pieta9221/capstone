<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

if(isset($_POST['update'])){
  
  $fname = $_POST['fname'];
  $role = $_POST['role'];
  $phone = $_POST['phone'];
  
      
  $edit = "UPDATE admindata SET fname='$fname', role='$role',phone = '$phone' WHERE email='$email'";
  
  $result = $conn->query($edit);

  if($result === TRUE ){
    echo "Data updated";
    header("location:profile.php");
  } else{  
    echo "Data not updated";
  }
}

if(isset($_POST['update1'])){
  
  $photoname =$_FILES['passport']['name']; 
  $phototype = $_FILES['passport']['type'];
  $photosize = $_FILES['passport']['size'];
  $photoloc = $_FILES['passport']['tmp_name']; 
  move_uploaded_file($photoloc,"../pic/".$photoname);
  $filepath = "pic/".$photoname; 
    
  $check = explode(".",$photoname);
  $checkpath = strtolower(end($check));
  $arraytype = array("jpeg", "gif", "png", "jpg");
    if(in_array($checkpath, $arraytype) === FALSE){
      echo "Please choose a valid file type like jpeg, gif, png, or jpg"; 
    }elseif($photosize > 5120000){
        echo "Photo size should not be more than 5MB "; 
    } else{
  
      $edit = "UPDATE admindata SET passport= '$filepath' WHERE email='$email'";
  
      $result = $conn->query($edit);

      if($result === TRUE ){
        echo "Data updated";
        header("location:profile.php");
      } else{  
        echo "Data not updated";
      }
    }  
}
?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="recent">
        <div>
          <div class="user-wrapper">
            <div>
              <?php echo "<img src = ".'../'.$row['passport']." width='100px' height='100px' />"; ?> 
              <div><a href="#popup2"><i class="fa-solid fa-pen"></i></a></div>
            </div>
           <div>
              <h2><?php echo $row['fname']; ?></h2>
              <p>Tutor</p>
            </div>
          </div>
          <br>
          
          <div>
            <p>COURSE INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-solid fa-ticket"></i> Staff ID:</td>
                <td><?php echo $row['staffid'];?></td>
              </tr>
              <tr>
                <td><i class="fa-solid fa-user-tie"></i> Role:</td>
                <td><?php echo $row['role'];?></td>
              </tr>
             
            </table>
            <br>
            

            <p>CONTACT INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-solid fa-phone"></i> Phone:</td>
                <td><?php echo $row['phone'];?></td>
              </tr>
              
              <tr>
                <td><i class="fa-regular fa-envelope"></i> Email:</td>
                <td><?php echo $row['email'];?></td>
              </tr>

              
            
            </table>
            <br>
            <a href="#popup1"><button class="btn"><i class="fa-solid fa-pen"></i> Update</button></a>
          </div>
          
            
        </div>
              
      </div>  
  
    </main>
  <div id="popup1" class="overlay">
      <div class="popup">
        <!-- <h2>Hey there!</h2> -->
        <a class="close" href="#">&times;</a>
        <div class="content">
          <div class="form-wrap">
            <h1>Update Profile</h1>
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="fname">Full Name</label>
                <input type="text" name="fname" value="<?php echo $row['fname']; ?>" required/>
              </div>

              <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" value="<?php echo $row['role']; ?>" required/>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required/>
              </div>

              
              <button type="submit" class="update" name="update">UPDATE</button>
              
            </form>
          </div>
        
         </div>
      </div>
   </div>

   <div id="popup2" class="overlay">
      <div class="popup">
        
        <a class="close" href="#">&times;</a>
        <div class="content">
          <div class="form-wrap">
            <h1>Update Passport</h1>
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="fname">Passport</label>
                <input type="file" name="passport" required/>
              </div>
                            
              <button type="submit" class="update" name="update1">UPDATE</button>
              
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