<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>
        @vite('resources/js/app.js')  <!-- Vite setup -->
    </head>
    <body>
        <div id="app" data-page="{{ json_encode($page) }}"></div>
    </body>
</html>
