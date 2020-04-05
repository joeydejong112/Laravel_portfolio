@extends('layouts.app')

@section('content')

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset('img/profile-img.jpg')}}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Joey de Jong</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="//github.com/529521" class="github"><i class="bx bxl-github"></i></a>
                <a href="//linkedin.com/in/joeydejong12/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>Over mij</span></a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>CV</span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> Projecten</a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact gegevens</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>Joey de Jong</h1>
        <p>Ik ben een  <span class="typed" data-typed-items="Web Developer , Developer"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Over mij</h2>
                <p>Hallo mijn naam is Joey de Jong, Ik ben 19 jaar oud en progammer graag </p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset('img/profile-img.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Web Developer.</h3>
                    <p class="font-italic">

                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> Joeydejong12.nl</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Telefoon nummer:</strong> +31
                                    0614374491</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Woonplaats:</strong> Nieuwegein</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Leeftijd:</strong> 19 </li>

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Mbo diploma:</strong> Mee bezig</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Email adress:</strong>
                                    Joeydejong1112@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills / progress codeer talen</h2>

            </div>

            <div class="row skills-content">

                <div class="col-lg-6" data-aos="fade-up">
                    <div class="progress">
                        <span class="skill">PHP <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">Framework Laravel <i class="val">85%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>


                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>



                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">65%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>CV</h2>

            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sammenvating</h3>
                    <div class="resume-item pb-0">
                        <h4>Joey de Jong</h4>
                        <p><em>Gemotiveerd om meer te leren </em></p>
                        <ul>
                            <li>Nieuwegein</li>
                            <li>+31 0614374491</li>
                            <li>Joeydejong1112@gmail.com</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Onderwijs</h3>
                    <div class="resume-item">
                        <h4>Grafisch lyceum Utrecht</h4>
                        <h5>2018 - NOW</h5>
                        <p><em>Mediadeveloper</em></p>
                        <p></p>
                    </div>
                    <div class="resume-item">
                        <h4>Oosterlicht college Nieuwegein</h4>
                        <h5>2015 - 2017</h5>
                        <p><em>Vmbo</em></p>
                        <p></p>
                    </div>

                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Werk evaring</h3>
                    <div class="resume-item">
                        <h4>Bezorger Shabu to go</h4>
                        <h5>2019 - NOW</h5>
                        <p><em>Nieuwegein </em></p>
                        <ul>
                            <li>Bezorger van chinees en japans eten</li>

                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Vakkenvuller Albert theijn</h4>
                        <h5>2017 - 2018</h5>
                        <p><em>Nieuwegein</em></p>
                        <ul>
                            <li>Het vullen van de schappen bij Ablert Theijn</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Projecten</h2>
                <p>Hier staan me projecten waar ik mee bezig ben.</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('img/portfolio/wall.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('img/portfolio/wall.png')}}" data-gall="portfolioGallery" class="venobox"
                                title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="//github.com/529521/Bureau-Walloffame" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact gegevens</h2>

            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-8 d-flex align-items-stretch" style="margin: 0 auto;">
                    <div class="info">


                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>Joeydejong1112@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Telefoon:</h4>
                            <p>+31 0614374491</p>
                        </div>
                        <div class="github">
                          <i class="icofont-github"></i>                            
                          <h4>Github:</h4>
                            <a href="//github.com/529521"><p>Klik hier!</p></a>
                        </div>
                        <div class="linkedin">
                           <i class="icofont-linkedin"></i>
                            <h4>Linkedin:</h4>
                           <a href="///linkedin.com/in/joeydejong12/"> <p>Klik hier!</p></a>
                        </div>


                    </div>

                </div>


            </div>

        </div>
    </section>

</main>




@endsection
