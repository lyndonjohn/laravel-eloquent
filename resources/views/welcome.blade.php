<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div><a href="{{ route('categories.index') }}">Category List</a></div>
        <div><a href="{{ route('products.index') }}">Product List</a></div>
    </body>
</html>
