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
              @yield('navigation')
         </div>

         <div class = "container">
                @yield('content')
         </div>



</body>
</html>