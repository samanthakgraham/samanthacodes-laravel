<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">
        <h1><a href="{{ url('/') }}">{{$personalInfo['first_name']}} {{$personalInfo['last_name']}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        <h2>Full-stack <span>PHP web developer</span> and <span>IT manager</span> based in {{$personalInfo['city']}}</h2>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        <div class="social-links">
            <a href="{{$personalInfo['github']}}" target="_blank" class="github"><i class="icofont-github"></i></a>
            <a href="{{$personalInfo['linkedin']}}" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
        </div>
    </div>
</header><!-- End Header -->
