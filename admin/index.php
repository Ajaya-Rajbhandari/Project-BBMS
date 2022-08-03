<?php
session_start();
if(isset($_SESSION['password'])){
  ?>
<?php include('includes/header.php') ?>
 <?php include('includes/sidebar.php') ?>
 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome admin</h3>
                  
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (18 September 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.png" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Itahari</h4>
                        <h6 class="font-weight-normal">Nepal</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Donors</p>

                        <?php
                              $con = mysqli_connect("localhost","root","","donor");
                              $data = "select count(*) from detail";
                             $result = mysqli_query($con,$data);
                             $count = mysqli_fetch_array($result);
                             $totalDonor = $count[0];
                        ?>

                      <p class="fs-30 mb-2"><?php echo $totalDonor ?></p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Requests</p>
                      <?php
                              $con = mysqli_connect("localhost","root","","donor");
                              $data = "select count(*) from requests";
                             $result = mysqli_query($con,$data);
                             $count = mysqli_fetch_array($result);
                             $totalRequests = $count[0];
                        ?>

                      <p class="fs-30 mb-2"><?php echo $totalRequests ?></p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
                      </div>
                      
                    </div>
                
            </div>
        </div>

      <?php include('includes/footer.php') ?>


    <?php } else{?>

        <a href="admin-login.php" >Go to login page </a>

        <?php } ?>