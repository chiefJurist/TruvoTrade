<x-home-layout>
    {{-- first div --}}
    <div class="general-div-container forex-first-div-container">
        <div class="forex-first-div-texts">
            <div class="forex-first-div-header">
                WANT TO TRADE CFDs ON INDICES?
            </div>
            <div class="forex-first-div-body">
                Trade major indices from the US, UK, Asia, Australia and Europe and benefit from tight spreads and fast order execution.
            </div>
            <a href="{{ route('show.register') }}">
                <div class="forex-first-div-btn button">Get Started</div>
            </a>
        </div>
        <div class="forex-first-div-img-con">
            <img src="{{ asset('img/indices-img1.png')}}" alt="" class="w-max">
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
        <div class="div-headings text-center">LIVE INDEX SPREADS</div>
        <div class="font-bold text-2xl py-5 text-center">
            Low spreads on global indices
        </div>
        <div class="text-center py-16 max-w-5xl italic font-nunito text-gray-500">
            *The prices on this page are indicative. Prices for instruments with lower liquidity such as but not limited to exotic currency pairs, stocks and indices are not refreshed as often as commonly traded instruments. Please check inside your MT4/MT5 platform for latest live prices
        </div>
    </div>

    {{--fourth div--}}
    <div style="background-image: url('{{ asset('img/forex-img2.png') }}')" class=" general-div-container  text-white bg-cover bg-center min-h-screen">
        <div class="text-3xl md:text-5xl font-bold text-center">WHAT ARE INDICES?</div>
        <div class="text-lg md:text-2xl text-center font-nunito py-5">
            Indices are a selection of high-performing stocks grouped together to provide a single investment vehicle and general market overview.
        </div>
        <div class="text-center py-14 text-blue-500 text-4xl md:text-8xl">
            Global indices at your fingertips
        </div>
        <div class="py-10 md:flex justify-between items-start gap-10">
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">What affects index prices?</div>
                <div class="forex-fourth-div-card-body">
                    Price-weighted indices, such as Dow Jones, are weighted based on the price of the different stocks contained within it, and will heavily reflect major price movements of those stocks. Capitalization-weighted indices, such as the NASDAQ composite index, are weighted based on the size of each component-company, and tend to reflect overall market performance. Other factors such as the types of companies within the index and region the index covers will also affect performance.
                </div>
            </div>
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">How do you choose the right index?</div>
                <div class="forex-fourth-div-card-body">
                    Trading CFDs on indices allows you to trade the value of the underlying index. When choosing an index to trade, it's important that you're comfortable understanding the factors that affect its price movements. Keeping up to date with relevant market news and doing your research can help you spot trading opportunities and detect trends within your market.
                </div>
            </div>
        </div>
    </div>
</x-home-layout>