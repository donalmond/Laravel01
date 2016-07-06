<!DOCTYPE html>
<html lang ="en">

<head>
    <meta charset="utf-8">
    <title>WinesWorld</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ elixir('css/app.css')}}">
</head>
<body>
    <div class="container">

    @yield('content')

    </div>

</body>
</html>
