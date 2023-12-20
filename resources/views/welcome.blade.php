@extends('layout')
@section('title')
Home {{ $settings->where('key','name')->first()->value??'' }}
@endsection
@section('content')
<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
                <div class="header-photo">
                    <img src="{{ asset('images/logo.png')}}" alt="Alex Smith">
                </div>
                <div class="header-titles">
                    <h2>{{ $settings->where('key','name')->first()->value??'' }}</h2>
                    <h4>{{ $settings->where('key','address')->first()->value??'' }}</h4>
                </div>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#blog" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">Blog</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    <li><a href="{{ $settings->where('key','linkedin')->first()->value??'' }}" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="{{ $settings->where('key','facebook')->first()->value??'' }}" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ $settings->where('key','twitter')->first()->value??'' }}" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ $settings->where('key','instagram')->first()->value??'' }}" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="copyrights">© {{ date('Y') }} All rights reserved.</div>
        </header>
        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>
        <!-- End Arrows Nav -->
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
                                                        alt="Best Practices for Animated Progress Indicators"
                                                        title="" />
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
                                                        class="size-blog-masonry-image-two-c"
                                                        alt="An Overview of E-Commerce Platforms" title="" />
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
@endsection