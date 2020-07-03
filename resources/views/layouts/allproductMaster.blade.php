<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
</head>
<body>
        @section('sidebar')
            這是主要的側邊欄。
        {{-- @show --}}

        <div class="container">
            @yield('content')
        </div>
</body>
</html>