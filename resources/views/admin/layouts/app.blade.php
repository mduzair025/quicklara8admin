<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{env('APP_NAME')}} | Admin | @yield('title')
    </title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" href="favicon.png" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="{{env('ADMIN_ASSET')}}vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{env('ADMIN_ASSET')}}vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="{{env('ADMIN_ASSET')}}vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="{{env('ADMIN_ASSET')}}vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{env('ADMIN_ASSET')}}dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        @include('admin.partials.topbar')
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        
        @include('admin.partials.sidebar')
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            @yield('content')
            <!-- /Container -->
			
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://anaslakhani.com/" class="text-dark" target="_blank">Anas Lakhani</a> © {{date('Y')}}</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{env('ADMIN_ASSET')}}vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{env('ADMIN_ASSET')}}vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{env('ADMIN_ASSET')}}dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}vendors/jquery-toggles/toggles.min.js"></script>
    <script src="{{env('ADMIN_ASSET')}}dist/js/toggle-data.js"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="{{env('ADMIN_ASSET')}}vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="{{env('ADMIN_ASSET')}}vendors/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}vendors/raphael/raphael.min.js"></script>
    <script src="{{env('ADMIN_ASSET')}}vendors/morris.js/morris.min.js"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}vendors/echarts/dist/echarts-en.min.js"></script>
    
	<!-- Sparkline JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="{{env('ADMIN_ASSET')}}vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{env('ADMIN_ASSET')}}dist/js/vectormap-data.js"></script>

	<!-- Owl JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}vendors/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Toastr JS -->
    <script src="{{env('ADMIN_ASSET')}}vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    
    <!-- Init JavaScript -->
    <script src="{{env('ADMIN_ASSET')}}dist/js/init.js"></script>
	<script src="{{env('ADMIN_ASSET')}}dist/js/dashboard-data.js"></script>
	
</body>

</html>