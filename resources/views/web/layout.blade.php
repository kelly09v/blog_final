<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=nunito">
    <link href="https://fonts.bunny.net/css?family=nunito" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body >
    <div class="container">
        <div class="card card-white mt-4">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
  
     </div>
    
</body>

</html>
