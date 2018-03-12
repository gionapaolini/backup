<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://use.fontawesome.com/491f48ffdc.js"></script>
<link href="https://use.fontawesome.com/491f48ffdc.css" media="all" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
          @include('inc.messages')
          @yield('content')
        </div>
        @include('inc.footer')
    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.0/p5.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.0/addons/p5.dom.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/js/generateColSquare.js"></script>
    <script src="/js/websiteLogic.js"></script>
   <script>
       CKEDITOR.replace( 'article-ckeditor' );
   </script>
</body>
</html>
