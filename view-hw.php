

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System|| View Homework</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> View Homework </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> View Homework</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <table border="1" class="table table-bordered mg-b-0">
                    

   <tr>
                             <th class="font-weight-bold">Student Name</th>
                            <td></td>
                          </tr>
                          <tr>
                             <th class="font-weight-bold">Student Email</th>
                            <td></td>
                          </tr>


                     


  <tr>
           <th class="font-weight-bold">Homework Title</th>
                            <td></td>
                          </tr>
                          <tr>
                             <th class="font-weight-bold">Class</th>
                            <td></td>
                          </tr>
                          <tr>
                             <th class="font-weight-bold">Section</th>
                            <td></td>
                          </tr>
                          <tr>
                            <th class="font-weight-bold">Last Submission Date</th>
                             <td></td>
                           </tr>
                           <tr>
                              <th class="font-weight-bold">Posting Date</th>
                            <td></td>
                          </tr>
                          <tr>
                                    <th class="font-weight-bold">Homework Description</th>
                            <td></td>
  </tr>


  


<tr>
  <th colspan="2" style="color:red">Homework not uploaded by the student</th>
</tr>


<tr>
  <th style="color:blue; font-size:16px;" colspan="2">Uploaded Homework</th>
</tr>

<tr>
  <th>Homework Description</th>
  <td></td>
</tr>
<tr>
  <th>Homework File (doc or pdf only)</th>
  <td><a href="" target="_blank"> Click here</a></td>
</tr>
 

<form method="post" enctype="multipart/form-data">


<tr>
  <th>Admin Remark </th>
  <td><textarea class="form-control" name="adminremark" required="true"></textarea></td>
</tr>

  <td colspan="2"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></td>
</tr>
</form>



<tr>
  <th>Admin Remark </th>
  <td></td>
</tr>

<tr>
  <th>Admin Remark</th>
  <td></td>
</tr>


<tr>
  <th colspan="2" style="color:red;">No Notice Found</th>
</tr>

</table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>