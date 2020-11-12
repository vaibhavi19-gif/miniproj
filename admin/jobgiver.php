<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
    

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="#"></a>Job Giver</li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2">Job Givers</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <a href="addjobgiver.php" class="btn btn-primary">ADD JOB GIVERS</a>
            </div>
          </div>

          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>First Name</th>
                <th>Username</th>
                <th>Branch</th>
                <th>Roll No</th>
                <th>EmailId</th>
                <th>Phone No.</th>
            </tr>
        </thead>
        <tbody>

        <?php 
           include("../config.php");
           $query = mysqli_query($conn, "select * from teachers ");
            while($row = mysqli_fetch_array($query)){

           
        ?>
            
              <tr>
                 <td><?php  echo $row['id'];  ?></td>
                
                 <td><?php  echo $row['username1'];  ?></td>
                 
                 <td><?php  echo $row['password'];  ?></td>

                 <td>
                    <div class="row">
                    <div class="btn-group">
                      
                      <a href="teacheredit.php?edit=<?php echo $row['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                      <a href="teacherdelete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>

                    </div>

                    
                    
                    </div>
                 
                 </td>
                 
              </tr>
            <?php   }  ?>
        </tbody>
        <tfoot>
            <tr>
            <th>No.</th>
                <th>First Name</th>
                <th>Username</th>
                <th>Branch</th>
                <th>Roll No</th>
                <th>EmailId</th>
                <th>Phone No.</th>
            </tr>
        </tfoot>
    </table>
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
