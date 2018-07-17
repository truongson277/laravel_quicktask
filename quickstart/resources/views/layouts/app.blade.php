<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
{!! Html::style('css/app.css') !!}
    <head>
        <title>{{ trans('message.title') }}</title>

        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>
        @yield('content')
    </body>
</html>

