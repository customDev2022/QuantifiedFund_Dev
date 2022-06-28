<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.headerlinks')

<body>
    <div class="wrapper">
        @include('admin.layouts.left-menu')
        <div class="main-panel">
            @include('admin.layouts.header')
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </div>
</body>
@include('admin.layouts.footerlinks')
@stack('cs')

</html>
