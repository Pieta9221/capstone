<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
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
            <p>"In the middle of difficulty lies opportunity."</p>
            <em><small>-Albert Einstein</small></em>
            </div>
          </div>
         
        </div>

        
      </div>

      <div class="cards">
        <a href="">
          <div class="card-single">
            <div>
              <h1>Students</h1>
              <span>List of all students admitted</span>
            </div>
            <div><i class="fa-solid fa-graduation-cap fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Tutors</h1>
              <span>List of all tutors in the hub</span>
            </div>
            <div><i class="fa-solid fa-person-chalkboard fa-3x"></i></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Attendance</h1>
              <span>Track students' attendance </span>
            </div>
            <div><i class="fa-regular fa-rectangle-list fa-3x"></i></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>View Schedule</h1>
              <span>Keep track of the program for each day</span>
            </div>
            <div><i class="fa-solid fa-calendar-days fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Grade</h1>
              <span>Track students' performance</span>
            </div>
            <div><i class="fa-solid fa-spinner fa-3x"></i></div>
          </div>
        </a>  

        <a href="">
          <div class="card-single">
            <div>
              <h1>Read Mail</h1>
              <span>Stay up to date with important information</span>
            </div>
            <div><i class="fa-solid fa-envelope fa-3x"></i></div>
          </div>
        </a>  
               
      </div>
     
    </main>
  </div>

  <section class="copyright">
      <p class="copy">&copy 2022 LM Tech Hub</p>
  </section>  

  <script src="../.././js/carousel.js"></script>
</body>
</html>