
<?php $page_title = "Third Party : Chitragupta" ; include 'header.php' ?>


<div class="row">
  <div class="col-sm-4">
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add/Edit your domais here <button onClick="open_domain_dialog()" style="float:right" class="btn btn-success"><i style="float:right" class="fas fa-search-plus"></i></button></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="domaintable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody id="domain-list">
                   <!-- Sub domain data will be added here -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>
  <div class="col-sm-8">
   <!-- Dropdown Card Example -->
   <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">markup-js</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Action</div>
                      <a class="dropdown-item" href="#">Hide this</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="container">
                      <div class="row">
                          <div class="col-sm-6">
                              <label class="btn-success pl-2 pr-2">Version:1.2</label>
                          </div>
                          <div class="col-sm-6">
                             <label class="btn-warning pl-2 pr-2" style="float:right">5/10</label>
                          </div>
                      </div>
                  </div>
                  <div class="sidebar-heading">
                            Issues
                        </div>
                        <ul>
                            <li>outdated version</li>
                        </ul>
                        <div class="sidebar-heading">
                            Suggested Fix
                        </div>
                        <ul>
                            <li>Updgrade to latest version</li>
                        </ul>
                </div>
              </div>
</div>

          <!-- Page Heading -->
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

  <!-- Scroll to Top Button-->
  <?php include 'footer.php' ?>
  <script>
    get_domain(2);
  </script>