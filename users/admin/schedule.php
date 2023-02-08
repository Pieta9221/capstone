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

  
if(isset($_POST['add'])){
  
  $date = $_POST['date'];
  $event = $_POST['event'];
  $time = $_POST['time'];
  
  
  $insert = "INSERT INTO schedule (date, event, time) values ('$date', '$event', '$time')";

  if($conn->query($insert)===TRUE){
    echo "<script> alert('Successfully Added')</script";
    
  }else{
    echo "<script> alert('Oops! Not Added')</script";
  }
}

?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
      <a href="#popup1"><button class="btn"> <i class="fa-solid fa-plus"></i> Add Event</button></a>
       
         <div class="card-header">
          <h2>Events</h2>
        </div>

        <?php
        $today = date("Y-m-d");
        $query2  = "SELECT * FROM schedule WHERE date >= '$today'  ORDER BY date DESC";
        $result2 = $conn->query($query2);
        if($result2->num_rows == 0){
          echo "No upcoming events!";
        } else{  
        
         ?> 
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>Event</td>
                <td>Time</td>
                <td>Delete</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result2 -> fetch_array()){
             
                echo "<tr>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['event']."</td>";
                echo "<td>".$row['time']."</td>";
                echo "<td>". '<a href="deleteschedule.php?id='.$row['id']. ' "class="btn" onclick="return confirm(`Are you sure want to delete this entry?`)" > <i class="fa-solid fa-trash-can"></i></a>'."</td>";
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
          <h1>Add Event</h1>
          <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" placeholder="Enter Date" required/>
              </div>

              <div class="form-group">
                <label for="title">Event</label>
                <input type="text" name="event" placeholder="Enter Event" required/>
              </div>

              <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="time" placeholder="Enter Time" required/>
              </div>

             

              
              <button type="submit" class="update" name="add">POST EVENT</button>
              
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