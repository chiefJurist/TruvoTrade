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

    //For Showing the small nav
    document.addEventListener("DOMContentLoaded", function () {
        const openBtn = document.getElementById("openMenu");
        const closeBtn = document.getElementById("closeMenu");
        const mobileNav = document.getElementById("mobileNav");

        openBtn.addEventListener("click", () => {
            // Show and slide in
            mobileNav.classList.remove("-translate-x-full");
            mobileNav.classList.add("translate-x-0");
        });

        closeBtn.addEventListener("click", () => {
            // Slide out to the right
            mobileNav.classList.remove("translate-x-0");
            mobileNav.classList.add("-translate-x-full");
        });
    });
</script>
<body>
    {{-- LOADER --}}
    <div id="app-loader" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <img src="{{asset('img/truvo_trade.png')}}" alt="Logo" class="w-24 h-24 animate-pulse">
    </div>

    {{-- Header For Screens Less Than md: --}}
    <div class="trader-small-header-con">
        <div id="openMenu">
            <span class="icon-[material-symbols--menu-rounded] text-3xl"></span>
        </div>
        <div class="trader-small-header-logo-con">
            <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class="w-16">
            <span>TruvoTrade</span>
        </div>
        <div>
            <img src="{{ asset('img/user-1.png') }}" alt="user" class="trader-small-header-img">
        </div>
    </div>

    {{-- navigation for smaller screens --}}
    <div  id="mobileNav" class="md:hidden fixed top-0 left-0 p-6 bg-white w-64 text-gray-800 h-full overflow-y-auto z-40 transform -translate-x-full transition-transform duration-400 ease-out font-nunito font-bold">
        <div id="closeMenu" class="trader-menu-cancel-con">
            <div class="trader-small-header-logo-con">
                <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class="w-10">
                <span>TruvoTrade</span>
            </div>
            <span class="icon-[material-symbols--cancel-outline-rounded] trader-menu-cancel"></span>
        </div>
        <div>
            <div class="">HOME</div>
            <a href="{{ route('trader.overview') }}" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--layout-dashboard] text-2xl"></span>
                </div>
                <div>
                    <span class="">Overview</span>
                </div>
            </a>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--user-cog]"></span>
                </div>
                <div>
                    <span class="">My Profile</span>
                </div>
            </a>

            <div>APPS</div>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--home-stats]"></span>
                </div>
                <div>
                    <span class="">Investment</span>
                </div>
            </a>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--report-money]"></span>
                </div>
                <div>
                    <span class="">Our Plans</span>
                </div>
            </a>

            <div>TRANSACTIONS</div>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--building-bank]"></span>
                </div>
                <div>
                    <span class="">Transactions</span>
                </div>
            </a>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--square-arrow-up]"></span>
                </div>
                <div>
                    <span class="">Withdrawals</span>
                </div>
            </a>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--square-arrow-down]"></span>
                </div>
                <div>
                    <span class="">Deposits</span>
                </div>
            </a>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--share]"></span>
                </div>
                <div>
                    <span class="">Referrals</span>
                </div>
            </a>

            <div>EXTRAS</div>
            <a href="" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--power]"></span>
                </div>
                <div>
                    <span class="">Log Out</span>
                </div>
            </a>

            <div>
                <div>24/7 Support Available</div>
                <div>
                    <span>Contact Us</span>
                    <span class="icon-[tabler--headset]"></span>
                </div>
            </div>
        </div>
    </div>

    {{-- Page Content --}}
    <div class="trader-gen-container">
        {{ $slot }}
    </div>
</body>
</html>