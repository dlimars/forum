<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {!! app('seotools')->generate() !!}
    <link rel="stylesheet" href="{{ elixir('css/front.css') }}"/>
</head>
<body>
@yield('base:body')
</body>
</html>