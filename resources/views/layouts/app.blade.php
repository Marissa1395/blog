<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="width=device-width, initial-scale=1"">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blog</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="row">
            @include('layouts.header')
        </header>
        <div id="main" class="row">
                @yield('content')
        </div>
        <footer class="row">
            @include('layouts.footer')
        </footer>
    </div>
    <script>
        const tl = gsap.timeline({ defaults: { duration: 1 } });
        tl.from(".blog-container", { y: -50, opacity: 0, stagger: 0.4 })
          .from(".prjct-items", { y: -50, opacity: 0, stagger: 0.4 })
          .from(".anim1", { y: -50, opacity: 0, stagger: 0.4 })
          .from(".profile .info", { y: -50, opacity: 0, stagger: 0.4 });
      
        // SLIDER
          $('.carousel').slick({
            slidesToShow: 3,
            dots:true,
            centerMode: true,
            autoplay: true,
            autoplaySpeed: 2000,
            });
      </script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
</body>
</html>