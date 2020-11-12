<?php include('include/header.php'); 
    include('../config.php');
?>
    

<?php include('include/sidebar.php'); 
 $id=$_GET['edit'];
 $query = mysqli_query($conn, "select * from teachers where id = '$id'");
 while($row=mysqli_fetch_array($query)){
        $username = $row['username1'];
        $password = $row['password'];
     
 }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="customer.php"></a>Job Giver</li>
                 <li class="breadcrumb-item"><a href="#"></a>Edit Job Giver</li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2"> Edit Job Giver =r </h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
             
            </div>
          </div>

             <div>
                <form action="tedit.php" method="POST">
                     <div class="form-group">
                       <label for="username1"></label>
                       <input type="text" name="username1"  value="<?php echo $username ?>" class="form-control" placeholder="Enter First name">
                     </div>
                     <div class="form-group">
                       <label for="password"></label>
                       <input type="text" name="password" class="form-control" value="<?php echo $password ?>" placeholder="Enter Password">
                     </div>
                     <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">

                     <div class="form-group">
                       <label for="password"></label>
                       <input type="submit" name="submit" class="btn btn-success" placeholder="SAVE">
                     </div>
                
                
                </form>
               
             </div>
               <canvas class="my-4" width="900" height="380"></canvas>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

<!-- datatables plugon -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
    
  </body>
</html>
