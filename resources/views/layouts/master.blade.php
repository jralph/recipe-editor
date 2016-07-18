<!doctype html>
<html lang="en">
<head>
    @include ('partials.header')
</head>
<body>
    @include ('partials.nav')

    @yield ('content')

    @include ('partials.footer')
</body>
</html>