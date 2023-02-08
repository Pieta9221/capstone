<?php
  
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
    $status = "Pending";
    
    $photoname =$_FILES['passport']['name']; 
    $phototype = $_FILES['passport']['type'];
    $photosize = $_FILES['passport']['size'];
    $photoloc = $_FILES['passport']['tmp_name']; 
    move_uploaded_file($photoloc,"./users/pic/".$photoname);
    $filepath = "pic/".$photoname; 
  
      $check = explode(".",$photoname);
      $checkpath = strtolower(end($check));
      $arraytype = array("jpeg", "gif", "png", "jpg");
      
      if(in_array($checkpath, $arraytype) === FALSE){
        
        echo "<script> alert('Please choose a valid file type like jpeg, gif, png, or jpg') </script>";
        
      }
      elseif($photosize > 5120000){
        echo "<script> alert('Photo size should not be more than 5MB') </script>";
       
      }
      else{
        
          if($pword != $pword2){
            echo "<script> alert('$fname, the passwords do not match!')</script>";
            include('form.php');
          }
          else{

            $query = "SELECT * FROM studentdata WHERE email = '$email'";
            $res = $config->query($query);
            

            if ($res->num_rows>0){
              echo "<script> alert('$fname, your data already exists!') </script>";
              include('form.php');
            }
            else{
              
              $insert = "INSERT INTO studentdata (fname, email, dob, gender, phone, pword, address, state, course, passport, bio, status) VALUES ('$fname', '$email', '$dob', '$gender', '$phone', '$pword3', '$address', '$state', '$course', '$filepath', '$bio', '$status')";
              
              if($config->query($insert)===TRUE){
                echo "<script> alert('$fname, you have successfully registered')</script>";
                include('sign.php');
              }
              else{
                echo "<script> alert('Ooops! Problem with registration, try again') </script>";
                
                
              }

            }
          // }
      } 
    }
    
  
 
?>