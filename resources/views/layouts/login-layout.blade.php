<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('fonts/fontawesome-6.5.2/css/fontawesome.css') }}?<?= time() ?>" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-6.5.2/css/brands.css') }}?<?= time() ?>" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-6.5.2/css/solid.css') }}?<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?<?= time() ?>">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}?<?= time() ?>">
</head>
<body>
    <!--login-->
    @yield('conteudo')
    <!--login end-->

    <script type="text/javascript" src="{{ asset('js/script.js') }}?<?= time() ?>"></script>
</body>
</html>

