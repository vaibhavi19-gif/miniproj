<?php include('include/header.php');   ?>
    

<?php include('include/sidebar.php');   ?>
    

    

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                 <li class="breadcrumb-item"><a href="#"></a>Customers</li>
                 </ol>
               </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               
          <h1 class="h2">Customers </h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <a href="addcustomer.php" class="btn btn-primary">ADD CUSTOMERS</a>
            </div>
          </div>

          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Branch</th>
                <th>Roll No</th>
                <th>DOB</th>
                <th>Email Id</th>
                <th>Phone No.</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Edit/Delete</th>

            </tr>
        </thead>
        <tbody>

        <?php 
          $id = 0;
           include("config.php");
           $query = mysqli_query($conn, "select * from signin_data");
            while($row = mysqli_fetch_array($query)){
              $id += 1;
           
        ?>
            
              <tr>
                 <td><?php  echo $id ?></td>

                 <td><?php  echo $row['fname']; echo"&nbsp";echo $row['lname'];  ?></td>
                
                 <td><?php  echo $row['username'];  ?></td>
                 
                 <td><?php  echo $row['userpass'];  ?></td>
                 
                 <td><?php  echo $row['branch'];  ?></td>
                 
                 <td><?php  echo $row['rollnum'];  ?></td>

                 <td><?php  echo $row['dob'];  ?></td>

                 <td><?php  echo $row['email'];  ?></td>

                 <td><?php  echo $row['pno'];  ?></td>

                 <td><?php  echo $row['gender'];  ?></td>

                 <td><?php  echo $row['address'];  ?></td>

                 <td>
                    <div class="row">
                    <div class="btn-group">
                    <!--echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$query2['id']."'>x</a></td><tr>"; //use double quotes for js inside php!-->
                      <a onClick="return confirm('Please confirm edition');" href="customeredit.php?edit=<?php echo $row['email'];   ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                      <a onClick="return confirm('Please confirm deletion');" href="customerdelete.php?del=<?php echo $row['email']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>

                    </div>
                    </div>
                 
                 </td>
                 
              </tr>
            <?php   
          }  ?>
        </tbody>
        <tfoot>
            <tr>
            <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Branch</th>
                <th>Roll No</th>
                <th>DOB</th>
                <th>Email Id</th>
                <th>Phone No.</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Edit/Delete</th>
            </tr>
        </tfoot>
    </table>
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
