
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System|||Manage Students</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
   
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
              <h3 class="page-title"> Manage Students </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Students</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Students</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Students</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Student ID</th>
                            <th class="font-weight-bold">Student Class</th>
                            <th class="font-weight-bold">Student Name</th>
                            <th class="font-weight-bold">Student Email</th>
                            <th class="font-weight-bold">Admissin Date</th>
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                           
                          <tr>
                           
                            <td>1</td>
                            <td>ui-99</td>
                            <td>11 A</td>
                            <td>jghj</td>
                            <td>jhghjg@gmail.com</td>
                            <td>2025-01-01 00:00:04</td>
                            <td>
                              <div><a href="" class="btn btn-info btn-xs"  target="blank">Edit</a>
                                                 <a href="" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger btn-xs"> Delete</a></div>
                            </td> 
                          </tr>

                          <tr>
                           
                            <td>2</td>
                            <td>10A12345</td>
                            <td>10 C</td>
                            <td>Kishore Sharma</td>
                            <td>kishore@gmail.com	</td>
                            <td>2025-01-01 00:00:04</td>
                            <td>
                              <div><a href="" class="btn btn-info btn-xs"  target="blank">Edit</a>
                                                 <a href="" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger btn-xs"> Delete</a></div>
                            </td> 
                          </tr>

                          <tr>
                           
                            <td>3</td>
                            <td>uii-990</td>
                            <td>10 B</td>
                            <td>Anshul</td>
                            <td>anshul@gmali.com</td>
                            <td>2025-01-01 00:00:04</td>
                            <td>
                              <div><a href="" class="btn btn-info btn-xs"  target="blank">Edit</a>
                                                 <a href="" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger btn-xs"> Delete</a></div>
                            </td> 
                          </tr>

                          <tr>
                           
                            <td>4</td>
                            <td>10806121</td>
                            <td>10 A</td>
                            <td>John Doe</td>
                            <td>john@gmail.com</td>
                            <td>2025-01-01 00:00:04</td>
                            <td>
                              <div><a href="" class="btn btn-info btn-xs"  target="blank">Edit</a>
                                                 <a href="" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger btn-xs"> Delete</a></div>
                            </td> 
                          </tr>

                          <tr>
                           
                            <td>5</td>
                            <td>1080623</td>
                            <td>12 A</td>
                            <td>Anuj kumar Singh</td>
                            <td>akkr@gmail.com</td>
                            <td>2025-01-01 00:00:04</td>
                            <td>
                              <div><a href="" class="btn btn-info btn-xs"  target="blank">Edit</a>
                                                 <a href="" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger btn-xs"> Delete</a></div>
                            </td> 
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div align="left">
                      <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>

</div>
<hr />
<ul class="pagination">

<li >
<a >Previous</a>
</li>


<li >
<a>Next</a>
</li>

</ul>
</div>
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
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->

  </body>
</html>