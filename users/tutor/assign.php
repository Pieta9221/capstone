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
  
  $date = date("Y-m-d");
  $course = $_POST['course'];
  $title = $_POST['title'];
  $duedate = $_POST['duedate'];
  $assid = "ASS".(rand(99,1000));
  
  

  $assignmentname =$_FILES['assignment']['name']; 
  $assignmenttype = $_FILES['assignment']['type'];
  $assignmentsize = $_FILES['assignment']['size'];
  $assignmentloc = $_FILES['assignment']['tmp_name'];
  move_uploaded_file($assignmentloc,"../assignment/".$assignmentname);
  $assignment2 = "../assignment/".$assignmentname;
        
  $query2 = "SELECT * FROM assignment WHERE title = '$title'";
  $res = $conn->query($query2);

  if ($res->num_rows>0){
    echo "Data already exists";
  }
  else{
  $insert = "INSERT INTO assignment (date, course, title, duedate, assignment, email, assid) values ('$date', '$course', '$title', '$duedate', '$assignment2', '$email', '$assid')";

  if($conn->query($insert)===TRUE){
    $_SESSION['tick'] = "Successfully Added";
    $_SESSION['status_code'] = "success";
    header('location:assign.php');
  }else{
    $_SESSION['tick'] = "Not Added";
    $_SESSION['status_code'] = "error";
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
      <a href="#popup1"><button class="btn"> <i class="fa-solid fa-plus"></i> Add Assignment</button></a>
       
         <div class="card-header">
          <h2>Assignments</h2>
        </div>

        <?php
        $query2  = "SELECT * FROM assignment WHERE email='$email' ORDER BY date DESC";
        $result2 = $conn->query($query2);
        if($result2->num_rows == 0){
          echo "Data not found";
        } else{  
        
         ?> 
            
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
                <td>Delete</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result2 -> fetch_array()){
                echo "<tr>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['assid']."</td>";
                echo "<td>".$row['course']."</td>";
                echo "<td>".$row['title']."</td>";
                echo "<td>".$row['duedate']."</td>";
                echo "<td>". '<a href="../inc/download.php?assignment='.$row['assignment']. '"class="btn"> <i class="fa-solid fa-download"></i></a>'."</td>";
                echo "<td>". '<a href="deleteassignment.php?id='.$row['id']. ' "class="btn" onclick="return confirm(`Are you sure want to delete this entry?`)" > <i class="fa-solid fa-trash-can"></i></a>'."</td>";
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
          <h1>Add Assignments</h1>
          <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" placeholder="Enter Course" required/>
              </div>

              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Enter Title" required/>
              </div>

              <div class="form-group">
                <label for="title">Assignment</label>
                <input type="file" name="assignment" placeholder="Upload Assignment" required/>
              </div>

             <div class="form-group">
                <label for="duedate">Due Date</label>
                <input type="date" name="duedate" placeholder="Enter Due Date" required/>
              </div>

              
              <button type="submit" class="update" name="add">POST ASSIGNMENT</button>
              
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