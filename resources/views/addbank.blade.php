<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link
    rel="stylesheet"
    data-purpose="Layout StyleSheet"
    title="Web Awesome"
    href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d"
  >

    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
    >

    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css"
    >

    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css"
    >

    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css"
    >

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
       
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       @include('components/sidenav')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="margin-top: 5rem;">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create Bank</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2  col-form-label">Bank Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" placeholder="Enter Bank Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Branch</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Enter Branch Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Account Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Enter Account Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Account Holder</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Enter Account Holder Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Account Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Enter Account Number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Contact Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Enter Contact Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Initial Balance</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Enter Initial Balance">
                                            </div>
                                        </div>

                                        <fieldset class="form-group">
                                            <div class="row">
                                                <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked="checked">
                                                        <label class="form-check-label">First radio</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                                        <label class="form-check-label">Second radio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Create Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       @include('components/footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>
