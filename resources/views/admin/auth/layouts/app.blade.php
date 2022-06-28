<!DOCTYPE html>
<html lang="en">
@include('admin.auth.layouts.headerlinks')

<body>
    <div class="wrapper wrapper-full-page">
        @include('admin.auth.layouts.header')
        @yield('content')
        @include('admin.auth.layouts.footer')
    </div>
</body>
@include('admin.auth.layouts.footerlinks')

</html>
