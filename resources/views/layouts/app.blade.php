<!DOCTYPE html>
<html>
<head>
    <title>Loughat</title>
</head>
<body>
    @include('components.header')
    
    <div class="container">
        @yield('content')
    </div>
    
    @include('components.footer')
</body>
</html>