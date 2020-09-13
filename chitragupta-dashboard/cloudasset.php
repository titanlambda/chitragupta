<?php
$page_title = "Cloud Assets : Chitragupta" ;
  include 'header.php' ;
?>

        <div class="row"  id="getCloudService">
        <div class="col-md-4">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="myPieChart" width="100%" height="245" class="chartjs-render-monitor" style="display: block; width: 100%; height: 245px;"></canvas>
              </div>
              <div class="mt-4 text-center small">
                <span class="mr-2">
                  <i class="fas fa-circle text-primary"></i> Service 1
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-success"></i> Service 2
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-info"></i> Service 3
                </span>
              </div>
            </div>
          </div>
          <div class="container-fluid">
          <div class="row">
          <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2 " onclick="document.getElementById('ec2').style.display = 'block';document.getElementById('rds').style.display = 'none';document.getElementById('s3').style.display = 'none';">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">EC2</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2" onclick="document.getElementById('ec2').style.display = 'none';document.getElementById('rds').style.display = 'block';document.getElementById('s3').style.display = 'none';">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">rds</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-12 mb-4">
              <div class="card border-left-primary shadow h-100 py-2" onclick="document.getElementById('ec2').style.display = 'none';document.getElementById('rds').style.display = 'none';document.getElementById('s3').style.display = 'block';">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">s3</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Discover all of your Cloud Assets here...</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="ec2" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <!-- <th>Service Name</th> -->
                      <th>State Code</th>
                      <!-- <th>Service Type</th> -->
                      <th>State Name</th>
                      <!-- <th>ASN</th> -->
                    </tr>
                  </thead>
                
                  <tbody >
                    <tr>
                      <td>017bc81f5568e4258</td>
                      <td class="text-info">80</td>
                      <td class="text-danger">stopped</td>
                     
                    </tr>
                    <tr>
                      <td>0a1d5f206d33f0c28</td>
                      <td class="text-info">16</td>
                      <td class="text-success">running</td>
                     
                    </tr>
                    <!-- Sub domain data will be added here -->
                  </tbody>
                </table>
                <table class="table table-bordered" style="display: none;" id="rds" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>DB Engine</th>
                      <!-- <th>Service Name</th> -->
                      <th>DB Instance Name</th>
                      <!-- <th>Service Type</th> -->
                      <th>DB Name</th>
                      <th>DB Storage</th>
                      <th>DB Type</th>
                      <!-- <th>ASN</th> -->
                    </tr>
                  </thead>
                
                  <tbody >
                    <tr>
                      <td>mariadb</td>
                      <td>mariatrial</td>
                      <td>maria_trial</td>
                      <td>20</td>
                      <td>db.t2.micro</td>
                    </tr>
                    <tr>
                      <td>mysql</td>
                      <td>rdsmysql</td>
                      <td>dbname</td>
                      <td>20</td>
                      <td>db.t2.micro</td>
                    </tr>
                    <tr>
                      <td>postgres</td>
                      <td>yourdbid</td>
                      <td>yourdbname</td>
                      <td>200</td>
                      <td>db.m3.2xlarge</td>
                    </tr>
                    
                    <!-- Sub domain data will be added here -->
                  </tbody>
                </table>
                <table class="table table-bordered" style="display: none;" id="s3" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <!-- <th>Service Name</th> -->
                      <th>Created</th>
                    
                    </tr>
                  </thead>
                
                  <tbody >
                    <tr>
                      <td>aws-cloudtrail-logs-504898063367-1e551b5a</td>
                      <td>Sat, 12 Sep 2020 19:18:41 GMT</td>
                    </tr>
                    <tr>
                      <td>ghjghj</td>
                      <td>Sat, 12 Sep 2020 10:24:20 GMT</td>
                    </tr>
                    <tr>
                      <td>jexamplecom</td>
                      <td>Wed, 02 Sep 2020 13:25:17 GMT</td>
                    </tr>
                    <tr>
                      <td>logjexamplecom</td>
                      <td>Wed, 02 Sep 2020 13:29:16 GMT</td>
                    </tr>
                    <tr>
                      <td>pribv</td>
                      <td>Sat, 12 Sep 2020 17:58:22 GMT</td>
                    </tr>
                    <tr>
                      <td>samplp</td>
                      <td>Sat, 12 Sep 2020 15:47:02 GMT</td>
                    </tr>
                    <tr>
                      <td>wwwjexamplecom</td>
                      <td>Wed, 02 Sep 2020 13:25:50 GMT</td>
                    </tr>
                   
                    <!-- Sub domain data will be added here -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <?php include 'footer.php' ?>