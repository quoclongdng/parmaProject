<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.Shared.head')
</head>

<body>

    @include('client.Shared.menu')
    @yield('title')
    @yield('content')

    @include('client.Shared.bottom')


    @include('client.Shared.foot')

</body>

</html>
