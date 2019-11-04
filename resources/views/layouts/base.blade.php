<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset("/vendor/owl-carousel/dist/assets/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/app.css")}}">
</head>

<body>

    @yield("body")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"> </script>
    <script src=" {{ asset("/vendor/owl-carousel/dist/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("/vendor/bootstrap/js/bootstrap.min.js") }}">
    </script>
    @stack("scripts")
</body>

</html>
