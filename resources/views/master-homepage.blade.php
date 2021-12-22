<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.Shared.head')
    @yield('css')
</head>

<body>

    @include('client.Shared.menu')
    <div class="col-md-12" style="margin-bottom: 100px"></div>
    {{-- <br>
    <br> --}}
    @yield('title')
    @yield('content')

    @include('client.Shared.bottom')


    @include('client.Shared.foot')

</body>
@yield('js')

</html>
