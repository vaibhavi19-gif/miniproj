
<?php   


include("../config.php");


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
   

    $query = mysqli_query($conn, "update users set username='$username', password='$password' where id='$id'");

    if($query){
        echo "<script>alert('Record Updated')</script>";
        header("Location: customer.php");
       
    }else{
        echo "<script>alert('Try again')</script>";
       
    }
}

?>