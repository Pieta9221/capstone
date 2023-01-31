<?php 
session_start();
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);

$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();
if(isset($_POST['send'])){
  
  $ticketid = "SUP".(rand(99,1000));
  
  // $email = $_POST['email'];
  $subject = strtoupper($_POST['subject']); 
  $message = $_POST['message'];
  $date = date("Y-m-d"); 
    

  $query1 = "SELECT * FROM studentdata WHERE email = '$email'";
  $res = $conn->query($query1);
  $rows = $res->fetch_array();
  $fname = $rows['fname'];
  $mail = $rows['email'];
  $phone = $rows['phone'];
  

  $query2 = "SELECT * FROM ticket WHERE email = '$email' && date = '$date'"; 
  $res2 = $conn->query($query2);

  if ($res2->num_rows > 0){
    echo "$fname, you have submitted this ticket before";
  }
  else{
    $insert = "INSERT INTO ticket (fname, email, subject, message, ticketid, date, phone, status) values ('$fname', '$mail', '$subject', '$message', '$ticketid', '$date',  '$phone', 'Pending')";

    if($conn->query($insert)===TRUE){
      echo "$fname, Ticket Submitted Successfully";
    }
    else{
      echo "Ooops! Not Submitted";
    }

  } 
}


?>

<?php 
  include('nav.php');
?>
    
    
    <main>
    <div class="rec">
        <a href="#popup1"><button class="btn"> <i class="fa-solid fa-plus"></i> Add Ticket</button></a>

       
       <div class="card-header">
          <h2>My Tickets</h2>
        </div>
        <?php

        $query3  = "SELECT * FROM ticket WHERE email='$email' ORDER BY date";
        $result3 = $conn->query($query3);
        if($result3->num_rows == 0){
          echo "Data not found";
        } else{  

        ?> 
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>Subject</td>
                <td>Message</td>
                <td>Status</td>
                <td>Feedback</td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result3 -> fetch_array()){
                echo "<tr>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$row['message']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>". '<a href="../inc/adminprofile.php?id='.$row['id']. '"class="btn" target="_blank"> <i class="fa-solid fa-message"></i></a>'."</td>";
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
          <h1>Complaint Ticket</h1>
          <form method="POST" enctype="multipart/form-data">
            <!-- <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" placeholder="Enter Email"required/>
            </div> -->

            <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Enter Subject"required/>
            </div>

            <div class="form-group">   
            <label for="message">Message</label>
            <textarea name="message" cols="35" rows="10" ></textarea>
            </div>  
                  
            <button type="submit" name= "send" class="button">SUBMIT TICKET</button>
            
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


