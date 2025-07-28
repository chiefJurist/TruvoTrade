<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/truvo_trades.png') }}" type="image/png">
    <title>Truvo Trade</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
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
<body class="bg-white">
    {{-- LOADER --}}
    <div id="app-loader" class="fixed inset-0 bg-gray-300 z-50 flex items-center justify-center">
        <img src="{{asset('img/truvo_trade.png')}}" alt="Logo" class="w-24 h-24 animate-pulse">
    </div>
    <div class="xl:flex justify-between">
        {{-- header for smaller screens --}}
        <div class="bg-blue-100 p-10 xl:hidden">
            <div class="auth-logo-con">
                <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class=" w-16">
                <span>TruvoTrade</span>
            </div>
        </div>

        {{-- header for bigger screens --}}
        <div class="bg-blue-100 p-10 hidden xl:block basis-1/2">
            <div class="auth-logo-con">
                <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class=" w-16">
                <span>TruvoTrade</span>
            </div>
            <img src="{{asset('img/auth-img1.svg')}}" alt="">
        </div>

        {{-- body of the form --}}
        <div class="py-7 px-7 sm:px-40 font-nunito text-gray-500 basis-1/2">
            {{ $slot }}
        </div>
    </div>
</body>
</html>