<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Bugken</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/choices.js/choices.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mazer.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/x-icon">
    {{ $styles ?? '' }}
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <x-sidebar/>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        {{ $slot }}
        <div class="root"></div>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Bugken</p>
                </div>
                <div class="float-end">
                    <p>
                        <a
                            href="https://www.nexteam.id/">Nexteam Indonesia
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<script src="{{ asset('js/mazer.js') }}"></script>
<!-- Include Choices JavaScript -->
<script src="{{ asset('vendors/choices.js/choices.min.js') }}"></script>
<script src="{{ asset('js/pages/form-element-select.js') }}"></script>
{{ $scripts ?? '' }}
</body>

</html>
