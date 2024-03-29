<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Scripts -->
 <script src="http://myecommerce.test/js/app.js" defer></script>

 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 <!-- Styles -->
 <link href="http://myecommerce.test/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container section">
        @if (session('status'))
        <div class="alert alert-primary">
            {{ session('status') }}
        </div>
        @endif
        @yield('contenido')
    </div>
</body>
</html>