<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <link rel="manifest" href="/manifest.json" />
    <link rel="apple-touch-icon" href="somedir/apple-touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" sizes="60x60" href="somedir/apple-touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="somedir/apple-touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="somedir/apple-touch-icon-ipad-retina-152x152.png">

    @vite('resources/ts/app.tsx')
    @inertiaHead
</head>

<body>
    @inertia

    <script src="{{ mix('ts/app.tsx') }}"></script>
</body>

</html>
