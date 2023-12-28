<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tesco Global mall</title>
        <meta name="keywords" content="HTML5 Template">
        <meta name="description" content="TescoGlobalMall">
        <meta name="author" content="p-themes">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/images/icons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
        <link rel="icon" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
        <link rel="manifest" href="{{asset('frontend/assets/images/icons/site.html')}}">
        <link rel="mask-icon" href="{{asset('frontend/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
        <link rel="shortcut icon" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
        <meta name="apple-mobile-web-app-title" content="">
        <meta name="application-name" content="">
        <meta name="msapplication-TileColor" content="#cc9966">
        <meta name="msapplication-config" content="{{asset('frontend/assets/images/icons/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{asset('frontend/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/jquery.countdown.css')}}">
        <!-- Main CSS File -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/nouislider/nouislider.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/skins/skin-demo-13.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/demos/demo-13.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js" integrity="sha512-UOJe4paV6hYWBnS0c9GnIRH8PLm2nFK22uhfAvsTIqd3uwnWsVri1OPn5fJYdLtGY3wB11LGHJ4yPU1WFJeBYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- css --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @livewireStyles
    
    </head>
    <body class="antialiased">
        @livewire('cart-component')
    </body>
</html>
