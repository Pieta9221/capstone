<?php 
session_start();

include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();
$reg = $row['regnum'];
if(empty($row['regnum'])){
  include("access.php");
} elseif($row['status'] == "Suspended"){  
  include("suspend.php");  
} else{ 
  
if(isset($_POST['add'])){
  $regnum = $row['regnum'];
  $date = date("Y-m-d");
  $assid = $_POST['assid'];
  $assignmentname =$_FILES['assignment']['name']; 
  $assignmenttype = $_FILES['assignment']['type'];
  $assignmentsize = $_FILES['assignment']['size'];
  $assignmentloc = $_FILES['assignment']['tmp_name'];
  move_uploaded_file($assignmentloc,"../assignment/".$assignmentname);
  $assignment2 = "../assignment/".$assignmentname;
        
  $query2 = "SELECT * FROM review WHERE regnum = '$regnum' && assid = '$assid'";
  $res = $conn->query($query2);

  if ($res->num_rows > 0){
    echo "<script> alert('You have already made a submission!')</script>";
    header('location:assign.php');
  }else{
  $insert = "INSERT INTO review (date, assid, regnum, assignment) values ('$date', '$assid', '$regnum', '$assignment2')";

    if($conn->query($insert) ===TRUE){
      echo "<script> alert('Successfully Submitted')</script>";
      header('location:assign.php');
      
    }else{
      echo "<script> alert('Oops! Error Submitting')</script>";
      header('location:assign.php');
      
    }
  }
}

?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
       
         <div class="card-header">
          <h2>Assignments</h2>
        </div>

                    
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>ID</td>
                <td>Course</td>
                <td>Title</td>
                <td>Due Date</td>
                <td>View</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
            <?php


              $query2  = "SELECT * FROM assignment ORDER BY date DESC";
              $result2 = $conn->query($query2);
              
              if($result2->num_rows == 0){
                echo "Data not found";
              } else{  
        
          
              while($rows = $result2 -> fetch_array()){
                echo "<tr>";
                echo "<td>".$rows['date']."</td>";
                echo "<td>".$rows['assid']."</td>";
                echo "<td>".$rows['course']."</td>";
                echo "<td>".$rows['title']."</td>";
                echo "<td>".$rows['duedate']."</td>";
                echo "<td>". '<a href="../inc/download.php?assignment='.$rows['assignment']. '"class="btn"> <i class="fa-solid fa-download"></i></a>'."</td>";
                echo "<td>". "</td>";
                echo "</tr>";
              }
              }
              ?>  
              
            </tbody>
          </table>
              
          
        </div>
         <br/>       
      <a href="#popup1"><button class="btn"> <i class="fa-solid fa-upload"></i> Submit Assignment</button></a>

      </div>

      <div class="rec">
       
         <div class="card-header">
          <h2>Grades</h2>
        </div>

                    
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>ID</td>
                <td>Grade</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
            <?php
              $query3  = "SELECT * FROM review WHERE regnum = '$reg' ORDER BY date DESC";
              $result3 = $conn->query($query3);
              if($result3->num_rows == 0){
                echo "Assignment not submitted";
              } else{  
        
          
              while($rows1 = $result3 -> fetch_array()){
                echo "<tr>";
                echo "<td>".$rows1['date']."</td>";
                echo "<td>".$rows1['assid']."</td>";
                if($rows1['grade'] == 0){
                  echo "<td>".'Not Yet Graded'."</td>";
                }else{
                  echo "<td>".$rows1['grade']."</td>";
                }
                echo "<td>". "</td>";
                echo "</tr>";
              }
              }
              ?>  
              
            </tbody>
          </table>
              
          
        </div>
         
      </div>        
      

    </main>
    
       
    
    <div id="popup1" class="overlay">
    <div class="popup">
      <a class="close" href="#">&times;</a>
      <div class="content">
        <div class="form-wrap">
          <h1>Submit Assignment</h1>
          <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="assid">Assignment ID</label>
                <input type="text" name="assid" placeholder="Enter Accurate ID" required/>
              </div>


              <div class="form-group">
                <label for="title">Assignment</label>
                <input type="file" name="assignment" placeholder="Upload Assignment" required/>
              </div>

                         
              <button type="submit" class="update" name="add">SUBMIT ASSIGNMENT</button>
              
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
}
?>