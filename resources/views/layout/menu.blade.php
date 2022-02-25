<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Fonts --}}
    <link rel="stylesheet" href="fonts/antique.css">
    <link rel="stylesheet" href="fonts/poppins.css">
    <link rel="stylesheet" href="fonts/rajdhani.css">
</head>

<title>Perpustakaan Ilmu!</title>
</head>

<body class="bg-[#E2DEDE]">

    @include('app/navbar/index')
    @include('app/sidebar/index')

    <div class="container mt-5">
        @yield('container')
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
