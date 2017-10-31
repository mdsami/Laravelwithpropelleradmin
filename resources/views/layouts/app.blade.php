<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    @yield('style')
</head>
<body>


@include('partials.sidebar')




@yield('content')


@include('partials.footer')

@yield('script')

</body>
</html>
