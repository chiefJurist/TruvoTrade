<x-home-layout>
    {{-- first div --}}
    <div class="general-div-container forex-first-div-container">
        <div class="forex-first-div-texts">
            <div class="forex-first-div-header">
               WANT TO TRADE CFDs ON COPYTRADING?
            </div>
            <div class="forex-first-div-body">
                Copy Trade Expert traders at a low cost on futures or spot markets.
            </div>
            <a href="{{ route('show.register') }}">
                <div class="forex-first-div-btn button">Get Started</div>
            </a>
        </div>
        <div class="forex-first-div-img-con">
            <img src="{{ asset('img/copy-trading-img1.png')}}" alt="" class="w-max">
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
        <div class="div-headings text-center">Discover CopyTrading with Us</div>
        <div class="font-bold text-2xl py-5 text-center">
            Low spreads on oil and gas spot and futures markets.
        </div>
        <div class="text-center py-16 max-w-5xl italic font-nunito text-gray-500">
            *Experience the power of copy trading with TruvoTrade, a leading FX & CFD broker with almost two decades of experience. With offices in over 13 countries, including the UK, Poland, Germany, France, and Chile.
        </div>
    </div>

    {{--fourth div--}}
    <div style="background-image: url('{{ asset('img/forex-img2.png') }}')" class=" general-div-container  text-white bg-cover bg-center min-h-screen">
        <div class="text-3xl md:text-5xl font-bold text-center">COPY TRADING</div>
        <div class="text-lg md:text-2xl text-center font-nunito py-5">
            Oil and natural gas can be traded as CFDs on the TruvoTrade MT4 and MT5 platforms.
        </div>
        <div class="text-center py-14 text-blue-500 text-4xl md:text-8xl">
            Highly volatile trading instruments.
        </div>
        <div class="py-10 md:flex justify-between items-start gap-10">
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">Why trade Copytrading?</div>
                <div class="forex-fourth-div-card-body">
                    Copytrading allows beginners to replicate the strategies of experienced traders, potentially earning profits without needing in-depth market knowledge. It also offers time-saving opportunities for those who can't actively manage their investments.
                </div>
            </div>
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">What affects Copy Tradeprices?</div>
                <div class="forex-fourth-div-card-body">
                    Copy trade prices are influenced by market conditions, the trader's performance, platform fees, asset liquidity, slippage during execution, economic events, trading volume, and the timing of trade execution.
                </div>
            </div>
        </div>
    </div>
</x-home-layout>