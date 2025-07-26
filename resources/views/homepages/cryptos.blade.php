<x-home-layout>
    {{-- first div --}}
    <div class="general-div-container forex-first-div-container">
        <div class="forex-first-div-texts">
            <div class="forex-first-div-header">
                LOOKING TO TRADE CFDs ON CRYPTO?
            </div>
            <div class="forex-first-div-body">
                Trade Bitcoin and Ethereum CFDs with leverage, low spreads and fast trade execution.
            </div>
            <a href="{{ route('show.register') }}">
                <div class="forex-first-div-btn button">Get Started</div>
            </a>
        </div>
        <div class="forex-first-div-img-con">
            <img src="{{ asset('img/crypto-img1.png')}}" alt="" class="w-max">
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
        <div class="div-headings text-center">LLIVE CRYPTOCURRENCY SPREADS</div>
        <div class="font-bold text-2xl py-5 text-center">
            Low spreads on ETH and BTC
        </div>
        <div class="text-center py-16 max-w-5xl italic font-nunito text-gray-500">
            *The prices on this page are indicative. Prices for instruments with lower liquidity such as but not limited to exotic currency pairs, stocks and indices are not refreshed as often as commonly traded instruments. Please check inside your MT4/MT5 platform for latest live prices
        </div>
    </div>

    {{--fourth div--}}
    <div style="background-image: url('{{ asset('img/forex-img2.png') }}')" class=" general-div-container  text-white bg-cover bg-center min-h-screen">
        <div class="text-3xl md:text-5xl font-bold text-center">WHAT ARE CRYPTO CFDs?</div>
        <div class="text-lg md:text-2xl text-center font-nunito py-5">
            Trading CFDs on cryptos lets you buy and sell Bitcoin, Ethereum and other popular digital currencies without owning them.
        </div>
        <div class="text-center py-14 text-blue-500 text-7xl">A 24/7 liquid market</div>
        <div class="py-10 md:flex justify-between items-start gap-10">
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">What are cryptocurrencies?</div>
                <div class="forex-fourth-div-card-body">
                    Cryptocurrencies, or cryptos, are digital currencies which operate outside of the banking system and aren't controlled by governments. They are typically used to carry out secure transactions over the blockchain. Just like traditional currencies, these cryptos can be used, owned, exchanged and speculated on.
                    <br><br>
                    Markets on cryptos never close, meaning you can trade at any time on any day, including weekends and public holidays.
                </div>
            </div>
            <div class="forex-fourth-div-card">
                <div class="forex-fourth-div-card-heading">Why Trade Crypto CFDs?</div>
                <div class="forex-fourth-div-card-body">
                    Go short or long Enter the markets when you expect a price drop, not just when you expect it to go up.
                    <br><br>
                    Trade with leverage Increasing your trade size using leverage. Leverage can increase potential losses as well as gains.
                </div>
            </div>
        </div>
    </div>

    {{-- fifth div --}}
    <div class="general-div-container">
        <div class="crypto-fifth-div-heading">
            TruvoTrade. Invest in a Broker.
        </div>
        <div class="text-center text-lg md:text-2xl font-nunito py-4">
            Join the UTFTX Pool in 4 steps to receive daily payments
        </div>
        <div class="flex justify-center items-center md:block my-10">
            <div class="py-5 md:flex justify-between items-center">
                <div class="crypto-fifth-div-card">
                    <div class="crypto-fifth-div-card-icon-div"><span class="icon-[fa-solid--flag]"></span></div>
                    <div class="crypto-fifth-div-card-text">Create an Account</div>
                </div>
                <div class="crypto-fifth-div-card">
                    <div class="crypto-fifth-div-card-icon-div"><span class="icon-[vaadin--money-deposit]"></span></div>
                    <div class="crypto-fifth-div-card-text">Deposit Funds</div>
                </div>
                <div class="crypto-fifth-div-card">
                    <div class="crypto-fifth-div-card-icon-div"><span class="icon-[fa-solid--lock]"></span></div>
                    <div class="crypto-fifth-div-card-text">Invest Your Funds In a Plan</div>
                </div>
                <div class="crypto-fifth-div-card">
                    <div class="crypto-fifth-div-card-icon-div"><span class="icon-[simple-line-icons--social-skype]"></span></div>
                    <div class="crypto-fifth-div-card-text">Earn Daily Interest</div>
                </div>
            </div>
        </div>
        <div class="crypto-fifth-div-heading">
            Create An Account
        </div>
        <div class="cryto-fifth-div-last-texts">
            To start please register a new account with TruvoTrade.com and complete all the necessary steps to verify your account.
        </div>
        <div class="cryto-fifth-div-last-texts">
            Sign up for an account
        </div>
        <div class="cryto-fifth-div-last-texts">
            Verify your email
        </div>
        <div class="cryto-fifth-div-last-texts">
            Start trading
        </div>
       <a href="{{ route('show.register') }}">
            <div class="crypto-last-div-btn button mx-auto">
                Get Started
            </div>
       </a>
    </div>
</x-home-layout>













