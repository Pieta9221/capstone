<?php
  session_start();
  include('./users/inc/connection.php');

  
  $config = new mysqli ($host, $user, $pwd, $database);

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $course = $_POST['course'];
    $bio = $_POST['bio'];
    $pword = $_POST['pword'];
    $pword2 = $_POST['pword2'];
    $pword3 = md5($pword);
    
    
    $photoname =$_FILES['passport']['name']; 
    $phototype = $_FILES['passport']['type'];
    $photosize = $_FILES['passport']['size'];
    $photoloc = $_FILES['passport']['tmp_name']; 
    move_uploaded_file($photoloc,"./users/pic/".$photoname);
    $filepath = "pic/".$photoname; 
    
    // if(empty($passport) || empty($fname) || empty($email) || empty($dob) || empty($gender) || empty($phone) || empty($address) || empty($state) || empty($course) || empty($bio) || empty($pword) || empty($pword2)){
    //   $error = "Kindly fill this field";
    // }else{
      $check = explode(".",$photoname);
      $checkpath = strtolower(end($check));
      $arraytype = array("jpeg", "gif", "png", "jpg");
      if(in_array($checkpath, $arraytype) === FALSE){
        echo "Please choose a valid file type like jpeg, gif, png, or jpg"; 
      }
      elseif($photosize > 5120000){
        echo "Photo size should not be more than 5MB "; 
      }
      else{

        if($pword != $pword2){
          echo "<script> alert('$fname, the passwords does not match')</script>";
        }
        else{

          $query = "SELECT * FROM studentdata WHERE email = '$email'";
          $res = $config->query($query);
          

          if ($res->num_rows>0){
            echo "$fname, your data already exists";
          }
          else{
            
            $insert = "INSERT INTO studentdata (fname, email, dob, gender, phone, pword, address, state, course, passport, bio) values ('$fname', '$email', '$dob', '$gender', '$phone', '$pword3', '$address', '$state', '$course', '$filepath', '$bio')";
            $_SESSION['email'] = $email;
            if($config->query($insert)===TRUE){
              echo "$fname, you have successfully registered";
              header('location:users/student/dashboard.php');
            }
            else{
              echo "Ooops! Problem with registration, try again";
              
            }

          }
        } 
      }  
    
 
?>