<!DOCTYPE html>
@if (app()->getlocale() == 'ar')
    @php
        $right = 'left';
        $left = 'right';
        $isRTL = true;
    @endphp
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
    @php
        $right = 'right';
        $left = 'left';
        $isRTL = false;

    @endphp
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CXstations</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!--  Seo -->
    @if (app()->getlocale() == "ar")
                <meta http-equiv="Content-Language" content="ar">
                <title>سي إكس إستيشن</title>
                <meta name="description" content="سي إكس إستيشن هو موقع يقدم خدمات متميزة لأصحاب العلامات التجارية لتحسين تجربة العملاء وضمان رضاهم. من خلال مجموعة متكاملة من الأدوات والخدمات المتطورة، يساعد الموقع العلامات التجارية في تحليل وفهم تفاعلات العملاء، مما يتيح لهم تقديم تجارب استثنائية وتعزيز الولاء للعلامة التجارية.">
                <meta name="keywords" content="سي إكس إستيشن هو موقع يقدم خدمات متميزة لأصحاب العلامات التجارية لتحسين تجربة العملاء وضمان رضاهم. من خلال مجموعة متكاملة من الأدوات والخدمات المتطورة، يساعد الموقع العلامات التجارية في تحليل وفهم تفاعلات العملاء، مما يتيح لهم تقديم تجارب استثنائية وتعزيز الولاء للعلامة التجارية.">

                @elseif (app()->getlocale() == "en")
                <meta http-equiv="Content-Language" content="en">
                <title>CXstations</title>
                <meta name="description" content="سي إكس إستيشن هو موقع يقدم خدمات متميزة لأصحاب العلامات التجارية لتحسين تجربة العملاء وضمان رضاهم. من خلال مجموعة متكاملة من الأدوات والخدمات المتطورة، يساعد الموقع العلامات التجارية في تحليل وفهم تفاعلات العملاء، مما يتيح لهم تقديم تجارب استثنائية وتعزيز الولاء للعلامة التجارية.">
                <meta name="keywords" content="Cx Stations provides exceptional services for brand owners, restaurants, and more to enhance customer experience and satisfaction. With a comprehensive suite of advanced tools and services, the platform helps businesses analyze and understand customer interactions, enabling them to deliver outstanding experiences and foster brand loyalty">
                @else
                <meta http-equiv="Content-Language" content="{{app()->getlocale() }}">
                <title>CXstations</title>
                <meta name="description" content="سي إكس إستيشن هو موقع يقدم خدمات متميزة لأصحاب العلامات التجارية لتحسين تجربة العملاء وضمان رضاهم. من خلال مجموعة متكاملة من الأدوات والخدمات المتطورة، يساعد الموقع العلامات التجارية في تحليل وفهم تفاعلات العملاء، مما يتيح لهم تقديم تجارب استثنائية وتعزيز الولاء للعلامة التجارية.">
                <meta name="keywords" content="Cx Stations provides exceptional services for brand owners, restaurants, and more to enhance customer experience and satisfaction. With a comprehensive suite of advanced tools and services, the platform helps businesses analyze and understand customer interactions, enabling them to deliver outstanding experiences and foster brand loyalty">
            @endif

                <link rel="alternate" hreflang="ar" href="https://cxstations.com/ar"  />
                <link rel="canonical" href="https://cxstations.com/en" />


    <!-- Favicons -->
    <link href="{{ asset('assets/img/img.png') }}" rel="icon">
    <link href="{{ asset('assets/img/img.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('assets/css/arabic.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @endif


    <!-- =======================================================
    * Template Name: FlexStart
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Updated: Jun 14 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>


