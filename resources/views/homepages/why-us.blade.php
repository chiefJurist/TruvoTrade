<x-home-layout>
    {{-- first div --}}
    <div style="background-image: url('{{ asset('img/nightlife.png') }}')" class="marijuana-first-div-con">
        <div class="marijuana-first-div-text">
            THE ADVANTAGE
        </div>
    </div>

    {{-- second div --}}
    <div class="general-div-container bg-white">
        <div class=" text-center text-4xl font-bold text-black py-4">
            NO COMMISSIONS. NO FEES. <br> NO HASSLE. NO BRAINER
        </div>
        <div class="why-us-second-div-text">
            We know that hidden fees, surprise costs and unexpected charges can take a good chunk out of your investment.
        </div>
        <div class="why-us-second-div-text">
            With our VIP Black account you can trade with zero commissions and razor-thin spreads on all markets, resulting in tremendous savings.
        </div>
        <a href="{{ route('show.register') }}">
            <div class="why-us-second-div-btn button">Register</div>
        </a>
    </div>

    {{-- third div --}}
    <div class="general-div-container">
        <div class="md:flex justify-between items-start gap-7">
            <div class="basis-1/2">
                <div class="why-us-third-div-header">EXPERIENCE</div>
                <div class="why-us-third-div-text">
                    A team with 40+ years experience in providing the most advanced trading solutions for FX and CFDs
                </div>
                <div class="why-us-third-div-header">INNOVATIVE</div>
                <div class="why-us-third-div-text">
                    Power up your trading with innovative products like the TruvoTrade, which lets you undo losing trades if the marketsove against you.
                </div>
            </div>
            <div class="basis-1/2">
                <img src="{{asset('img/why-us-img1.jpg')}}" alt="">
            </div>
        </div>
        <div class="md:flex justify-between items-start gap-7 pt-48 pb-20">
            <div class="basis-1/2">
                <img src="{{asset('img/why-us-img2.jpg')}}" alt="">
            </div>
            <div class="basis-1/2">
                <div class="why-us-third-div-header">PREDICTABLE PRICING</div>
                <div class="why-us-third-div-text">
                    One low, all-in fee. Know what you’re paying at all times with commissions as low as 0 and no fees for transactions or hidden charges.
                </div>
                <div class="why-us-third-div-header">ROBUST FOUNDATION</div>
                <div class="why-us-third-div-text">
                    All of our products and services are offered on top of a no-compromise approach to a secure, fast and dependable trading environment.
                </div>
            </div>
        </div>
    </div>

    {{-- fourth div --}}
    <div class="general-div-container bg-white">
        <div class="text-center text-3xl md:text-4xl font-bold py-5">
            AN EXCELLENT TRADING ENVIRONMENT <br> FOR FX & CFDS
        </div>
        <div class="font-nunito text-center text-lg md:text-xl text-gray-500">
            Focused on security, market access, and unrivaled client support.
        </div>
        <div class="md:flex justify-between items-start gap-10 py-20">
            <div class="why-us-fourth-div-card">
                <div class="why-us-fourth-div-card-icon-con">
                    <span class="icon-[streamline-freehand--office-stamp-document]"></span>
                </div>
                <div class="platform-fourth-div-card-header">LICENSED & REGULATED</div>
                <div class="why-us-fourth-div-card-text">
                    We also offer negative balance protection, meaning your balance never goes below zero and ensuring a high-standard of consumer protection.
                </div>
            </div>
            <div class="why-us-fourth-div-card">
                <div class="why-us-fourth-div-card-icon-con">
                    <span class="icon-[streamline-freehand--crypto-currency-bitcoin-network-globe]"></span>
                </div>
                <div class="platform-fourth-div-card-header">CRYPTO DEPOSITS</div>
                <div class="why-us-fourth-div-card-text">
                    We accept deposits and withdrawals in Bitcoin, Ethereum and other coins.
                </div>
            </div>
            <div class="why-us-fourth-div-card">
                <div class="why-us-fourth-div-card-icon-con">
                    <span class="icon-[streamline-freehand--messages-bubble-square-settings]"></span>
                </div>
                <div class="platform-fourth-div-card-header">RESPONSIVE SUPPORT</div>
                <div class="why-us-fourth-div-card-text">
                    Our dedicated support is quick to help you with any and all questions during trading hours.
                </div>
            </div>
        </div>
    </div>

    {{-- fifth div --}}
    <div class="general-div-container text-white bg-black font-bold">
        <div class="text-2xl py-4">I'LL BE SAVING THOUSANDS PER MONTH</div>
        <div class="text-gray-800 py-5 text-7xl"><span class="icon-[fa-solid--quote-left]"></span></div>
        <div class="font-nunito text-lg max-w-4xl">
            For someone who trades large volumes, the money I’ll save with 0 commissions on VIP Black will make a world of difference to my balance. I’ll be saving thousands per month on commissions, hundreds more on tight spreads, all for a simple low fee every month.
        </div>
        <div class="text-3xl py-5">Pawel Kaczmarczyk</div>
    </div>

    {{-- sixth div --}}
    <div class="general-div-container">
        <div class="text-center text-black text-3xl md:text-4xl font-bold max-w-2xl mx-auto py-7">
            FREEDOM TO TRADE THE GLOBAL MARKETS
        </div>
        <div class="text-center text-gray-500 text-xl font-semibold font-nunito py-5">
            Every tick of markets around the world at your fingertips.
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 py-10">
            <div class="why-us-sixth-div-card">
                <div class="why-us-sixth-div-icon-div">
                    <span class="icon-[streamline-sharp--stock]"></span>
                </div>
                <div class="why-us-sixth-div-header">
                    FOREX
                </div>
                <div>
                    Currency majors, minors, crosses and exotics in a $5 trillion markets.
                </div>
            </div>
            <div class="why-us-sixth-div-card">
                <div class="why-us-sixth-div-icon-div">
                    <span class="icon-[ph--chart-line-light]"></span>
                </div>
                <div class="why-us-sixth-div-header">
                    INDICES
                </div>
                <div>
                    Global indices from the US, UK, Asia, Australia and Europe.
                </div>
            </div>
            <div class="why-us-sixth-div-card">
                <div class="why-us-sixth-div-icon-div">
                    <span class="icon-[ion--stats-chart-outline]"></span>
                </div>
                <div class="why-us-sixth-div-header">
                    SHARES
                </div>
                <div>
                    Currency majors, minors, crosses and exotics in a $5 trillion markets.
                </div>
            </div>
            <div class="why-us-sixth-div-card">
                <div class="why-us-sixth-div-icon-div">
                    <span class="icon-[hugeicons--blockchain-04]"></span>
                </div>
                <div class="why-us-sixth-div-header">
                    ENERGIES
                </div>
                <div>
                    Trade oil and gas at a low cost on futures or spot markets.
                </div>
            </div>
            <div class="why-us-sixth-div-card">
                <div class="why-us-sixth-div-icon-div">
                    <span class="icon-[hugeicons--blockchain-03]"></span>
                </div>
                <div class="why-us-sixth-div-header">
                    CRYPTOCURRENCIES
                </div>
                <div>
                    Digital currencies on CFDs such as Bitcoin and Ethereum
                </div>
            </div>
            <div class="why-us-sixth-div-card">
                <div class="why-us-sixth-div-icon-div">
                    <span class="icon-[hugeicons--sale-tag-02]"></span>
                </div>
                <div class="why-us-sixth-div-header">
                    TRADING COSTS
                </div>
                <div>
                    We have subscriptions to suit every trader, with commissions as low as 0 and spreads from 0 pips.
                </div>
            </div>
        </div>
    </div>
    
    {{-- seventh div --}}
    <div class="general-div-container bg-white md:flex justify-between gap-10">
        <div class=" basis-2/3">
            <div class="flex gap-3 items-center my-5">
                <div class="why-us-seventh-div-format-btn text-white bg-gray-800">MT5</div>
                <div class="why-us-seventh-div-format-btn bg-gray-200">MT4</div>
            </div>
            <div class="my-5">
                <img src="{{ asset('img/mt5-logo.png')}}" alt="">
            </div>
            <div class="text-3xl md:text-4xl font-bold text-center md:text-start py-3 max-w-xl">
                THE NEXT-GENERATION PLATFORM FOR FX & CFDS
            </div>
            <div class="text-gray-500 text-center md:text-start py-5 max-w-xl">
                Instant market access and endless possibilities for trading, analysis and automation. Metaquotes 5 is an evolution of MT4 with additional features that supercharge your trading.
            </div>
            <div class="flex justify-center md:block">
                <div class="w-48 p-3 rounded-full text-center font-bold text-white bg-blue-500 hover:bg-white hover:text-blue-500 hover:border border-blue-500 button">
                    <a href="{{route('homepages.platform')}}">VIEW PLATFORMS</a>
                </div>
            </div>
        </div>
        <div class="basis-1/3 hidden md:flex">
            <img src="{{asset('img/why-us-img3.png')}}" alt="" class=" w-3xs">
        </div>
    </div>
</x-home-layout>