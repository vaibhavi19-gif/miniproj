
<?php   


include("../config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $username = $_POST['username1'];
    $password = $_POST['password'];
    
   

    $query = mysqli_query($conn, "update teachers set username1='$username', password='$password' where id='$id'");

    if($query){
        echo "<script>alert('Record Updated')</script>";
        header("Location: jobgiver.php");
       
    }else{
        echo "<script>alert('Try again')</script>";
       
    }
}

?>