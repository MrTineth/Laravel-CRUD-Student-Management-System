<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    @include('libraries.style')  <!--Link css files-->
</head>
<body>
    

    @include('components.nav')     <!--Include navigation bar-->



    @yield('pageContent')


    @include('components.footer')   <!--Include footer bar-->

    @include('libraries.scrpit') <!--Link java scrpit files-->
</body>
</html>