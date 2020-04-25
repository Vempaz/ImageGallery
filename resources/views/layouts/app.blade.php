<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.css">
</head>
<body>
    @include('inc.navbar')
    <br>
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

</body>
</html>