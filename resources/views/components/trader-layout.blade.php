<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/truvo_trades.png') }}" type="image/png">
    <title>Truvo Trade</title>
    @vite('resources/css/app.css')
</head>
<script>
    //for the loader
    window.addEventListener('load', function () {
        const loader = document.getElementById('app-loader');
        if (loader) {
            loader.style.opacity = '0';
            loader.style.pointerEvents = 'none';
            setTimeout(() => loader.remove(), 500); // Optional: remove it completely
        }
    });
</script>
<body>
    {{-- LOADER --}}
    <div id="app-loader" class="fixed inset-0 bg-gray-300 z-50 flex items-center justify-center">
        <img src="{{asset('img/truvo_trade.png')}}" alt="Logo" class="w-24 h-24 animate-pulse">
    </div>
</body>
</html>