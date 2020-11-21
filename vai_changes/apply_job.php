<?php
  include("../config.php");

  if(
      isset($_POST['submit'])){
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $sem = $_POST['sem'];
          $file = $_FILES['file']['name'];

          $tmp_name = $_FILES['file']['tmp_name'];
          $id = $_POST['id'];
          $job_seeker = $_POST['job_seeker'];

        move_uploaded_file($_FILES['file']['tmp_name'],'../resumes/'.$file);

        $query = mysqli_query($conn, "insert into internship_apply(fname,lname,sem,file,id,job_seeker) values ('$fname','$lname','$sem','$file','$id','$job_seeker')");
        if($query){
            echo "Done";

        }else{
            echo "not";
        }

      }
  
