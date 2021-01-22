<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Premio</title>

    @include('layouts.partials._style')

</head>
<body class="animsition">

@include('layouts.partials._navbar')

@include('layouts.partials._menubar')

<!-- Page -->
<div class="page">
    <div class="page-content">
        <h2>Blank</h2>
        <p>Page content goes here</p>
    </div>
</div>
<!-- End Page -->


<!-- Footer -->
@include('layouts.partials._footer')

<!-- Core  -->
<script src="{{ asset('premio-asset/global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/popper-js/umd/popper.min.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/animsition/animsition.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/waves/waves.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('premio-asset/global/vendor/switchery/switchery.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/intro-js/intro.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/screenfull/screenfull.js') }}"></script>
<script src="{{ asset('premio-asset/global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('premio-asset/global/js/Component.js') }}"></script>
<script src="{{ asset('premio-asset/global/js/Plugin.js') }}"></script>
<script src="{{ asset('premio-asset/global/js/Base.js') }}"></script>
<script src="{{ asset('premio-asset/global/js/Config.js') }}"></script>

<script src="{{ asset('premio-asset/center/assets/js/Section/Menubar.js') }}"></script>
<script src="{{ asset('premio-asset/center/assets/js/Section/Sidebar.js') }}"></script>
<script src="{{ asset('premio-asset/center/assets/js/Section/PageAside.js') }}"></script>
<script src="{{ asset('premio-asset/center/assets/js/Plugin/menu.js') }}"></script>

<!-- Config -->
<script src="{{ asset('premio-asset/global/js/config/colors.js') }}"></script>
<script src="{{ asset('premio-asset/center/assets/js/config/tour.js') }}"></script>
{{--<script>Config.set('assets', {{ asset('premio-asset/center/assets') }});</script>--}}

<!-- Page -->
<script src="{{ asset('premio-asset/center/assets/js/Site.js') }}"></script>
<script src="{{ asset('premio-asset/global/js/Plugin/asscrollable.js') }}"></script>
<script src="{{ asset('premio-asset/global/js/Plugin/slidepanel.js') }}"></script>
<script src="{{ asset('premio-asset/global/js/Plugin/switchery.js') }}"></script>

<script>
    (function (document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>
</body>
</html>
