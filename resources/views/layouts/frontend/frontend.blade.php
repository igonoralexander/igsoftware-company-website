<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-336GFKWVYM"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-336GFKWVYM');
    </script>
    
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Web Design, How to achieve online goals, How to develop a software, IG Software Nig, Software Nig, Software, Software Development, Website Development Company, Website Design solutions, Website Design" name="keywords">
    <meta name="description" content="{{ $metaDescription }}">

    <meta name="google-site-verification" content="bzuTqWQ_BJK5F2eX2OKe-uvh5Mlcp5o0ICTz32H7teg" />
    
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('design/img/iglogo.png' ) }} ">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset ('design/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset ('design/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset ('design/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset ('design/css/style.css') }}" rel="stylesheet">

    <style>
        .whatsapp-chat
            {
                bottom: 20px;
                left: 20px;
                position: fixed;
            }
    </style>
    
    @yield('style')
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11011902529"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-11011902529');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1139729314065943"
         crossorigin="anonymous"></script>
    
</head>

<body>

    @include('layouts.frontend.inc.header')

    @include('layouts.frontend.inc.nav')


    @yield('content')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    @include('layouts.frontend.inc.footer')

    <div class="whatsapp-chat">
        <a href = "https://wa.me/+2349070111277?text=I'm%20interested%20in%20designing%20a%20website." target = "_blank">
            <img src = "{{asset ('design/img/chat.png') }}" alt = "whatsapp-logo" height = "55px" width = "55px">
        </a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset ('design/lib/easing/easing.min.js') }}"></script>
    <script src="{{asset ('design/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{asset ('design/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{asset ('design/lib/lightbox/js/lightbox.min.js') }}"></script>


    <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/64770b2fad80445890f0260f/1h1og7cue';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
    <!--End of Tawk.to Script-->

    <!-- Template Javascript -->
    <script src="{{asset ('design/js/main.js') }}"></script>
</body>

</html>