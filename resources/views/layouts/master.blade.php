<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')

	@include('layouts.partials._styles')

    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

</head>

<body>
    
    @include('layouts.partials._navbar')

    <main class="container">
    	@yield('content')    
    </main>

    @include('layouts.partials._footer')

	@include('layouts.partials._scripts')

    <!-- Site JS -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
