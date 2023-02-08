<?php 
session_start();
// include_once("../session.php");

include('../inc/connection.php');
if(!isset($_SESSION['email'])){
  header("location: ../../sign.php"); 
  }
  
  ?>
  <?php
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="recent-grid">
        <div class="card">
          <h3>Welcome back,</h3>
          <h2><?php echo $row['fname']; ?></h2>
          <p>Trust you have achieved up to 70% of your daily goals</p>
        </div>

        <div class="card slideshow-container fade">
         
          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>FOCUS</p>
            <p>"It is during our darkest moments that we must focus to see the light"</p>
            <em><small>-Aristotle Onassis</small></em>
            </div>
          </div>
          
          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>PASSION</p>
            <p>"Greatness comes from living with purpose and passion."</p>
            <em><small>-Ralph Martson</small></em>
            </div>
          </div>

          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>COMMUNITY</p>
            <p>"Alone, we can do so little; together, we can do so much."</p>
            <em><small>-Helen Keller</small></em>
            </div>
          </div>

          <div class="Containers">
            <div>
            <h3>Our Core Values</h3>
            <p>OPPORTUNITY</p>
            <p>"Nothing is more expensive than a missed opportunity."</p>
            <em><small>-Jackson Brown</small></em>
            </div>
          </div>
         
        </div>

        
      </div>
      
      <div class="cards">
        <a href="quiz.php">
          <div class="card-single">
            <div>
              <h1>Take Quiz</h1>
              <span>Start quiz to test your knowledge</span>
            </div>
            <div><i class="fa-solid fa-list-check fa-3x"></i></div>
          </div>
        </a>  

       <a href="status.php">
          <div class="card-single">
            <div>
              <h1>Admission Status</h1>
              <span>Check admission status</span>
            </div>
            <div><i class="fa-solid fa-hourglass fa-3x"></i></div>
          </div>
        </a> 

        <a href="student.php">
          <div class="card-single">
            <div>
              <h1>Students</h1>
              <span>Collaborate with other students at the hub</span>
            </div>
            <div><i class="fa-solid fa-user-graduate fa-3x"></i></div>
          </div>
        </a>  

        <a href="staff.php">
          <div class="card-single">
            <div>
              <h1>Staff</h1>
              <span>Connect with staff in the hub</span>
            </div>
            <div><i class="fa-solid fa-user-tie fa-3x"></i></div>
          </div>
        </a>  

        <a href="schedule.php">
          <div class="card-single">
            <div>
              <h1>View Schedule</h1>
              <span>Keep track of the program for each day</span>
            </div>
            <div><i class="fa-solid fa-calendar-days fa-3x"></i></div>
          </div>
        </a>  

        <a href="assign.php">
          <div class="card-single">
            <div>
              <h1>Track Course</h1>
              <span>Check course progress, assignments, project etc.</span>
            </div>
            <div><i class="fa-solid fa-spinner fa-3x"></i></div>
          </div>
        </a>  

        
               
      </div>
     
    </main>
  </div>

  <section class="copyright">
      <p class="copy">&copy; 2022 LM Tech Hub</p>
  </section>
  
  <script src="../.././js/carousel.js"></script>
  <script src="../.././js/theme.js"></script>
</body>
</html>
