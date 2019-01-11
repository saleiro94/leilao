<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
            .footer {
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              background-color: #D1EBFF;
              color: black;
              text-align: center;
            }
            img {
            border-radius: 8px;
            margin-left:15px; 
            box-shadow: 3px 3px 3px -2px grey; 
             }
            </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        
        <div class="container" style="background-color: #D1EBFF; border:0.5px solid grey;">
            @include('inc.massages')
            <br>
            @yield('content')
            <br>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Footer -->
<footer class="page-footer font-small footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a> Leilões XPTO</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

</body>
</html>