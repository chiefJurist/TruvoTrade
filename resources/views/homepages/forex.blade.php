<x-home-layout>
    {{-- first div --}}
    <div class="general-div-container forex-first-div-container">
        <div class="forex-first-div-texts">
            <div class="forex-first-div-header">
                LOOKING TO TRADE CFDs ON FOREX?
            </div>
            <div class="forex-first-div-body">
                Trade 70+ FX pairs on the world’s fastest moving and most liquid market. Benefit from tight spreads and fast order execution.
            </div>
            <a href="{{route('show.register')}}">
                <div class="forex-first-div-btn button">Get Started</div>
            </a>
        </div>
        <div class="forex-first-div-img-con">
            <img src="{{ asset('img/forex-img1.png')}}" alt="" class="w-max">
        </div>
    </div>

    {{-- second div --}}
    <div class="general-div-container bg-black">
        <div class="text-white lg:flex justify-items-stretch divide-x divide-gray-700">
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">COST-EFFECTIVE</div>
                <div class="forex-second-div-card-body">
                    Zero commissions and spreads from 0 pips on our VIP Black subscription. No hidden costs either.
                </div>
            </div>
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">EDUCATION</div>
                <div class="forex-second-div-card-body">
                    Make informed trading decisions and spot new opportunities with best-in-class news, analysis and training.
                </div>
            </div>
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">INSTANT EXECUTION</div>
                <div class="forex-second-div-card-body">
                    Higher fill-rates, fewer premature stop-outs, and a significant price advantage.
                </div>
            </div>
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">24/7 SUPPORT</div>
                <div class="forex-second-div-card-body">
                    We’re on standby by email or live chat to help you with trading, funding, withdrawals, anything you need.
                </div>
            </div>
        </div>
    </div>

    {{--third div--}}
    <div class="general-div-container">
        <div class="div-headings text-center">LIVE FOREX SPREADS</div>
        <div class="font-bold text-2xl py-5 text-center">
            Low spreads across all major, minor and exotic currency pairs.
        </div>
        <div class="text-center py-16 max-w-5xl italic font-nunito text-gray-500">
            *The prices on this page are indicative. Prices for instruments with lower liquidity such as but not limited to exotic currency pairs, stocks and indices are not refreshed as often as commonly traded instruments. Please check inside your MT4/MT5 platform for latest live prices
        </div>
    </div>
    
    {{--fourth div--}}
    <div style="background-image: url('{{ asset('img/forex-img2.png') }}')" class=" general-div-container  text-white bg-cover bg-center min-h-screen">
        <div class="text-3xl md:text-5xl font-bold text-center">WHAT IS FOREX?</div>
        <div class="text-lg md:text-2xl text-center font-nunito py-5">
            The foreign exchange market (referred as the forex or FX market) is the largest and most liquid market in the world with an average daily trading volume of approximately $5 trillion.
        </div>
        <div class="text-center py-14 text-blue-500 text-7xl">$5 trillion</div>
        <div class="py-10 md:flex justify-between items-start gap-10">
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">Removing The Middle Ground</div>
                <div class="forex-fourth-div-card-body">
                    The Forex market is decentralised, meaning that there is no central facility from which trading takes place, and no one entity that controls prices.
                </div>
            </div>
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">A Truly Global Market</div>
                <div class="forex-fourth-div-card-body">
                    The FX market is influenced by a range of economic and geopolitical factors, which in turn trigger quick price movements and increase market volatility.
                </div>
            </div>
        </div>
    </div>
</x-home-layout>