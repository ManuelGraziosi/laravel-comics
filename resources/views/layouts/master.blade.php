<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        @include("partials.header")
        @include("partials.jumbo")
        @yield("contenuto")
        @include("partials.advertise_bottom")
        @include("partials.footer")
    </div>
</body>

</html>