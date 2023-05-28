<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Place Explorer | Find Your Area</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    <form>
        <input type="text" id="address" />
        <button type="submit">Explore</button>
    </form>

    <div id="map">
        <!-- <p style="color: #fff">Please enter an address🥺</p> -->
        <iframe id="mapFrameElement" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0" frameborder="0" is="x-frame-bypass"
            src="https://maps.google.com/maps?q=Ifite%20Awka&amp;output=embed">
        </iframe>
    </div>

    <div id="title">
        <span> PLACE EXPLORER </span>
    </div>
</body>

</html>
