<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhed Aligan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="icon" href="{{asset('build/assets/myimages/logo.png') }}" alt="Logo" type="image/ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<style>
    body {
        background-color:#333366   ;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
    }

</style>
<body >

@include('components.sidebar')

@include('components.navbar')
</body>
</html>