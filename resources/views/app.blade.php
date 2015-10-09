<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Title
        @show
        
        @yield('title')
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>