<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

.grid{
    display: grid;
    grid-template-columns: 3fr 1.5fr;
}

.brand h1{
    color:White;
    padding:20px;
    font-weight: bold;
}
    .aside{
  background: white;
  min-height:100vh;
  width: 100%;
}

.login-wrapper{
    padding:20px;
}

.form-control{
    margin-top:10px;
}

button{
    width:100%;
    height:35px;
    margin-top:10px;
}

.content{
    background: url("../media/frontpage-bg.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: -400px;
}

.col-md-8, body{
  background: url();
  background-size: contain;
  background-repeat: no-repeat;
  height:100%;
}
    </style>
</head>
<body>
    <div id="app"></div>
</body>
</html>
