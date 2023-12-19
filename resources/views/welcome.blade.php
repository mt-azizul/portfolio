<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords"
        content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="{{ asset('front/favicon.ico') }}">

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
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
        <div class="page-content">

            <header id="site_header" class="header mobile-menu-hide">
                <div class="header-content">
                    <div class="header-photo">
                        <img src="{{asset('front/img/company_logo.jpg')}}" alt="Alex Smith">
                    </div>
                    <div class="header-titles">
                        <h2>XYZ Company</h2>
                        <h4>New York</h4>
                    </div>
                </div>

                <ul class="main-menu">
                    <li class="active">
                        <a href="#home" class="nav-anim">
                            <span class="menu-icon lnr lnr-home"></span>
                            <span class="link-text">Home</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#about-me" class="nav-anim">
                            <span class="menu-icon lnr lnr-user"></span>
                            <span class="link-text">About Me</span>
                        </a>
                    </li>
                    <li>
                        <a href="#resume" class="nav-anim">
                            <span class="menu-icon lnr lnr-graduation-hat"></span>
                            <span class="link-text">Resume</span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class="nav-anim">
                            <span class="menu-icon lnr lnr-briefcase"></span>
                            <span class="link-text">Portfolio</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="#blog" class="nav-anim">
                            <span class="menu-icon lnr lnr-book"></span>
                            <span class="link-text">Blog</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#contact" class="nav-anim">
                            <span class="menu-icon lnr lnr-envelope"></span>
                            <span class="link-text">Contact</span>
                        </a>
                    </li> --}}
                </ul>

                <div class="social-links">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>

                {{-- <div class="header-buttons">
                    <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                </div> --}}

                <div class="copyrights">© {{ date('Y') }} All rights reserved.</div>
            </header>

            <div class="content-area">
                <div class="animated-sections">
                    <!-- Home Subpage -->
                    <section data-id="home" class="animated-section start-page">
                        <div class="section-content">
                            <div class="page-title">
                                <h2>Emplyees</h2>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    {{-- <form id="contact_form" class="contact-form" action="" method=""> --}}
                                        <form id="" class="contact-form" action="" method="">
                                            <div class="messages"></div>
                                            <div class="controls two-columns">
                                                <div class="fields clearfix">
                                                    <div class="left-column">
                                                        <div class="form-group form-group-with-icon">
                                                            <input id="search" type="text" name="search"
                                                                class="form-control" placeholder="" required="required"
                                                                data-error="This is required.">
                                                            <label>Name Email</label>
                                                            <div class="form-control-border"></div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="button btn-send">Search</button>
                                                </div>
                                        </form>
                                </div>
                            </div>
                            <!-- End of Contact Form -->
                            <div class="row justify-content-center">
                                <div class="card text-center">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12">
                                            <table id="example" class="table custom-table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td><a href="{{ route('users.profile',$user->id) }}"
                                                                style="color: white;">{{$user->name}}</a></td>
                                                        <td><a href="{{ route('users.profile',$user->id) }}"
                                                                style="color: white;">{{$user->email}}</a></td>
                                                        <td><a href="{{ route('users.profile',$user->id) }}"
                                                                style="color: white;"><i class="fa fa-eye"></i> View
                                                                Profile</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{-- <div> --}}
                                                <p>Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{
                                                    $users->total() }} entries</p>
                                                {{ $users->links('pagination::bootstrap-4') }}
                                                {{--
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- End of Home Subpage -->
                    <!-- Blog Subpage -->
                    <section data-id="blog" class="animated-section">
                        <div class="section-content">
                            <div class="page-title">
                                <h2>Blog</h2>
                            </div>
                    
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="blog-masonry two-columns clearfix">
                    
                                        <!-- Blog Post 1 -->
                                        <div class="item post-1">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in Design">Design</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('front/img/blog/blog_post_1.jpg')}}"
                                                            class="size-blog-masonry-image-two-c"
                                                            alt="Why I Switched to Sketch For UI Design" title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">05 Mar 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Why I Switched to Sketch For UI
                                                            Design</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 1 -->
                    
                                        <!-- Blog Post 2 -->
                                        <div class="item post-2">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in UI">UI</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('front/img/blog/blog_post_2.jpg')}}"
                                                            class="size-blog-masonry-image-two-c"
                                                            alt="Best Practices for Animated Progress Indicators" title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">23 Feb 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Best Practices for Animated Progress
                                                            Indicators</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 2 -->
                    
                                        <!-- Blog Post 3 -->
                                        <div class="item post-1">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in Design">Design</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('front/img/blog/blog_post_3.jpg')}}"
                                                            class="size-blog-masonry-image-two-c"
                                                            alt="Designing the Perfect Feature Comparison Table" title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">06 Feb 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">Designing the Perfect Feature
                                                            Comparison Table</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 3 -->
                    
                                        <!-- Blog Post 4 -->
                                        <div class="item post-2">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="View all posts in E-Commerce">UI</a>
                                                    </div>
                                                    <a href="blog-post-1.html">
                                                        <img src="{{asset('front/img/blog/blog_post_4.jpg')}}"
                                                            class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms"
                                                            title="" />
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">07 Jan 2020</div>
                                                    <a href="blog-post-1.html">
                                                        <h4 class="blog-item-title">An Overview of E-Commerce Platforms
                                                        </h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Blog Post 4 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                    </section>
                    <!-- End of Blog Subpage -->
                    
                </div>
            </div>

        </div>
    </div>

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