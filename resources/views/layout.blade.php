<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Escuela Técnica | @yield('title', '')</title>
        
            <!-- Fonts -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
            <link rel="stylesheet" href="css/layouts/navbar.css">
            <link rel="stylesheet" href="css/layouts/footer.css">
            <link rel="stylesheet" type="text/css" href="css/bases/common.css">
            
        @yield('extra-css')
    </head>
    <body id="page-top">
        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        @yield('extra-js')
    </body>
</html>