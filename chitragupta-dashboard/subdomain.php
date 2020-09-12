
<?php include 'header.php' ?>


<div class="row">
  <div class="col-sm-4">
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add/Edit your domain here  <button onClick="open_domain_dialog()" style="float:right" class="btn btn-success"><i style="float:right" class="fas fa-search-plus"></i></button></h6>
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
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Discover all of your sub domain here...</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="subdomaintable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Subdomain</th>
                      <!-- <th>Record Type</th> -->
                      <th>IP</th>
                      <!-- <th>ASN</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Subdomain</th>
                      <!-- <th>Record Type</th> -->
                      <th>IP</th>
                      <!-- <th>ASN</th> -->
                    </tr>
                  </tfoot>
                  <tbody id="subdomain-list">
                   <!-- Sub domain data will be added here -->
                  </tbody>
                </table>
              </div>
            </div>
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
    get_domain(1);
  </script>