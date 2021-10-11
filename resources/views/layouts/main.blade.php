<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
   <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
   <title>{{ $title }}</title>
</head>
<body class="line-numbers" {!! ($title == 'Dashboard') ? 'style="background: #fafafa;"' : '' !!}>
   <div id="container">
      @include('partials.navbar')

      @yield('container')
   </div>
   <script src="{{ asset('js/prism.js') }}"></script>
</body>
</html>