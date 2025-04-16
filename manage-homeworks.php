
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System|||Manage Homeworks</title>
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
              <h3 class="page-title"> Manage Homework </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Homework</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Homework</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Homework</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Homework Title</th>
                            <th class="font-weight-bold">Class</th>
                            <th class="font-weight-bold">Section</th>
                            <th class="font-weight-bold">Last Submission Date</th>
                            <th class="font-weight-bold">Posting Date</th>
                            <th class="font-weight-bold">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                          <tr>
                           
                            <td>1</td>
                            <td>Test Title for homework</td>
                            <td>10</td>
                            <td>A</td>
                            <td>2024-12-08</td>
                            <td>2024-12-31 15:56:56	</td>
                            <td>
                              <div><a href="" class="btn btn-info btn-xs"  target="blank">Edit</a>
                                               <a href="" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger btn-xs"> Delete</a>

<a href="" class="btn btn-info btn-xs"  target="blank">Uploaded HW</a>
                                             </div>
                            </td> 

                            <tr>
                            <td>2</td>
                            <td>Test Homework Titlesssssss</td>
                            <td>10</td>
                            <td>A</td>
                            <td>2025-01-02</td>
                            <td>2024-12-31 16:13:26</td>
                            <td>
                              <div><a href="" class="btn btn-info btn-xs"  target="blank">Edit</a>
                                               <a href="" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger btn-xs"> Delete</a>

<a href="" class="btn btn-info btn-xs"  target="blank">Uploaded HW</a>
                                             </div>
                            </td> 

                          
                          
                        </tbody>
                      </table>
                    </div>
                   <div align="left" class="mt-4">
    <ul class="pagination" >
        <li><a href="?pageno=1"><strong>First ></strong></a></li>
        <li class="">
            <a href=""><strong style="padding-left: 10px">Prev ></strong></a>
        </li>
        <li class="">
            <a href=""><strong style="padding-left: 10px">Next ></strong></a>
        </li>
        <li><a href=""><strong style="padding-left: 10px">Last</strong></a></li>
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