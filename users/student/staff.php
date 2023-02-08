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
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

  
?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
        
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
                <td>Role</td>
                <td>View</td>
               
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              $query2  = "SELECT * FROM admindata ORDER BY fname ASC";
              $result2 = $conn->query($query2);
              if($result2->num_rows == 0){
                echo "Data not found";
              } else{  
                while($row = $result2 -> fetch_array()){
                  echo "<tr>";
                  echo "<td>". "<img src = ".'../'.$row['passport']." class = 'pic'/>"."</td>";
                  echo "<td>".$row['fname']."</td>";
                  echo "<td>".$row['staffid']."</td>";
                  echo "<td>".$row['role']."</td>";
                  echo "<td>". '<a href="staffprofile.php?staffid='.$row['staffid']. '"class="btn" > <i class="fa-solid fa-eye"></i></a>'."</td>";
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
          <h1>Add Staff</h1>
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

              
              <button type="submit" class="update" name="add">ADD STAFF</button>
              
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