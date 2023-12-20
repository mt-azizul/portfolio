<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords"
        content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <link rel="stylesheet" href="{{asset('front/css/reset.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-grid.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/animations.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/perfect-scrollbar.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}" type="text/css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
    <style>
        /* Define a class for the table */
        .custom-table {
            border-collapse: collapse;
            width: 100%;
        }

        /* Apply border color to the table and its cells */
        .custom-table,
        .custom-table th,
        .custom-table td {
            border: 2px solid #fff;
            /* Change #3498db to the desired color */
        }

        /* Style the table headers */
        .custom-table th {
            color: #fff;
            padding: 8px;
            text-align: left;
        }

        /* Style the table cells */
        .custom-table td {
            padding: 8px;
        }

        /* Custom Pagination Style */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .page-item {
            list-style: none;
            margin: 0 5px;
        }

        .page-link {
            display: block;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #007bff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .page-link:hover {
            background-color: #007bff;
            color: #fff;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            background-color: #fff;
            border: 1px solid #6c757d;
            pointer-events: none;
        }

        .page-item.active .page-link {
            color: #fff;
            background-color: #007bff;
            border: 1px solid #007bff;
        }

        .page-item.active .page-link:hover {
            background-color: #0056b3;
        }

        /* Optional: Add styles for navigation buttons */
        .page-link[aria-label="Previous"],
        .page-link[aria-label="Next"] {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(front/img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->
@yield('content')

    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('front/js/animating.js')}}"></script>

    <script src="{{asset('front/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="{{asset('front/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('front/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="{{asset('front/js/jquery.googlemap.js')}}"></script>
    <script src="{{asset('front/js/validator.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable( {
                "paging":   false,
                "ordering": false,
                "info":     false,
                "searching": false,


            });
        });
    </script>
</body>

</html>