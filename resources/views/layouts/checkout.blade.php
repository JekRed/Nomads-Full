<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Akhir meta tags-->

    @stack('prepend-style')
    @include('includes.style')
    @include('includes.script')
    @stack('prepend-script')
    @stack('addon-style')
    @stack('addon-script')

    <title> @yield('title') </title>
</head>

<body>

    @include('includes.navbar-alternate')
    @yield('content')
    @include('includes.footer')


</body>

</html>
