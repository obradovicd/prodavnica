<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Butik</title>
    <link rel="icon"  href="public\images\icon.png"> 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">

</head>

<body>

    <div data-proizvodi="{{ $proizvodi }}" id="porudzbina"></div>
    <script src="../js/app.js"></script>
</body>

</html>
