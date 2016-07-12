<!DOCTYPE html>
<html lang="en">
<head>
    @include('common.head')
    @yield('extra-styles')
</head>
<body>

    <div id="nav" class="ui vertical segment section">
        @include('common.nav')
    </div>

    <div id="header" class="ui vertical segment section">
    </div>

    <div id="content" class="ui vertical segment section">
        @yield('content')
    </div>

    <div id="footer" class="ui vertical segment section">
        @include('common.foot')
    </div>

    <!-- JavaScript Application -->
    <script src="js/semantic.min.js"></script>
    <script src="/js/app.js"></script>

    @include('common.flash')

    @yield('extra-scripts')
</body>
</html>
