<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

if(isset($_POST['add'])){
  
  $fname = $_POST['fname'];
  $emaildata = $_POST['email'];
  $status = $_POST['status'];
  $role = $_POST['role'];
  $pword = $_POST['pword'];
  $pic = "pic/profile.png";
  $pword3 = md5($pword);
        
  $query2 = "SELECT * FROM admindata WHERE email = '$emaildata'";
  $res = $conn->query($query2);

  if ($res->num_rows>0){
    echo "$fname data already exists";
  }
  else{
  $insert = "INSERT INTO admindata (fname, email, status, role, passport, pword) values ('$fname', '$emaildata', '$status', '$role', '$pic', '$pword3')";

  if($conn->query($insert)===TRUE){
   echo "$fname successfully added";
  }else{
    echo "Ooops! Problem with registration, try again";
  }
  }
}

$query2  = "SELECT * FROM admindata ORDER BY fname ASC";
  $result2 = $conn->query($query2);
  if($result2->num_rows == 0){
    echo "Data not found";
  } else{  
  
   ?> 
<?php 


  
?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
        <a href="#popup1"><button class="btn"> <i class="fa-solid fa-plus"></i> Add Admin</button></a>
       <div class="card-header">
          <h2>All Staff</h2>
        </div>
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Passport</td>
                <td>Name</td>
                <td>Staff ID</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>View</td>
                <td>Edit</td>
                <td>Delete</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result2 -> fetch_array()){
                echo "<tr>";
                echo "<td>". "<img src = ".'../'.$row['passport']." class = 'pic'/>"."</td>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['staffnum']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>". '<a href="../inc/adminprofile.php?id='.$row['id']. '"class="btn" target="_blank"> <i class="fa-solid fa-eye"></i></a>'."</td>";
                echo "<td>". '<a href="edit.php?userid='.$row['id'].'"class="btn"> <i class="fa-solid fa-pen"></i></a>'."</td>";
                echo "<td>". '<a href="delete.php?id='.$row['id']. ' "class="btn" onclick="return confirm(`Are you sure want to delete this record?`)" > <i class="fa-solid fa-trash-can"></i></a>'."</td>";
                echo "<td>". "</td>";
                echo "</tr>";
              }
              }
              ?>  
            </tbody>
          </table>
              
          
        </div>

    </main>
    

    
  <div id="popup1" class="overlay">
    <div class="popup">
      <a class="close" href="#">&times;</a>
      <div class="content">
        <div class="form-wrap">
          <h1>Add Admin</h1>
          <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="fname">Full Name</label>
                <input type="text" name="fname" placeholder="Enter Full Name" required/>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter Email" required/>
              </div>

              <div class="form-group">
                <label for="pword">Password</label>
                <input type="password" name="pword" placeholder="Enter Password" required/>
              </div>

              <div class="form-group">
                <label for="status">Status</label>
                <select type="select"  name="status"  required> 
                  <option value="nothing">Select Status</option>
                  <option value="Admin">Admin</option>
                  <option value="Tutor">Tutor</option>
                </select>  
              </div>

              <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" placeholder="Enter Role" required/>
              </div>

              
              <button type="submit" class="update" name="add">ADD ADMIN</button>
              
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