
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            background: linear-gradient(120deg, #e0f7fa 0%, #f8fffe 100%);
            min-height: 100vh;
        }
        main {
            min-height: 60vh;
            padding: 40px 0 40px 0;
        }
        .container-main {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(9,148,125,0.08);
            padding: 32px 24px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    @include('partials.header')

    <!-- Nội dung -->
    <main>
        <div class="container container-main">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
