
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Loops</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/docs/4.0/examples/dashboard/dashboard.css')}}" rel="stylesheet">
  </head>

  <body>
   @include('layouts.partials.nav')
   @include('layouts.partials.sidebar')
        
   @include('flash_message')
             @yield('content')
        
      </div>
    </div>

    <script src="{{ asset('assets/assets/js/vendor/jquery-3.2.1.slim.min.js') }}" ></script>
    
    <script>window.jQuery || document.write('<script src="{{ asset('assets/assets/js/vendor/jquery-3.2.1.slim.min.js') }}"><\/script>')</script>
    <script src="{{ asset('assets/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}"></script>

    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

   
  </body>
</html>
