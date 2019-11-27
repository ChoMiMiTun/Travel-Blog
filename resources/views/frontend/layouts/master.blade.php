<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="YCvSHTAeJLqXwEfzUVCgYgNcRQCD2XXzE1D9sMHy">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>

h1, h4, h5{
            font-family: 'Roboto Slab', serif;
        }

.bg-white{
    padding: 25px 0;
}

.home-title{
    text-align:center;
    margin-bottom:30px;
}

.navbar-nav .nav-item {
    font-family: 'Roboto Slab', serif;
    font-weight: 600;
    font-size: 16px;
}

.navbar-light .navbar-nav .active>.nav-link{
    color: #3490dc;
}

.mr-auto .nav-item{
    padding: 0 10px;
    
}

#footer{
    color: #fff;
}

.footer-section{
    padding: 60px 0;
}

.footer-bg{
    /* background: url('images/footer-bg.jpg')no-repeat center; */
    
    background: url( {{ asset('images/footer-bg.jpg') }} );
    background-repeat: no-repeat;
    background-position: center;
}

.footer-widget{
    margin-bottom: 20px;
}

.social-links a{
    width: 100px;
    height: 100px;
    background: #3490dc;
    padding: 4px 8px;
    border-radius: 30px;
    color: #fff;
}

.social-links a:hover{
    background: #005ba7;
}

.py-4{
    padding: 40px 0!important;
}

.copyright{
    margin-top: 40px;
}

.social h4{
    margin-bottom: 20px;
}

.footer-content h4{
    margin-bottom: 20px;
}

</style>

</head>


<body class="homepage">
    <div id="app">
        
    @include('frontend.layouts.nav')

<!------------- Slider ------------>

@include('frontend.layouts.slider')

<!-------- End Slider ------------->


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>


    <div id="footer">
    @include('frontend.layouts.footer')
    </div>



</body>
</html>