<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);

$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();
if(isset($_POST['update'])){
  
  $email = $_SESSION['email'];
  $fname = $_POST['fname'];
  $dob = $_POST['dob'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  
      
  $edit = "UPDATE studentdata SET fname='$fname', address= '$address', phone = '$phone', dob = '$dob' WHERE email='$email'";
  
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
  
      $edit = "UPDATE studentdata SET passport= '$filepath' WHERE email='$email'";
  
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
              <p>Student</p>
            </div>
          </div>
          <br>
          
          <div>
            <p>COURSE INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-solid fa-ticket"></i> Reg No.:</td>
                <td><?php echo $row['regnum'];?></td>
              </tr>
              <tr>
                <td><i class="fa-solid fa-book"></i> Course:</td>
                <td><?php echo $row['course'];?></td>
              </tr>
             
            </table>
            <br>
            <p>BASIC INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-regular fa-user"></i> Gender:</td>
                <td><?php echo $row['gender'];?></td>
              </tr>
              <tr>
                <td><i class="fa-regular fa-calendar"></i> Date of Birth:</td>
                <td><?php echo $row['dob'];?></td>
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

              <tr>
                <td><i class="fa-solid fa-location-dot"></i> Address:</td>
                <td><?php echo $row['address'];?></td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-earth"></i> State:</td>
                <td><?php echo $row['state'];?></td>
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
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" value="<?php echo $row['dob']; ?>" required/>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required/>
              </div>

              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>" required/>
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
  

</body>
</html>


