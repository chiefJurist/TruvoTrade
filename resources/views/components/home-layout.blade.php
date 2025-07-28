<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('img/truvo_trades.png') }}" type="image/png">
        <title>Truvo Trade</title>
        @vite('resources/css/app.css')
    </head>
    <script>
        //For Showing the small nav
        document.addEventListener("DOMContentLoaded", function () {
            const openBtn = document.getElementById("openMenu");
            const closeBtn = document.getElementById("closeMenu");
            const mobileNav = document.getElementById("mobileNav");

            openBtn.addEventListener("click", () => {
                // Show and slide in
                mobileNav.classList.remove("translate-x-full");
                mobileNav.classList.add("translate-x-0");
            });

            closeBtn.addEventListener("click", () => {
                // Slide out to the right
                mobileNav.classList.remove("translate-x-0");
                mobileNav.classList.add("translate-x-full");
            });
        });

        //For showing the sublinks of the small nav
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.toggle-header').forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    content.classList.toggle('hidden');
                });
            });
        });

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
    <body class="bg-gray-100">
        {{-- LOADER --}}
        <div id="app-loader" class="fixed inset-0 bg-gray-300 z-50 flex items-center justify-center">
            <img src="{{asset('img/truvo_trade.png')}}" alt="Logo" class="w-24 h-24 animate-pulse">
        </div>

        <div>
            {{-- Header For Screens Greater Than md --}}
            <div class="hidden md:flex px-20 welcome-header">
                <div class="logo-container">
                    <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class=" w-16">
                    <span>TruvoTrade</span>
                </div>
                <div class="flex justify-between items-center gap-6 flex-wrap">
                    <a href="{{ route('show.login') }}">
                        <div class="btn hover:bg-blue-600 button">Login</div>
                    </a>
                    <a href="{{ route('show.register') }}">
                        <div class="btn bg-blue-600 hover:bg-gray-900 button">Sign up</div>
                    </a>
                </div>
            </div>

            {{-- Header For Screens Less Than md: --}}
            <div class="md:hidden flex px-6 welcome-header">
                <div class="logo-container">
                    <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class=" w-16">
                    <span>TruvoTrade</span>
                </div>
                <div id="openMenu">
                    <span class="icon-[material-symbols--menu-rounded] external-icon"></span>
                </div>
            </div>

            {{-- navigation for bigger screens --}}
            <div class="big-nav-gen-con bg-blue-50 shadow-xl">
                <div class="big-nav-link-con button">
                    <a href="/">HOME</a>
                </div>
                <div class="big-nav-link-con button">
                    <a href="{{ route('homepages.about')}}">ABOUT US</a>
                </div>
                <div class="big-nav-link-con button relative group">
                    <div class="big-nav-sublink-heading">
                        <span>MARKET</span>
                        <span class="icon-[ion--caret-down] font-extrabold"></span>
                    </div>
                    <div class="big-nav-sublink-con big-nav-transition">
                        <a href="{{ route('homepages.forex')}}"><div class="big-nav-sublink">Forex</div></a>
                        <a href="{{ route('homepages.cryptos')}}"><div class="big-nav-sublink">Cryptos</div></a>
                        <a href="{{ route('homepages.shares')}}"><div class="big-nav-sublink">Shares</div></a>
                        <a href="{{ route('homepages.indices')}}"><div class="big-nav-sublink">Indices</div></a>
                        <a href="{{ route('homepages.marijuana')}}"><div class="big-nav-sublink">Marijuana</div></a>
                        <a href="{{ route('homepages.energies')}}"><div class="big-nav-sublink">Energies</div></a>
                    </div>
                </div>
                <div class="big-nav-link-con button relative group">
                    <div class="big-nav-sublink-heading">
                        <span>TRADING</span>
                        <span class="icon-[ion--caret-down] font-extrabold"></span>
                    </div>
                    <div class="big-nav-sublink-con big-nav-transition">
                        <a href="{{ route('homepages.platform') }}">
                            <div class="big-nav-sublink">Platform</div>
                        </a>
                        <a href="{{ route('homepages.swaps')}}">
                            <div class="big-nav-sublink">Swaps</div>
                        </a>
                        <a href="{{ route(name: 'homepages.trading-specifications')}}">
                            <div class="big-nav-sublink">Trading Specifications</div>
                        </a>
                        <a href="{{ route('homepages.copy-trading')}}">
                            <div class="big-nav-sublink">Copytrading</div>
                        </a>
                    </div>
                </div>
                <div class="big-nav-link-con button group relative">
                    <div class="big-nav-sublink-heading">
                        <span>COMPANY</span>
                        <span class="icon-[ion--caret-down] font-extrabold"></span>
                    </div>
                    <div class="big-nav-sublink-con big-nav-transition">
                        <a href="{{ route('homepages.why-us')}}">
                            <div class="big-nav-sublink">Why Us</div>
                        </a>
                        <a href="{{ route('homepages.contact-us') }}">
                            <div class="big-nav-sublink">Contact Us</div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- navigation for smaller screens --}}
            <div id="mobileNav" class="small-screen-nav-backdrop z-40 transform translate-x-full transition-transform duration-400 ease-out">
                <div  id="sideNav" class="small-screen-nav-con">
                    <div id="closeMenu" class="flex justify-end pt-5 pb-20">
                        <span class="icon-[material-symbols--cancel-outline-rounded] external-icon"></span>
                    </div>
                    <div>
                        <a href="/">
                            <div class="small-nav-link">Home</div>
                        </a>
                        <a href="{{ route('homepages.about')}}">
                            <div class="small-nav-link">About Us</div>
                        </a>
                        <div class="small-nav-link toggle-header">Markets</div>
                        <div class="toggle-content hidden">
                            <a href="{{ route('homepages.forex')}}">
                                <div class="small-nav-sublink">Forex</div>
                            </a>
                            <a href="{{ route('homepages.cryptos')}}">
                                <div class="small-nav-sublink">Cryptos</div>
                            </a>
                            <a href="{{ route('homepages.shares')}}">
                                <div class="small-nav-sublink">Shares</div>
                            </a>
                            <a href="{{ route('homepages.indices')}}">
                                <div class="small-nav-sublink">Indices</div>
                            </a>
                            <a href="{{ route('homepages.marijuana')}}">
                                <div class="small-nav-sublink">Marijuana</div>
                            </a>
                            <a href="{{ route('homepages.energies')}}">
                                <div class="small-nav-sublink">Energies</div>
                            </a>
                        </div>
                        <div class="small-nav-link toggle-header">Trading</div>
                        <div class="toggle-content hidden">
                            <a href="{{ route('homepages.platform') }}">
                                <div class="small-nav-sublink">Platform</div>
                            </a>
                            <a href="{{ route('homepages.swaps')}}">
                                <div class="small-nav-sublink">Swaps</div>
                            </a>
                            <a href="{{ route('homepages.trading-specifications')}}">
                                <div class="small-nav-sublink">Trading Specifications</div>
                            </a>
                            <a href="{{ route('homepages.copy-trading')}}">
                                <div class="small-nav-sublink">Copy Trading</div>
                            </a>
                        </div>
                        <div class="small-nav-link toggle-header">Company</div>
                        <div class="toggle-content hidden">
                            <a href="{{ route('homepages.why-us')}}">
                                <div class="small-nav-sublink">Why us</div>
                            </a>
                            <a href="{{ route('homepages.contact-us')}}">
                                <div class="small-nav-sublink">Contact us</div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('show.login') }}">
                            <div class="btn mt-4">Login</div>
                        </a>
                        <a href="{{ route('show.register') }}">
                            <div class="btn bg-blue-600 mt-4">Sign up</div>
                        </a>
                    </div>
                </div>
            </div>
            <main>
                {{ $slot }}
            </main>
            {{--twelfth div --}}
            <div class="general-div-container bg-gray-900 text-gray-400 font-nunito text-sm">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-5 py-10 border-b border-gray-300">
                    <div>
                        <div class="twelfth-div-link-heading">MARKETS</div>
                        <div><a href="{{ route('homepages.forex')}}" class="twelfth-div-link">Forex</a></div>
                        <div><a href="{{ route('homepages.cryptos')}}" class="twelfth-div-link">Crypto</a></div>
                        <div><a href="{{ route('homepages.shares')}}" class="twelfth-div-link">Shares</a></div>
                        <div><a href="{{ route('homepages.indices')}}" class="twelfth-div-link">Indices</a></div>
                    </div>
                    <div>
                        <div class="twelfth-div-link-heading">TRADING</div>
                        <div>
                            <a href="{{ route('homepages.platform') }}" class="twelfth-div-link">Platform</a>
                        </div>
                        <div>
                            <a href="" class="twelfth-div-link">Pricing</a>
                        </div>
                        <div>
                            <a href="{{ route('homepages.copy-trading')}}" class="twelfth-div-link">Copytrading</a>
                        </div>
                        <div>
                            <a href="{{ route('homepages.contact-us') }}" class="twelfth-div-link">Help Centre/FAQ</a>
                        </div>
                    </div>
                    <div>
                        <div class="twelfth-div-link-heading">COMPANY</div>
                        <div>
                            <a href="{{ route('homepages.about')}}" class="twelfth-div-link">About Us</a>
                        </div>
                        <div>
                            <a href="{{ route('homepages.why-us')}}" class="twelfth-div-link">Why Us</a>
                        </div>
                        <div>
                            <a href="{{ route('homepages.contact-us') }}" class="twelfth-div-link">Contact Us</a>
                        </div>
                    </div>
                    <div>
                        <div class="twelfth-div-link-heading">ACCOUNT</div>
                        <div>
                            <a href="{{ route('show.login') }}" class="twelfth-div-link">Login</a>
                        </div>
                        <div>
                            <a href="{{ route('show.register') }}" class="twelfth-div-link">Sign Up</a>
                        </div>
                    </div>
                    <div>
                        <div class="twelfth-div-link-heading">LEGAL</div>
                        <div>
                            <a href="{{ route('homepages.privacy-policy') }}" class="twelfth-div-link">Privacy Policy</a>
                        </div>
                        <div><a href="{{ route('hompages.terms-of-service') }}" class="twelfth-div-link">Terms of Service</a></div>
                    </div>
                </div>
                <div class="mt-10">
                    <div class="twelfth-div-par">
                        This website can be accessed worldwide however the information on the website is related to TruvoTrade A/S and is not specific to any entity of TruvoTrade. All clients will directly engage with TruvoTrade A/S and all client agreements will be entered into with TruvoTrade A/S .

                    </div>
                    <div class="twelfth-div-par">
                        Forex and CFDs are leveraged products and can result in losses that exceed your deposits. Please ensure you fully understand all of the risks. Contracts for Difference ("CFDs") are leveraged products and carry a significant risk of loss to your capital, as prices may move rapidly against you and you may be required to make further payments to keep any trades open. These products are not suitable for all clients, therefore please ensure you fully understand the risks and seek independent advice.

                    </div>
                    <div class="twelfth-div-par">
                        Apple and the Apple logo are trademarks of Apple Inc, registered in the US and other countries and regions. App Store is a service mark of Apple Inc. Google Play and the Google Play logo are trademarks of Google LLC.
                    </div>
                    <div class="twelfth-div-par">Copyright © 2022 All rights reserved</div>
                </div>
            </div>
        </div>
    </body>
</html>