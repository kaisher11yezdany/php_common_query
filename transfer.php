@include('components.admin.dashboard.header')

<body>
  <!-- loader starts-->
   
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('components.admin.dashboard.navbar')
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      @include('components.admin.dashboard.sidebar')
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Lead Transfer</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item">Setting</li>
                  <li class="breadcrumb-item active">Lead Transfer</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <?php 

        $servername = "localhost";
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $dbname = env('DB_DATABASE');

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $con = new mysqli($servername, $username, $password, $dbname);
?>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12 col-md-12 col-xl-12">
            @if (session('status'))
                                    
                                    <div class="alert alert-success outline alert-dismissible fade show" role="alert"><i data-feather="bell"></i>
                                        <p><b>{{ session('status') }} </b> </p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @elseif(session('failed'))
                                    
                                    <div class="alert alert-warning outline alert-dismissible fade show" role="alert"><i data-feather="bell"></i>
                                        <p><b> {{ session('failed') }} </b> </p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>


                                    @endif
              <div class="card">
                
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 col-md-4 col-xl-4">
                      <div class="mb-2">
                       <form method="post" action="{{url('leads_transfer_save')}}" >
                            @csrf
                        <div class="col-form-label">Lead Source</div>
                        <select name="lead_source" class="js-example-disabled-results col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                          <option value="">Please Select Lead Source</option>
															<!-- <option value="1" data-name="NONE" data-count="0" >NONE</option> -->
																<option value="L1" data-name="DATABASE" data-count="429">L1</option>
																<option value="L2" data-name="WEBSITE" data-count="0" ="">L2</option>
																<option value="L3" data-name="POOL" data-count="4130">L3</option>
																 
																 
														</select>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                      <div class="mb-2">
                        <div class="col-form-label">Transfer with</div>
                        <select name="transfer_with" class="js-example-disabled-results col-sm-12 select2-hidden-accessible" name="transferwith" id="transferwith" tabindex="-1" aria-hidden="true">
                          <option value="" selected="selected">Select Transfer <With></With></option>
                        </select>

                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                      <div class="mb-2">
                        <div class="col-form-label">Please Select-Team | Profile | Employee</div>
                        <select name="transfer_to" class="js-example-disabled-results col-sm-12 select2-hidden-accessible" name="topic" id="topic" tabindex="-1" aria-hidden="true">
                          <option value="" selected="selected">Select <With></With></option>
                        </select>

                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                      <div class="mb-2">
                        <div class="col-form-label">Number of leads transfer</div>
                        <input class="form-control" name="no_of_leads"type="number" placeholder="Enter Lead Alloting to Employee Name" data-bs-original-title="" title="">
                        <p>(Number of lead in Employee Name)</p>


                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                      <div class="mb-2">
                        <div class="col-form-label">Lead Status</div>
                        <select name="lead_status" class="js-example-disabled-results col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                          <option value="NONE">NONE</option>
                                 <option value="Contacted">CONTACTED</option>
                                 <option value="Nc">NC</option>
                                 <option value="Switch Off">Switch Off</option>
                                 <option value="DND">DND</option>
                                 <option value="Wrong Number">Wrong Number </option>
                                 <option value="Open Demat">Open Demat</option>
                                 <option value="NPC">NPC</option>
                        </select>

                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                      <div class="mb-2">
                        <div class="col-form-label">Lead Response</div>
                        <select name="lead_response" class="js-example-disabled-results col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                          <option value="6">NONE</option>
                                <option value="8">INTERSTED</option>
                                <option value="Not Interested">Not Interested</option>
                                <option value="Call back later">Call back later</option>
                                <option value="Live Call">Live Call</option>
                                <option value="NPC">NPC</option>
                                <option value="Dispose">Dispose</option>
                        </select>

                      </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-xl-12">
                      <div class="mb-2">
                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Transfer Lead</button>
</form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Added Script -->
  <script type="text/javascript">
    var subjectObject = {
  "Profile": {
    <?php 
          
          $query=$con->query("
          SELECT id,name FROM profilesettings
          "); 
          foreach($query as $data){ ?>
          "<?php echo $data['name']; ?>": ["0"],
          <?php } ?>
  },
  "Employee": {
    <?php 
          
          $query=$con->query("
          SELECT id,name,email FROM users
          "); 
          foreach($query as $data){ ?>
          "<?php echo $data['email']; ?>": ["0"],
          <?php } ?>

  },

  "Team": {
    <?php 
          
          $query=$con->query("
          SELECT id,teamname FROM team_managements
          "); 
          foreach($query as $data){ ?>
          "<?php echo $data['teamname']; ?>": ["0"],
          <?php } ?>

  }

}
    window.onload = function() {
      var s = document.getElementById("transferwith");
      var t = document.getElementById("topic");
      //var c = document.getElementById("chapter");

      for (var x in subjectObject) {
        s.options[s.options.length] = new Option(x, x);
      }


      s.onchange = function() {
        //empty Chapters- and Topics- dropdowns
        // c.length = 1;
        t.length = 1;
        //display correct values
        for (var y in subjectObject[this.value]) {
          t.options[t.options.length] = new Option(y, y);
        }
      }

    }
  </script>

  <!-- End of Added Script -->
  <!-- latest jquery-->
  <script src="{{url('assets/js/jquery-3.5.1.min.js')}}"></script>
  <!-- Bootstrap js-->
  <script src="{{url('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <!-- feather icon js-->
  <script src="{{url('assets/js/icons/feather-icon/feather.min.js')}}"></script>
  <script src="{{url('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
  <!-- scrollbar js-->
  <script src="{{url('assets/js/scrollbar/simplebar.js')}}"></script>
  <script src="{{url('assets/js/scrollbar/custom.js')}}"></script>
  <!-- Sidebar jquery-->
  <script src="{{url('assets/js/config.js')}}"></script>
  <!-- Plugins JS start-->
  <script src="{{url('assets/js/sidebar-menu.js')}}"></script>
  <script src="{{url('assets/js/prism/prism.min.js')}}"></script>
  <script src="{{url('assets/js/clipboard/clipboard.min.js')}}"></script>
  <script src="{{url('assets/js/custom-card/custom-card.js')}}"></script>
  <script src="{{url('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('assets/js/rating/jquery.barrating.js')}}"></script>
  <script src="{{url('assets/js/rating/rating-script.js')}}"></script>
  <script src="{{url('assets/js/owlcarousel/owl.carousel.js')}}"></script>
  <script src="{{url('assets/js/ecommerce.js')}}"></script>
  <script src="{{url('assets/js/product-list-custom.js')}}"></script>
  <script src="{{url('assets/js/tooltip-init.js')}}"></script>
  <script src="{{url('assets/js/select2/select2.full.min.js')}}"></script>
  <script src="{{url('assets/js/select2/select2-custom.js')}}"></script>
  <script src="{{url('assets/js/dashboard/default.js')}}"></script>

  <script src="{{url('assets/js/dropzone/dropzone.js')}}"></script>
  <script src="{{url('assets/js/dropzone/dropzone-script.js')}}"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="{{url('assets/js/script.js')}}"></script>
  <script src="{{url('assets/js/theme-customizer/customizer.js')}}"></script>
  <!-- login js-->
  <!-- Plugin used-->
</body>

</html>
