<x-home-layout>
    {{-- first div --}}
    <div class="general-div-container forex-first-div-container">
        <div class="forex-first-div-texts">
            <div class="forex-first-div-header">
                TRADE STOCKS WITH CFDs
            </div>
            <div class="forex-first-div-body">
                Go long or short on the world's most traded international companies such as Google, Netflix, Amazon, Apple, Tesla, Facebook and many more.
            </div>
            <a href="{{ route('show.register') }}">
                <div class="forex-first-div-btn button">Get Started</div>
            </a>
        </div>
        <div class="forex-first-div-img-con">
            <img src="{{ asset('img/shares-img1.png')}}" alt="" class="w-max">
        </div>
    </div>

    {{-- second div --}}
    <div class="general-div-container bg-black">
        <div class="text-white lg:flex justify-items-stretch divide-x divide-gray-700">
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">0% COMMISSION</div>
                <div class="forex-second-div-card-body">
                    Unlimited, commission-free stock trading. Pay nothing to us on every trade and keep all of your earnings.
                </div>
            </div>
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">RAW SPREADS</div>
                <div class="forex-second-div-card-body">
                   No markup on share prices, streamed directly to you from some of the world's largest financial institutions.
                </div>
            </div>
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">LEVERAGED TRADING</div>
                <div class="forex-second-div-card-body">
                    Make your initial deposit, then multiply your market exposure using leverage. Leverage carries increased risk.
                </div>
            </div>
            <div class="forex-second-div-card">
                <div class="forex-second-div-card-header">TRADE FROM ANYWHERE</div>
                <div class="forex-second-div-card-body">
                    Use our platform to view stock charts and pricing. Open and close your trades from PC, Mac or mobile.
                </div>
            </div>
        </div>
    </div>

    {{--third div--}}
    <div class="general-div-container">
        <div class="div-headings text-center">LIVE EQUITIES SPREADS</div>
        <div class="font-bold text-2xl py-5 text-center">
            Low spreads on stocks from around the world.
        </div>
        <div class="text-center py-16 max-w-5xl italic font-nunito text-gray-500">
            *The prices on this page are indicative. Prices for instruments with lower liquidity such as but not limited to exotic currency pairs, stocks and indices are not refreshed as often as commonly traded instruments. Please check inside your MT4/MT5 platform for latest live prices
        </div>
    </div>

    {{--fourth div--}}
    <div style="background-image: url('{{ asset('img/forex-img2.png') }}')" class=" general-div-container  text-white bg-cover bg-center min-h-screen">
        <div class="text-3xl md:text-5xl font-bold text-center">WHAT ARE CFDs ON STOCKS?</div>
        <div class="text-lg md:text-2xl text-center font-nunito py-5">
            CFDs allow you to trade the value of company stocks without owning the underlying shares, giving you several advantages over traditional stock trading.
        </div>
        <div class="text-center py-14 text-blue-500 text-4xl md:text-7xl">
            Stocks from major companies around the world
        </div>
        <div class="py-10 md:flex justify-between items-start gap-10">
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">Advantages of Stock CFDs</div>
                <div class="forex-fourth-div-card-body">
                    Going short on stocks is a relatively complicated process with a traditional stock trading, but with CFDs you can sell as easily as you can buy to take advantage of falling markets.
                    <br><br>
                    Stock CFDs are easy to trade on MT4 or MT5, without the need to trade through a stock broker. Simply buy or sell at the live market price.
                </div>
            </div>
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">Why Trade Stock CFDs?</div>
                <div class="forex-fourth-div-card-body">
                    Trade at a much lower cost compared to traditional stock trading.
                    <br><br>
                    You're able to profit from the smallest market moves, as leverage allows you to increase your position size relative to your investment. Leverage is also risky and can increase your losses as well as your gains.
                </div>
            </div>
        </div>
    </div>
</x-home-layout>