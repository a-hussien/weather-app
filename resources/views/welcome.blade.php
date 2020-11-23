<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0" defer></script>
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body class="bg-blue-300">
        <div id="app" class="flex justify-center pt-8 ">
            <weather-app></weather-app>
        </div>
        <div class="footer flex justify-center">
            <p class="font-semibold underline">Powered By <a href="#"><span class="text-blue-700">Pixel</span><span class="text-orange-500">Code</span></a></p>
        </div>
    </body>
</html>
