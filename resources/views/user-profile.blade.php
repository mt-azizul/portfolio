@extends('layout')
@section('title')
{{ $user->full_name }} Profile
@endsection
@section('content')
<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
                <div class="header-photo">
                    <img src="{{asset($user->profic)}}" alt="{{ $user->full_name }}"
                        onerror="this.src='../../front/img/main_photo.jpg'">
                </div>
                <div class="header-titles">
                    <h2>{{ $user->full_name }}</h2>
                    <h4>{{ $user->profession }}</h4>
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
                        <span class="link-text">Projects</span>
                    </a>
                </li>
                <li>
                    <a href="#blog" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-anim">
                        <span class="menu-icon lnr lnr-envelope"></span>
                        <span class="link-text">Contact</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    @forelse ($user->socialMedia as $media )
                    <li><a href="{{ $media->link }}" target="_blank"><i class="{{ $media->icon }}"></i></a></li>
                    @empty
                    @endforelse
                </ul>
            </div>

            <div class="header-buttons">
                <a href="{{ route('cv.download',$user->id) }}" target="_blank" class="btn btn-primary">Download CV</a>
            </div>
            <br>
            <div>
                <a href="{{ url('/') }}" class="btn btn-primary"><span style="font-weight: bold;"
                        class="lnr lnr-arrow-left"></span></a>
            </div>

            <div class="copyrights">© {{ now()->format('Y') }} All rights reserved.</div>
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
                    <div class="section-content vcentered">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <h2>{{ $user->full_name }}</h2>
                                    <div class="owl-carousel text-rotation">
                                        <div class="item">
                                            {{-- <div class="sp-subtitle">Web Designer</div> --}}
                                            <div class="sp-subtitle">{{ $user->profession }}</div>
                                        </div>

                                        <div class="item">
                                            {{-- <div class="sp-subtitle">Frontend-developer</div> --}}
                                            <div class="sp-subtitle">{{ $user->profession }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section data-id="about-me" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>About <span>Me</span></h2>
                        </div>

                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <p>
                                    {{ $user->bio }}
                                </p>
                            </div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="info-list">
                                    <ul>
                                        <li>
                                            <span class="title">Age</span>
                                            <span class="value">{{ $user->age }}</span>
                                        </li>

                                        <li>
                                            <span class="title">Residence</span>
                                            <span class="value">{{ $user->residence }}</span>
                                        </li>

                                        <li>
                                            <span class="title">Address</span>
                                            <span class="value">{{ $user->address }}</span>
                                        </li>

                                        <li>
                                            <span class="title">e-mail</span>
                                            <span class="value">{{ $user->email }}</span>
                                        </li>

                                        <li>
                                            <span class="title">Phone</span>
                                            <span class="value">{{ $user->phone }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Personal Information -->

                        <div class="white-space-50"></div>

                        <!-- Services -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>What <span>I Do</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-store"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Ecommerce</h4>
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-laptop-phone"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Web Design</h4>
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-pencil"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Copywriting</h4>
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-flag"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Management</h4>
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Services -->

                        <div class="white-space-30"></div>

                        <!-- Testimonials -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>Testimonials</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="testimonials owl-carousel">
                                    <!-- Testimonial 1 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="{{asset('front/img/testimonials/testimonial-1.jpg')}}"
                                                alt="Alex Smith">
                                        </div>
                                        <div class="text">
                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.
                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo
                                                id ligula pellentesque, at vehicula dui ultrices.</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Julia Hickman</h4>
                                            <h5 class="company">Omni Source</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 1 -->

                                    <!-- Testimonial 2 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="{{asset('front/img/testimonials/testimonial-2.jpg')}}"
                                                alt="Alex Smith">
                                        </div>
                                        <div class="text">
                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.
                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo
                                                id ligula pellentesque, at vehicula dui ultrices.</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Robert Watkins</h4>
                                            <h5 class="company">Endicott Shoes</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 2 -->

                                    <!-- Testimonial 3 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="{{asset('front/img/testimonials/testimonial-3.jpg')}}"
                                                alt="Alex Smith">
                                        </div>
                                        <div class="text">
                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.
                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo
                                                id ligula pellentesque, at vehicula dui ultrices.</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Kristin Carroll</h4>
                                            <h5 class="company">Helping Hand</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 3 -->
                                </div>
                            </div>
                        </div>
                        <!-- End of Testimonials -->

                        <div class="white-space-50"></div>

                        <!-- Clients -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>Cilents</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="clients owl-carousel">

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{asset('front/img/clients/client-1.png')}}" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{asset('front/img/clients/client-2.png')}}" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{asset('front/img/clients/client-3.png')}}" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{asset('front/img/clients/client-4.png')}}" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{asset('front/img/clients/client-5.png')}}" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{asset('front/img/clients/client-6.png')}}" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="{{asset('front/img/clients/client-7.png')}}" alt="Logo">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Clients -->

                        <div class="white-space-50"></div>

                        <!-- Pricing -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">

                                <div class="block-title">
                                    <h3>Pricing</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 ">
                                <div class="fw-pricing clearfix row">

                                    <div class="fw-package-wrap col-md-6 ">
                                        <div class="fw-package">
                                            <div class="fw-heading-row">
                                                <span>Silver</span>
                                            </div>

                                            <div class="fw-pricing-row">
                                                <span>$64</span>
                                                <small>per month</small>
                                            </div>

                                            <div class="fw-button-row">
                                                <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>
                                            </div>

                                            <div class="fw-default-row">Lorem ipsum dolor</div>
                                            <div class="fw-default-row">Pellentesque scelerisque</div>
                                            <div class="fw-default-row">Morbi eu sagittis</div>
                                        </div>
                                    </div>

                                    <div class="fw-package-wrap col-md-6 highlight-col ">
                                        <div class="fw-package">
                                            <div class="fw-heading-row">
                                                <span>Gold</span>
                                            </div>

                                            <div class="fw-pricing-row">
                                                <span>$128</span>
                                                <small>per month</small>
                                            </div>

                                            <div class="fw-button-row">
                                                <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                                            </div>

                                            <div class="fw-default-row">Lorem ipsum dolor</div>
                                            <div class="fw-default-row">Pellentesque scelerisque</div>
                                            <div class="fw-default-row">Morbi eu sagittis</div>
                                            <div class="fw-default-row">Donec non diam</div>
                                            <div class="fw-default-row"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Pricing -->

                        <div class="white-space-50"></div>

                        <!-- Fun Facts -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">

                                <div class="block-title">
                                    <h3>Fun <span>Facts</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-heart"></i>
                                    <h4>Happy Clients</h4>
                                    <span class="fun-fact-block-value">578</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-clock"></i>
                                    <h4>Working Hours</h4>
                                    <span class="fun-fact-block-value">4,780</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 ">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-star"></i>
                                    <h4>Awards Won</h4>
                                    <span class="fun-fact-block-value">15</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Fun Facts -->

                    </div>
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section data-id="resume" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Resume</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-7">

                                <div class="block-title">
                                    <h3>Education</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    @forelse ($user->educations as $education)
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">{{$education->end_year}}</h5>
                                            <span class="item-company">{{ $education->institution }}</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">{{ $education->degree }}</h4>
                                            <p>{{ $education->field_of_study }}</p>
                                        </div>
                                    </div>
                                    @empty

                                    @endforelse

                                </div>

                                <div class="white-space-50"></div>

                                <div class="block-title">
                                    <h3>Experience</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">

                                    @forelse ($user->experiences as $experience)
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">{{ $experience->start_year}} - {{
                                                $experience->end_year }}</h5>
                                            <span class="item-company">{{ $experience->company }}</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">{{ $experience->title }}</h4>
                                            <p>{{ $experience->description }}</p>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>

                            </div>

                            <!-- Skills & Certificates -->
                            <div class="col-xs-12 col-sm-5">
                                <!-- Design Skills -->
                                <div class="block-title">
                                    <h3>Skills <span></span></h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill 1 -->
                                    @forelse ($user->skills as $skill )
                                    <div class="skill clearfix">
                                        <h4>{{ $skill->name }}</h4>
                                        <div class="skill-value">{{ $skill->level }}%</div>
                                        @php
                                        $width = $skill->level."% !important";
                                        @endphp
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage" style="width:{{ $width }}"></div>
                                    </div>
                                    @empty

                                    @endforelse
                                    <!-- End of Skill 1 -->

                                </div>
                                <!-- End of Design Skills -->

                                {{-- <div class="white-space-10"></div> --}}

                                <!-- Coding Skills -->
                                {{-- <div class="block-title">
                                    <h3>Coding <span>Skills</span></h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <div class="skill clearfix">
                                        <h4>JavaScript</h4>
                                        <div class="skill-value">95%</div>
                                    </div>
                                    <div class="skill-container skill-5">
                                        <div class="skill-percentage"></div>
                                    </div>
                                </div> --}}
                                <!-- End of Coding Skills -->

                                {{-- <div class="white-space-10"></div> --}}

                                <!-- Knowledges -->
                                {{-- <div class="block-title">
                                    <h3>Knowledges</h3>
                                </div>

                                <ul class="knowledges">
                                    <li>Marketing</li>
                                    <li>Print</li>
                                    <li>Digital Design</li>
                                    <li>Social Media</li>
                                    <li>Time Management</li>
                                    <li>Communication</li>
                                    <li>Problem-Solving</li>
                                    <li>Social Networking</li>
                                    <li>Flexibility</li>
                                </ul> --}}
                                <!-- End of Knowledges -->
                            </div>
                            <!-- End of Skills & Certificates -->
                        </div>

                        <div class="white-space-50"></div>

                        <!-- Certificates -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>Certificates</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Certificate 1 -->
                            @forelse ($user->certifications as $certificate )
                            <div class="col-xs-12 col-sm-6">
                                <div class="certificate-item clearfix">
                                    <div class="certi-logo">
                                        <img src="{{asset('front/img/clients/client-1.png')}}" alt="logo">
                                    </div>

                                    <div class="certi-content">
                                        <div class="certi-title">
                                            <h4>{{ $certificate->name }}</h4>
                                        </div>
                                        <div class="certi-id">
                                            {{-- <span>Membership ID: XXXX</span> --}}
                                        </div>
                                        <div class="certi-date">
                                            <span>{{ date('d M Y ', strtotime($certificate->issued_date)) }}</span>
                                            {{-- <span>19 April 2018</span> --}}
                                        </div>
                                        <div class="certi-company">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty

                            @endforelse
                            <!-- End of Certificate 1 -->

                        </div>
                        <!-- End of Certificates -->
                    </div>
                </section>
                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <section data-id="portfolio" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Projects</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <!-- Portfolio Content -->
                                <div class="portfolio-content">

                                    {{-- <ul class="portfolio-filters">
                                        <li class="active">
                                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link"
                                                data-group="category_detailed">Detailed</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link"
                                                data-group="category_mockups">Mockups</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link"
                                                data-group="category_soundcloud">SoundCloud</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link"
                                                data-group="category_vimeo-videos">Vimeo Videos</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link"
                                                data-group="category_youtube-videos">YouTube Videos</a>
                                        </li>
                                    </ul> --}}

                                    <!-- Portfolio Grid -->
                                    <div class="portfolio-grid three-columns">

                                        {{-- <figure class="item lbaudio"
                                            data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="{{asset('front/img/portfolio/1.jpg')}}" alt="SoundCloud Audio"
                                                    title="" />
                                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true"
                                                    class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                                            </div>

                                            <i class="fa fa-volume-up"></i>
                                            <h4 class="name">SoundCloud Audio</h4>
                                            <span class="category">SoundCloud</span>
                                        </figure> --}}
                                        @forelse ($user->projects as $project )
                                        <figure class="item standard"
                                            data-groups='["category_all", "category_detailed"]'>
                                            <div class="portfolio-item-img">
                                                <img src="{{asset('front/img/portfolio/2.jpg')}}" alt="Media Project 2"
                                                    title="" />
                                                <a href="{{ $project->live_link??$project->repo_link }}"
                                                    target="_blank"></a>
                                            </div>

                                            <i class="far fa-file-alt"></i>
                                            <h4 class="name">{{ $project->title }}</h4>
                                            <span class="category">{{ $project->title }}</span>
                                        </figure>
                                        @empty

                                        @endforelse

                                        {{-- <figure class="item lbvideo"
                                            data-groups='["category_all", "category_vimeo-videos"]'>
                                            <div class="portfolio-item-img">
                                                <img src="{{asset('front/img/portfolio/3.jpg')}}" alt="Vimeo Video 1"
                                                    title="" />
                                                <a href="https://player.vimeo.com/video/158284739"
                                                    class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                                            </div>

                                            <i class="fas fa-video"></i>
                                            <h4 class="name">Vimeo Video 1</h4>
                                            <span class="category">Vimeo Videos</span>
                                        </figure>

                                        <figure class="item standard"
                                            data-groups='["category_all", "category_detailed"]'>
                                            <div class="portfolio-item-img">
                                                <img src="{{asset('front/img/portfolio/4.jpg')}}" alt="Media Project 1"
                                                    title="" />
                                                <a href="portfolio-1.html" class="ajax-page-load"></a>
                                            </div>

                                            <i class="far fa-file-alt"></i>
                                            <h4 class="name">Detailed Project 1</h4>
                                            <span class="category">Detailed</span>
                                        </figure>

                                        <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                                            <div class="portfolio-item-img">
                                                <img src="{{asset('front/img/portfolio/5.jpg')}}" alt="Mockup Design 1"
                                                    title="" />
                                                <a class="lightbox" title="Mockup Design 1"
                                                    href="img/portfolio/full/5.jpg')}}"></a>
                                            </div>

                                            <i class="far fa-image"></i>
                                            <h4 class="name">Mockup Design 1</h4>
                                            <span class="category">Mockups</span>
                                        </figure>

                                        <figure class="item lbvideo"
                                            data-groups='["category_all", "category_youtube-videos"]'>
                                            <div class="portfolio-item-img">
                                                <img src="{{asset('front/img/portfolio/6.jpg')}}" alt="YouTube Video 1"
                                                    title="" />
                                                <a href="https://www.youtube.com/embed/bg0gv2YpIok"
                                                    class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                                            </div>

                                            <i class="fas fa-video"></i>
                                            <h4 class="name">YouTube Video 1</h4>
                                            <span class="category">YouTube Videos</span>
                                        </figure> --}}
                                    </div>
                                </div>
                                <!-- End of Portfolio Content -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Portfolio Subpage -->

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

                <!-- Contact Subpage -->
                <section data-id="contact" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Contact</h2>
                        </div>

                        <div class="row">
                            <!-- Contact Info -->
                            <div class="col-xs-12 col-sm-4">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-map-marker"></i>
                                    <h4>{{ $user->city }}</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <h4>{{ $user->phone }}</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-envelope"></i>
                                    <h4>{{ $user->email }}</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-checkmark-circle"></i>
                                    <h4>Freelance Available</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>


                            </div>
                            <!-- End of Contact Info -->

                            <!-- Contact Form -->
                            <div class="col-xs-12 col-sm-8">
                                {{-- <div class="map" id="map"> --}}
                                    <div class="map" id="">
                                        <iframe class="col-12"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40054.41152013551!2d-122.44476020966536!3d37.76455608450598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1702976789622!5m2!1sen!2sbd"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="block-title">
                                        <h3>How Can I <span>Help You?</span></h3>
                                    </div>

                                    <form id="contact_form" class="contact-form" action="contact_form/contact_form.php"
                                        method="post">

                                        <div class="messages"></div>

                                        <div class="controls two-columns">
                                            <div class="fields clearfix">
                                                <div class="left-column">
                                                    <div class="form-group form-group-with-icon">
                                                        <input id="form_name" type="text" name="name"
                                                            class="form-control" placeholder="" required="required"
                                                            data-error="Name is required.">
                                                        <label>Full Name</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group form-group-with-icon">
                                                        <input id="form_email" type="email" name="email"
                                                            class="form-control" placeholder="" required="required"
                                                            data-error="Valid email is required.">
                                                        <label>Email Address</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    <div class="form-group form-group-with-icon">
                                                        <input id="form_subject" type="text" name="subject"
                                                            class="form-control" placeholder="" required="required"
                                                            data-error="Subject is required.">
                                                        <label>Subject</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="right-column">
                                                    <div class="form-group form-group-with-icon">
                                                        <textarea id="form_message" name="message" class="form-control"
                                                            placeholder="" rows="7" required="required"
                                                            data-error="Please, leave me a message."></textarea>
                                                        <label>Message</label>
                                                        <div class="form-control-border"></div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="g-recaptcha"
                                                data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>

                                            <input type="submit" class="button btn-send" value="Send message">
                                        </div>
                                    </form>
                                </div>
                                <!-- End of Contact Form -->
                            </div>

                        </div>
                </section>
                <!-- End of Contact Subpage -->
            </div>
        </div>

    </div>
</div>
@endsection