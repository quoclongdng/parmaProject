<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.head')
</head>

<body>

    @include('client.menu')

    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    @include('client.slide')
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    @yield('content')
    <!-- ##### Brands Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('client.bottom')
    <!-- ##### Footer Area End ##### -->

    @include('client.foot')

</body>

</html>
