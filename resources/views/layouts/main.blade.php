<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rms</title>
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('custom/style.css') }}">
</head>
<body>
         <div class = "nav">
              {!! menu('main') !!}
         </div>

         <div class = "container container-list">
                @yield('content')
         </div>



</body>
</html>