<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top"
        dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
              <img src="{{ asset('assets/img/img.png') }}" alt="" style="width: 200px; height: 200px;">
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active"  style="font-size:18px">{{ trans('mycustom.home') }}</a></li>
                    <li><a href="#about" style="font-size:18px">{{ trans('mycustom.About') }}</a></li>
                    <li><a href="#services" style="font-size:18px">{{ trans('mycustom.Services') }}</a></li>
                    <li class="dropdown">
                        <a href="#" style="font-size:18px"><span>{{ trans('mycustom.Language') }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted flex-md-shrink-0" href="#contact">{{ trans('mycustom.Started') }}</a>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">{{ trans('mycustom.hero1') }}</h1>
                        <p data-aos="fade-up" data-aos-delay="100">{{ trans('mycustom.hero2') }}
                            </p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <!-- <a href="#about" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a> -->
                            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('assets/img/hero (1).png') }}" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h2>{{ trans('mycustom.About Us') }}</h2>
                            <p>{{ trans('mycustom.about1') }}</p>
                            <p>{{ trans('mycustom.about2') }}

                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>{{ trans('mycustom.about3') }}</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('assets/img/aboutt.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 style="font-size: 20px; margin-bottom: 30px;">{{ trans('mycustom.Join us') }}</h2>
                <p>{{ trans('mycustom.Join us1') }}<br></p>
            </div>
            <!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ asset('assets/img/1.png') }}" class="img-fluid" alt="">
                            <h3>{{ trans('mycustom.Join us2') }}</h3>
                            <p>{{ trans('mycustom.Join us3') }}</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="{{ asset('assets/img/2.png') }}" class="img-fluid" alt="">
                            <h3>{{ trans('mycustom.Join us4') }}</h3>
                            <p>{{ trans('mycustom.Join us5') }}
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="{{ asset('assets/img/3.png') }}" class="img-fluid" alt="">
                            <h3>{{ trans('mycustom.Join us6') }}</h3>
                            <p>{{ trans('mycustom.Join us7') }}
                                </p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Values Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-cash-stack color-green flex-shrink-0"></i>
                            <div  style="margin-right: 20px;">
                                <!-- <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span> -->
                                <p>{{ trans('mycustom.stats1') }}
                                    </p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-credit-card-2-front color-purple flex-shrink-0"
                                style="color: #ee6c20;"></i>
                            <div  style="margin-right: 20px;">
                                <!-- <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span> -->
                                <p>{{ trans('mycustom.stats2') }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-chat-dots color-green flex-shrink-0" style="color: #15be56;"></i>
                            <br>
                            <div  style="margin-right: 20px;">
                                <!-- <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span> -->
                                <p>{{ trans('mycustom.stats3') }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-gift color-blue flex-shrink-0" style="color: #bb0852;"></i>
                            <div  style="margin-right: 20px;">
                                <!-- <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span> -->
                                <p>{{ trans('mycustom.stats4') }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>{{ trans('mycustom.features1') }} </h2>
              <p>{{ trans('mycustom.features2') }}<br></p>
            </div><!-- End Section Title -->

            <div class="container">

              <div class="row gy-5">

                <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                  <img src="{{ asset('assets/img/features (2).png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-6 d-flex">
                  <div class="row align-self-center gy-4">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check" ></i> <!-- يمكنك تعديل 20px حسب المسافة التي تفضلها -->
                            <h3 style="margin-right: 20px;">{{ trans('mycustom.features3') }}</h3>
                        </div>
                    </div>

                    <!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                      <div class="feature-box d-flex align-items-center">
                        <i class="bi bi-check"></i>
                        <h3 style="margin-right: 20px;">{{ trans('mycustom.features4') }}</h3>
                      </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                      <div class="feature-box d-flex align-items-center">
                        <i class="bi bi-check"></i>
                        <h3 style="margin-right: 20px;">{{ trans('mycustom.features5') }}</h3>
                      </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                      <div class="feature-box d-flex align-items-center">
                        <i class="bi bi-check"></i>
                        <h3 style="margin-right: 20px;">{{ trans('mycustom.features6') }}</h3>
                      </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                      <div class="feature-box d-flex align-items-center">
                        <i class="bi bi-check"></i>
                        <h3 style="margin-right: 20px;">{{ trans('mycustom.features7') }}
                          </h3>
                      </div>
                    </div><!-- End Feature Item -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                      <div class="feature-box d-flex align-items-center">
                        <i class="bi bi-check"></i>
                        <h3 style="margin-right: 20px;">{{ trans('mycustom.features8') }}</h3>
                      </div>
                    </div><!-- End Feature Item -->

                  </div>
                </div>

              </div>

            </div>

          </section>
        <!-- /Features Section -->

        <section id="alt-features" class="alt-features section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

                        <div class="row align-self-center gy-5">

                            <div class="col-md-6 icon-box">
                                <i class="bi bi-people"></i>
                                <div style="margin-right: 20px;">
                                    <h4>{{ trans('mycustom.mobile1') }}</h4>
                                    <p >{{ trans('mycustom.mobile2') }}
                                        </p>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-6 icon-box">
                                <i class="bi bi-shield-lock"></i>
                                <div style="margin-right: 20px;">
                                    <h4>{{ trans('mycustom.mobile3') }}</h4>
                                    <p>{{ trans('mycustom.mobile4') }}
                                        </p>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-6 icon-box">
                                <i class="bi bi-headset"></i>
                                <div style="margin-right: 20px;">
                                    <h4>{{ trans('mycustom.mobile5') }}</h4>
                                    <p>{{ trans('mycustom.mobile6') }}
                                       </p>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-6 icon-box">
                                <i class="bi bi-share"></i>
                                <div style="margin-right: 20px;">
                                    <h4>{{ trans('mycustom.mobile11') }}</h4>
                                    <p>{{ trans('mycustom.mobile12') }}
                                       </p>
                                </div>
                            </div><!-- End Feature Item -->

                            {{-- <div class="col-md-6 icon-box">
                                <i class="bi bi-bar-chart"></i>
                                <div style="margin-right: 20px;">
                                    <h4>{{ trans('mycustom.mobile9') }}</h4>
                                    <p>{{ trans('mycustom.mobile10') }}



                                    </p>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-6 icon-box">
                                <i class="bi bi-pie-chart"></i>
                                <div style="margin-right: 20px;">
                                    <h4>{{ trans('mycustom.mobile11') }}</h4>
                                    <p>{{ trans('mycustom.mobile12') }}
                                      </p>
                                </div>
                            </div><!-- End Feature Item --> --}}

                        </div>

                    </div>

                    <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up"
                        data-aos-delay="100">
                        <img src="{{ asset('assets/img/PHONE.png') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>

        </section>
        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 style="font-size: 20px; margin-bottom: 30px;">{{ trans('mycustom.Advantages') }}</h2>
                <p>{{ trans('mycustom.Check Our advantages') }}<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <i class="bi bi-chat-left-dots icon"></i>
                            <h3>{{ trans('mycustom.services1') }}</h3>
                            <p>{{ trans('mycustom.services2') }}

                            </p>
                            {{-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-broadcast icon"></i>
                            <h3>{{ trans('mycustom.services3') }}</h3>
                            <p>{{ trans('mycustom.services4') }}</p>
                            {{-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <i class="bi bi-people icon"></i>
                            <h3>{{ trans('mycustom.services5') }}</h3>
                            <p>{{ trans('mycustom.services6') }}</p>
                            {{-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <i class="bi bi-emoji-laughing icon"></i>
                            <h3>{{ trans('mycustom.services7') }}</h3>
                            <p>{{ trans('mycustom.services8') }}</p>
                            {{-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <i class="bi bi-chat-left-text icon"></i>
                            <h3>{{ trans('mycustom.services9') }}</h3>
                            <p>{{ trans('mycustom.services10') }}</p>
                            {{-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <i class="bi bi-graph-up-arrow icon"></i>
                            <h3>{{ trans('mycustom.services11') }} </h3>
                            <p>{{ trans('mycustom.services12') }}
                                </p>
                            {{-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section>
        <section id="alt-features" class="alt-features section">
            <div class="container section-title" data-aos="fade-up">
                   <h2>{{ trans('mycustom.Alt Features1') }}</h2>
                   <p>{{ trans('mycustom.Alt Features2') }}  <br></p>
                   <h4>{{ trans('mycustom.Alt Features3') }}
                     </h4>
                 </div>
                 <div class="container">

                   <div class="row gy-5">

                     <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

                       <div class="row align-self-center gy-5">

                         <div class="col-md-6 icon-box">
                           <i class="bi bi-award"></i>
                           <div>
                             <h4>{{ trans('mycustom.Alt Features4') }}
                               </h4>
                             <p>{{ trans('mycustom.Alt Features5') }}</p>
                           </div>
                         </div><!-- End Feature Item -->

                         <div class="col-md-6 icon-box">
                           <i class="bi bi-card-checklist"></i>
                           <div>
                             <h4>{{ trans('mycustom.Alt Features6') }}</h4>
                             <p>{{ trans('mycustom.Alt Features7') }}
                               </p>
                           </div>
                         </div><!-- End Feature Item -->

                         <div class="col-md-6 icon-box">
                           <i class="bi bi-dribbble"></i>
                           <div>
                             <h4>{{ trans('mycustom.Alt Features8') }}
                               </h4>
                             <p>{{ trans('mycustom.Alt Features9') }} </p>
                           </div>
                         </div><!-- End Feature Item -->

                         <div class="col-md-6 icon-box">
                           <i class="bi bi-filter-circle"></i>
                           <div>
                             <h4>{{ trans('mycustom.Alt Features10') }} </h4>
                             <p>{{ trans('mycustom.Alt Features11') }}
                              </p>
                           </div>
                         </div><!-- End Feature Item -->

                         <div class="col-md-6 icon-box">
                           <i class="bi bi-lightning-charge"></i>
                           <div>
                             <h4>{{ trans('mycustom.Alt Features12') }} </h4>
                             <p>{{ trans('mycustom.Alt Features13') }}

                             </p>
                           </div>
                         </div><!-- End Feature Item -->

                         <div class="col-md-6 icon-box">
                           <i class="bi bi-patch-check"></i>
                           <div>
                             <h4>{{ trans('mycustom.Alt Features14') }}</h4>
                             <p>{{ trans('mycustom.Alt Features15') }}</p>
                           </div>
                         </div><!-- End Feature Item -->

                       </div>

                     </div>

                     <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
                       <img src="{{ asset('assets/img/sections.png') }}" class="img-fluid" alt="">
                     </div>

                   </div>

                 </div>

               </section>
        <!-- /Services Section -->

        {{-- <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Check Our Affordable Pricing<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-tem">
              <h3 style="color: #20c997;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <div class="icon">
                <i class="bi bi-box" style="color: #20c997;"></i>
              </div>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-tem">
              <span class="featured">Featured</span>
              <h3 style="color: #0dcaf0;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <div class="icon">
                <i class="bi bi-send" style="color: #0dcaf0;"></i>
              </div>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-tem">
              <h3 style="color: #fd7e14;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <div class="icon">
                <i class="bi bi-airplane" style="color: #fd7e14;"></i>
              </div>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-tem">
              <h3 style="color: #0d6efd;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <div class="icon">
                <i class="bi bi-rocket" style="color: #0d6efd;"></i>
              </div>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

        </div><!-- End pricing row -->

      </div>

    </section><!-- /Pricing Section --> --}}

        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>{{ trans('mycustom.faq1') }}</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>{{ trans('mycustom.faq2') }}</h3>
                                <div class="faq-content">
                                    <p> {{ trans('mycustom.faq3') }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>{{ trans('mycustom.faq4') }}</h3>
                                <div class="faq-content">
                                    <p>{{ trans('mycustom.faq5') }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>{{ trans('mycustom.faq6') }}</h3>
                                <div class="faq-content">
                                    <p>{{ trans('mycustom.faq7') }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">

                            <div class="faq-item">
                                <h3>{{ trans('mycustom.faq8') }}</h3>
                                <div class="faq-content">
                                    <p>{{ trans('mycustom.faq9') }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>{{ trans('mycustom.faq10') }}</h3>
                                <div class="faq-content">
                                    <p>{{ trans('mycustom.faq11') }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>{{ trans('mycustom.faq12') }}</h3>
                                <div class="faq-content">
                                    <p>{{ trans('mycustom.faq13') }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section>
        <!-- /Faq Section -->


        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>{{ trans('mycustom.Testimonials1') }}</h2>
            <p>{{ trans('mycustom.Testimonials2') }}<br></p>
          </div><!-- End Section Title -->

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 3,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>{{ trans('mycustom.Testimonials3') }}

                    </p>
                    <div class="profile mt-auto">
                      <img src="{{asset('assets/img/Team page-amico.png')}}" class="testimonial-img" alt="">
                      <h3>{{ trans('mycustom.Testimonials4') }}</h3>

                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>{{ trans('mycustom.Testimonials5') }}

                    </p>
                    <div class="profile mt-auto">
                      <img src="{{asset('assets/img/Team work-amico.png')}}" class="testimonial-img" alt="">
                      <h3>{{ trans('mycustom.Testimonials6') }}</h3>

                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>{{ trans('mycustom.Testimonials7') }}

                    </p>
                    <div class="profile mt-auto">
                      <img src="{{asset('assets/img/Team goals-amico.png')}}" class="testimonial-img" alt="">
                      <h3>{{ trans('mycustom.Testimonials8') }}</h3>

                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>{{ trans('mycustom.Testimonials9') }}

                    </p>
                    <div class="profile mt-auto">
                      <img src="{{asset('assets/img/1.jfif')}}" class="testimonial-img" alt="">
                      <h3>{{ trans('mycustom.Testimonials10') }}</h3>

                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>{{ trans('mycustom.Testimonials11') }}

                    </p>
                    <div class="profile mt-auto">
                      <img src="{{asset('assets/img/2.jfif')}}" class="testimonial-img" alt="">
                      <h3>{{ trans('mycustom.Testimonials12') }}</h3>

                    </div>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </section>



        {{-- <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our hard working team</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section --> --}}

        {{-- <!-- Clients Section -->
    <section id="clients" class="clients section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>We work with best clients<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section --> --}}

        {{-- <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Posts</h2>
        <p>Recent posts form our Blog</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

        </div>

      </div>

    </section><!-- /Recent Posts Section --> --}}

        <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ trans('mycustom.contact1') }}</h2>
        <p>{{ trans('mycustom.contact2') }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>{{ trans('mycustom.contact3') }}</h3>
                  <p>{{ trans('mycustom.contact4') }}</p>
                  <p>{{ trans('mycustom.contact5') }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>{{ trans('mycustom.contact6') }}</h3>
                  <p>{{ trans('mycustom.contact7') }}</p>

                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>{{ trans('mycustom.contact8') }}</h3>
                  <p>{{ trans('mycustom.contact9') }}</p>

                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                    <i class="bi bi-telephone"></i>
                  <h3>{{ trans('mycustom.contact10') }}</h3>
                  <p>{{ trans('mycustom.contact11') }}</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="{{ trans('mycustom.name') }}" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="{{ trans('mycustom.email') }}" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="{{ trans('mycustom.subject') }}" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="{{ trans('mycustom.message') }}" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit">{{ trans('mycustom.contact12') }}</button>
                    <div id="loadingMessage" class="loading" style="display: none;">Loading...</div>
                    <div id="errorMessage" class="error-message" style="background-image: linear-gradient(to right, green, green);"></div>
                    <div id="sentMessage" class="sent-message" style="display: none;">Your message has been sent. Thank you!</div>
                    {{-- <button type="submit" style="background-image: linear-gradient(to right, #F0A500, orange);">تم ارسال الايميل بنجاح</button> --}}
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">



    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">{{ trans('mycustom.footer1') }}</span>
          </a>
          <div class="footer-contact pt-3">
            <p>{{ trans('mycustom.contact4') }}</p>
            <p>{{ trans('mycustom.contact5') }}</p>
            <p class="mt-3"><strong>{{ trans('mycustom.contact2') }}</strong> <span>+966 560 509 388</span></p>
            <p><strong>{{ trans('mycustom.contact8') }}</strong> <span>info@cxstations.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{ trans('mycustom.Useful Links') }}</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ trans('mycustom.home') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ trans('mycustom.About') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ trans('mycustom.Services') }}</a></li>
            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li> --}}
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{ trans('mycustom.Services') }}</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ trans('mycustom.services3') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ trans('mycustom.services7') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ trans('mycustom.services5') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ trans('mycustom.services9') }}</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>{{ trans('mycustom.FollowUs') }}</h4>
          {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> --}}
          <div class="social-links d-flex">
            <a href="https://x.com/cxstations"><i class="bi bi-twitter-x"></i></a>
            {{-- <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a> --}}
            <a href="https://www.linkedin.com/company/cx-station-sa/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>{{ trans('mycustom.Copyright') }}</span> <strong class="px-1 sitename">{{ trans('mycustom.footer1') }}</strong> <span>{{ trans('mycustom.All Rights Reserved') }}</span></p>
      <div class="credits">

      </div>
    </div>

  </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>



</body>

</html>
