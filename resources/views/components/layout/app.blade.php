<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('dashtreme/assets/images/favicon-32x32.png') }}" type="image/.png') }}" />
	<!--plugins-->
	<link href="{{ asset('dashtreme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('dashtreme/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('dashtreme/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('dashtreme/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('dashtreme/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('dashtreme/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('dashtreme/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashtreme/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('dashtreme/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('dashtreme/assets/css/icons.css') }}" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        <x-Include.sidebar/>
		<!--end sidebar wrapper -->
		<!--start header -->
		<x-Include.header/>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

					{{ $slot }}
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        <!--
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
        -->
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<x-Include.switcher/>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('dashtreme/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('dashtreme/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/chartjs/chart.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('dashtreme/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('dashtreme/assets/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('dashtreme/assets/js/app.js') }}"></script>
</body>

</html>
