<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('dashtreme/assets/images/favicon-32x32.png') }}" type="image/.png') }}" />
    <!--plugins-->
    <link href="{{ asset('dashtreme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
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
    <title>AlphanetPay</title>
    <style>
        .glass-card {
            width: 350px;
            height: 220px;
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .glass-content {
            text-align: center;
        }

        .card-logo img {
            width: 60px;
            height: auto;
        }

        .card-number span {
            font-size: 20px;
            letter-spacing: 2px;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .card-info {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .card-holder span,
        .card-expiry span {
            font-size: 14px;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .card-holder span {
            text-transform: uppercase;
        }
    </style>
</head>

<body class="bg-theme bg-theme1">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <x-Include.sidebar />
        <!--end sidebar wrapper -->
        <!--start header -->
        <x-Include.header />
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
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--
  <footer class="page-footer">
   <p class="mb-0">Copyright © 2023. All right reserved.</p>
  </footer>
        -->
        <!--start switcher-->
        <div class="switcher-wrapper">
            <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
            </div>
            <div class="switcher-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                    <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
                </div>
                <hr />
                <p class="mb-0">Gaussian Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>
                <hr>
                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>
            </div>
        </div>
        <!--end switcher-->
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <x-Include.switcher />
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('dashtreme/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('dashtreme/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashtreme/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashtreme/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    {{-- <script src="{{ asset('dashtreme/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script> --}}
    {{-- <script src="{{ asset('dashtreme/assets/plugins/chartjs/chart.min.js') }}"></script> --}}
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
    {{-- <script src="{{ asset('dashtreme/assets/js/index.js') }}"></script> --}}
    <!--app JS-->
    <script src="{{ asset('dashtreme/assets/js/app.js') }}"></script>
</body>

</html>
