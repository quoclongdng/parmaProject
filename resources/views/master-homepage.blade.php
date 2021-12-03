<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.Shared.head')
</head>

<body>

    @include('client.Shared.menu')

    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    @yield('content')
    <!-- ##### Brands Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('client.Shared.bottom')
    <!-- ##### Footer Area End ##### -->

    @include('client.Shared.foot')

</body>

</html>
