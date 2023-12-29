<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Эксперт-Гарант</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            body{
                background: #ccc;
            }
        </style>
    </head>
    <body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            
            </div>
            <div class="col">
              @yield('content')
            </div>
            <div class="col">
            
            </div>
        </div>
    </div>
       
    </body>
</html>
