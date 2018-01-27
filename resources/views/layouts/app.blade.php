<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List App </title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
    @include("inc.navbar")
    <div class="container">
            @include("inc.message")
        @yield('content')
    </div>
    <footer id="footer" class="text-center"> Copyright @ 2018 TodosList</footer>
</body>
</html>