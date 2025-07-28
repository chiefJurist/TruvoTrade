<x-home-layout>
    {{-- first div --}}
    <div class="relative w-full h-screen overflow-hidden">
        <video autoplay muted loop playsinline class="absolute w-full h-full object-cover">
            <source src="{{ asset('img/video1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Optional overlay content -->
        <div class="general-div-container first-div-container">
            <div class="div-headings">Trade Shares and Forex with Financial Thinking</div>
            <div class="div-texts">
                Access 40,000+ instruments – across asset classes – to trade, hedge and invest from a single account.
            </div>
            <div class="btn bg-blue-600 mt-8 hover:bg-gray-900 button">
                <a href="{{ route('show.register') }}">Open an Account</a>
            </div>
        </div>

        <!-- Optional dark overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-90 z-0"></div>
    </div>


    {{-- second div --}}
    <div class="general-div-container second-div-container">
        <div class="md:pr-36">
            <div class="div-headings">Trade With Low Commissions and Tight Spreads</div>
            <div class="div-texts text-gray-500">
                With TruvoTrade you get a transparent pricing structure and a secure and regulated trading environment. As an active trader you can also qualify for lower fees and extra benefits.
            </div>
            <div class="mt-6 md:mt-12 short-white-btn button">
                <a href="{{ route('show.register') }}">Login</a>
            </div>
        </div>
        <div class=" pt-10 md:pt-0">
            <img src="{{ asset('img/frontpage-pricing-d.webp')}}" alt="" class="w-xl md:w-5xl">
        </div>
    </div>

    {{-- third div --}}
    <div class="general-div-container">
        <div class="div-headings">Trade over 2100 global markets</div>
    </div>

    {{-- fourth div --}}
    <div class="general-div-container">
        <div class="div-headings">Industry-leading prices</div>
        <div class="div-texts text-gray-500 md:pr-90">
            Get ultra-competitive spreads and commissions across all asset classes. Receive even better rates as your volume increases.
        </div>
        <div class="py-5 md:grid grid-cols-4 gap-7">
            <div class="fourth-div-card-container">
                <div class="fourth-div-card-line-one">FX</div>
                <div class="fourth-div-card-line-two">Spread as low as</div>
                <div class="fourth-div-card-line-three">0.2</div>
                <div class="fourth-div-card-line-four">pip</div>
                <div class="fourth-div-card-line-five">
                    Trade 182 FX spot pairs and 140 forwards across majors, minors, exotics and metals.
                </div>
            </div>
            <div class="fourth-div-card-container">
                <div class="fourth-div-card-line-one">Crypto</div>
                <div class="fourth-div-card-line-two">Trade from</div>
                <div class="fourth-div-card-line-three">0.4</div>
                <div class="fourth-div-card-line-four">on $500</div>
                <div class="fourth-div-card-line-five">
                    Trade and invest confidently in top performing Cryptocurrencies with our timely Trading signals that ensure your profitability from day one.
                </div>
            </div>
            <div class="fourth-div-card-container">
                <div class="fourth-div-card-line-one">Stocks</div>
                <div class="fourth-div-card-line-two">Commissions from</div>
                <div class="fourth-div-card-line-three">$3</div>
                <div class="fourth-div-card-line-four">on US Stocks</div>
                <div class="fourth-div-card-line-five">
                    Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.
                </div>
            </div>
            <div class="fourth-div-card-container">
                <div class="fourth-div-card-line-one">Real Estate</div>
                <div class="fourth-div-card-line-two">Procure from as low as</div>
                <div class="fourth-div-card-line-three">$100</div>
                <div class="fourth-div-card-line-four">per slot</div>
                <div class="fourth-div-card-line-five">
                    Simplified Real Estate investment for relatively small amounts through our crowdfunding model.
                </div>
            </div>
        </div>
        <div class="flex justify-center my-5">
            <div class="fourth-div-reg-con">
                <div class="flex justify-center">
                    <div class="fourth-div-reg-btn button">
                        <a href="{{ route('show.register') }}">Start Trade</a>
                    </div>
                </div>
                <div class="fourth-div-reg-text">With the little you have you Trend. Join now!</div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="my-5 md:flex divide-y divide-gray-300 md:divide-x md:divide-y-0">
                <div class="fourth-div-rec-con">
                    <div class="fourth-div-icon-con">
                        <span class="icon-[streamline--customer-support-1] fourth-div-icon"></span>
                    </div>
                    <div class="fourth-div-rec-text">AWARD WINNING SUPPORT</div>
                </div>
                <div class="fourth-div-rec-con">
                    <div class="fourth-div-icon-con">
                        <span class="icon-[ph--bank-bold] fourth-div-icon"></span>
                    </div>
                    <div class="fourth-div-rec-text">REGULATED BY THE GSE,USA</div>
                    <div></div>
                </div>
                <div class="fourth-div-rec-con">
                    <div class="fourth-div-icon-con">
                        <span class="icon-[subway--refresh-time] fourth-div-icon"></span>
                    </div>
                    <div class="fourth-div-rec-text">30 YEARS EXPERIENCE</div>
                </div>
            </div>
        </div>
    </div>

    {{--fifth div --}}
    <div class="general-div-containtainer p-10 bg-black flex justify-center">
        <div class="divide-y divide-gray-200 md:divide-x md:divide-y-0 md:flex">
            <div class="p-10">
                <div class="div-headings text-center text-gray-100">270,000+</div>
                <div class="div-texts text-center text-gray-100">Daily trades</div>
            </div>
            <div class="p-10">
                <div class="div-headings text-center text-gray-100">450,000+</div>
                <div class="div-texts text-center text-gray-100">Clients</div>
            </div>
            <div class="p-10">
                <div class="div-headings text-center text-gray-100">20 billion+</div>
                <div class="div-texts text-center text-gray-100">USD daily trade volume</div>
            </div>
            <div class="p-10">
                <div class="div-headings text-center text-gray-100">95 billion+</div>
                <div class="div-texts text-center text-gray-100">USD assets under management</div>
            </div>
        </div>
    </div>

    {{--sixth div--}}
    <div class="general-div-container">
        <div class="div-headings text-center">Switch to TruvoTrade</div>
        <div class="div-texts text-center text-gray-500 md:px-44">
            At TruvoTrade we work hard to enhance your trading experience. As a global, 5 star rated broker, our client’s satisfaction is in the center of our focus.
        </div>
        <div class="py-10 md:grid grid-cols-3 gap-4">
            <div class="py-6">
                <div class="sixth-div-icon-div"><span class="icon-[vaadin--tabs] sixth-div-icon"></span></div>
                <div class="sixth-div-mini-header">2100+ instruments</div>
                <div class="sixth-div-mini-text">Wide range of global markets, including Forex, Indices, Commodities, ETFs and more.</div>
            </div>
            <div class="py-6">
                <div class="sixth-div-icon-div"><span class="icon-[uil--shield-check] sixth-div-icon"></span></div>
                <div class="sixth-div-mini-header">Safe & Secure</div>
                <div class="sixth-div-mini-text">TruvoTrade is regulated by the world's biggest supervision authorities, including the Financial Conduct Authority.</div>
            </div>
            <div class="py-6">
                <div class="sixth-div-icon-div"><span class="icon-[uil--book-open] sixth-div-icon"></span></div>
                <div class="sixth-div-mini-header">Comprehensive Education</div>
                <div class="sixth-div-mini-text">Make use of our extensive video library and get to know more about trading.</div>
            </div>
            <div class="py-6">
                <div class="sixth-div-icon-div"><span class="icon-[hugeicons--ai-innovation-03] sixth-div-icon"></span></div>
                <div class="sixth-div-mini-header">Innovative Platform</div>
                <div class="sixth-div-mini-text">We're constantly improving our trading platform to make it the best on the market.</div>
            </div>
            <div class="py-6">
                <div class="sixth-div-icon-div"><span class="icon-[hugeicons--message-user-01] sixth-div-icon"></span></div>
                <div class="sixth-div-mini-header">495,000+ customers</div>
                <div class="sixth-div-mini-text">With years of activity in the financial markets, TruvoTrade has gained thousands of customers.</div>
            </div>
            <div class="py-6">
                <div class="sixth-div-icon-div"><span class="icon-[hugeicons--user-star-02] sixth-div-icon"></span></div>
                <div class="sixth-div-mini-header">Fast & highly qualified support</div>
                <div class="sixth-div-mini-text">Our multilingual customer support team is ready to help you - 24h hours a day.</div>
            </div>
        </div>
    </div>
    
    {{--seventh div--}}
    <div style="background-image: url('{{ asset('img/in-wave-mockup-5.png') }}');" class="bg-cover">
        <div class="general-div-container backdrop-blur-xl md:flex justify-between items-center">
            <div class="flex justify-center">
                <div class=" divide-y divide-gray-500">
                    <div class="md:flex items-center gap-4">
                        <div class="seventh-div-os-con">
                            <div>
                                <span class="icon-[ion--logo-google-playstore] seventh-div-icon"></span>
                            </div>
                            <div>
                                <div class="text-gray-500">Available for</div>
                                <div class="seventh-div-sys">Android</div>
                            </div>
                        </div>
                        <div class="seventh-div-os-con">
                            <div>
                                <span class="icon-[uil--apple] seventh-div-icon"></span>
                            </div>
                            <div>
                                <div class="text-gray-500">Available for</div>
                                <div class="seventh-div-sys">IOS</div>
                            </div>
                        </div>
                        <div class="seventh-div-os-con">
                            <div>
                                <span class="icon-[uil--windows] seventh-div-icon"></span>
                            </div>
                            <div>
                                <div class="text-gray-500">Available for</div>
                                <div class="seventh-div-sys">Windows</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-2xl md:text-4xl text-gray-500 font-bold py-4">Trade From Any Device</div>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/in-wave-mockup-5.png')}}" alt="">
            </div>
        </div>
    </div>

    {{--eight div--}}
    <div class="relative w-full h-screen overflow-hidden -mt-11">
        <img src="{{ asset('img/crypto-solar-system.png')}}" alt="" class="absolute w-full h-full object-cover">

        <!-- Optional overlay content -->
        <div class="general-div-container absolute top-0 left-0 w-full h-full  text-white z-10">
            <div class="my-16 font-light text-center">
                ____________ DEPOSIT WITH CRYPTO ___________
            </div>
            <div class="text-3xl md:text-5xl font-bold text-center">We accept crypto deposits</div>
            <div class="font-bold text-center font-nunito py-10">Deposit, withdraw and hold your balance in Bitcoin, Ethereum</div>
            <div class="flex justify-center">
                <div class="eight-div-btn button">
                    <a href="{{ route('show.register') }}">Get Started</a>
                </div>
            </div>
        </div>
        
        <!-- Optional dark overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-90 z-0"></div>
    </div>

    {{--ninth div--}}
    <div class="bg-white md:flex justify-between items-center gap-5 flex-row-reverse general-div-container">
        <div class="basis-1/2">
            <img src="{{asset('img/mt4-demo-screen.jpg')}}" alt="" class="">
        </div>
        <div class=" basis-1/2">
            <div class="flex md:block justify-center">
                <img src="{{ asset('img/mt5-logo.png')}}" alt="">
            </div>
            <div class="text-3xl md:text-4xl font-bold text-center md:text-start py-3">Free Demo and Live MT4 Accounts</div>
            <div class="text-gray-500 text-center md:text-start py-5">
                Instant market access and endless possibilities for trading, analysis and automation. Metaquotes 5 is an evolution of MT4 with additional features that supercharge your trading.
            </div>
            <div class="flex justify-center md:block">
                <div class="ninth-div-btn button">
                    <a href="{{ route('show.register') }}">Open an Account</a>
                </div>
            </div>
        </div>
    </div>

    {{--tenth div--}}
    <div class="general-div-container">
        <div class="tenth-div-header">We Are Trusted</div>
        <div class="tenth-div-card-con">
            <div class="tenth-div-card">
                <img src="{{asset('img/ico-rating.png')}}" alt="">
                <div class="tenth-div-card-rate-con">
                    <div class="tenth-div-card-rate">8.9</div>
                </div>
            </div>
            <div class="tenth-div-card">
                <img src="{{asset('img/coin-clarity.png')}}" alt="">
                <div class="tenth-div-card-rate-con">
                    <div class="tenth-div-card-rate">7.9</div>
                </div>
            </div>
            <div class="tenth-div-card">
                <img src="{{asset('img/ico-watchlist.png')}}" alt="">
                <div class="tenth-div-card-rate-con">
                    <div class="tenth-div-card-rate">8.0</div>
                </div>
            </div>
            <div class="tenth-div-card">
                <img src="{{asset('img/coin-market-alert.png')}}" alt="">
                <div class="tenth-div-card-rate-con">
                    <div class="tenth-div-card-rate">9.0</div>
                </div>
            </div>
            <div class="tenth-div-card">
                <img src="{{asset('img/ico-alert.png')}}" alt="">
                <div class="tenth-div-card-rate-con">
                    <div class="tenth-div-card-rate">7.4</div>
                </div>
            </div>
            <div class="tenth-div-card">
                <img src="{{asset('img/token-market.png')}}" alt="">
                <div class="tenth-div-card-rate-con">
                    <div class="tenth-div-card-rate">8.7</div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-image: url('{{ asset('img/pexels-street.png') }}')" class="bg-cover bg-center min-h-screen">
        <div class="general-div-container  text-white backdrop-blur-xs">
            <div class=" bg-white rounded-lg p-4 md:p-10">
                <div class="border-b border-gray-600">
                    <div class="text-2xl md:text-4xl font-bold text-gray-900 py-8">Trusted For More Than 7 Years</div>
                    <div class="text-gray-400 font-nunito text-sm md:text-base">
                        TruvoTrade is an online Forex and cryptocurrency STP broker providing CFD trading on hundreds of assets and optimal trading conditions within the award-winning MT4 platform. TruvoTrade offers deep liquidity, generous leverage up to 1:500, and some of the best spreads in the industry. As part of our commitment to our client’s satisfaction, we offer 24/7 live customer service, charge no deposit or withdrawal fees, and process withdrawals within 30-minutes or less. We feel that these, along with many other advantages, help to set us apart from the rest.
                    </div>
                    <div class="text-gray-700 text-2xl font-nunito py-8">Multi-award winner</div>
                </div>
                <div class="py-8 md:flex justify-around">
                    <div class="tenth-div-award-con">
                        <div><img src="{{asset('img/in-wave-award.svg')}}" alt=""></div>
                        <div class="basis-9/12">
                            <div class="tenth-div-award-head">Best CFD Broker</div>
                            <div class="tenth-div-award-text">TradeON Summit 2020</div>
                        </div>
                    </div>
                    <div class="tenth-div-award-con">
                        <div><img src="{{asset('img/in-wave-award.svg')}}" alt=""></div>
                        <div class="basis-9/12">
                            <div class="tenth-div-award-head">Best Trading Experience</div>
                            <div class="tenth-div-award-text">Jordan Forex EXPO 2015</div>
                        </div>
                    </div>
                    <div class="tenth-div-award-con">
                        <div><img src="{{asset('img/in-wave-award.svg')}}" alt=""></div>
                        <div class="basis-9/12">
                            <div class="tenth-div-award-head">Best Execution Broker</div>
                            <div class="tenth-div-award-text">Forex EXPO Dubai 2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-6 border-b border-gray-500 md: md:flex justify-between items-center bg-white">
        <div class="text-gray-400 font-semibold">As seen on</div>
        <div class="flex justify-between items-center gap-2 md:gap-6 basis-11/12 md:flex-wrap">
            <span class="tenth-div-sponsor-span">
                <img src="{{asset('img/cnbc.svg')}}" alt="" class="tenth-div-sponsor-img">
            </span>
            <span class="tenth-div-sponsor-span">
                <img src="{{asset('img/the-guardian.svg')}}" alt="" class="tenth-div-sponsor-img">
            </span>
            <span class="tenth-div-sponsor-span">
                <img src="{{asset('img/bloomberg.svg')}}" alt="" class="tenth-div-sponsor-img">
            </span>
            <span class="tenth-div-sponsor-span">
                <img src="{{asset('img/reuters.svg')}}" alt="" class="tenth-div-sponsor-img">
            </span>
            <span class="tenth-div-sponsor-span">
                <img src="{{asset('img/market-watch.svg')}}" alt="" class="tenth-div-sponsor-img">
            </span>
        </div>
    </div>

    {{--eleventh div--}}
    <div class="general-div-container">
        <div class="text-3xl md:text-4xl font-bold text-center py-5">Trade With Confidence</div>
        <div class="divide-y divide-gray-400 md:divide-y-0 md:divide-x md:grid grid-cols-3 mt-6">
            <div class="p-6">
                <div class="eleventh-div-icon-con">
                    <span class="icon-[uil--user-plus] eleventh-div-icon"></span>
                </div>
                <div class="eleventh-div-mini-header">Register</div>
                <div class="eleventh-div-mini-text">
                    Fill in your personal details in our secure online application.
                </div>
            </div>
            <div class="p-6">
                <div class="eleventh-div-icon-con">
                    <span class="icon-[ion--wallet-outline] eleventh-div-icon"></span>
                </div>
                <div class="eleventh-div-mini-header">Deposit</div>
                <div class="eleventh-div-mini-text">
                    Make a deposit via debit card, wire transfer or crypto.
                </div>
            </div>
            <div class="p-6">
                <div class="eleventh-div-icon-con">
                    <span class="icon-[ion--stats-chart-outline] eleventh-div-icon"></span>
                </div>
                <div class="eleventh-div-mini-header">Trading</div>
                <div class="eleventh-div-mini-text">Once your approved, you can trade on desktop and mobile.</div>
            </div>
        </div>
        <div class="border border-gray-400 mt-10 p-8 rounded-lg md:flex justify-between items-center relative bg-white">
            <div class="absolute -top-2 left-5 bg-gray-300 rounded-full w-40 text-center text-sm font-bold">OPEN YOUR ACCOUNT</div>
            <div class="text-gray-500 pb-8 md:pb-0 font-nunito">Connect with over 450,000 investors in the world’s leading FX Broker</div>
            <div class="eleventh-div-btn button">
                <a href="{{ route('show.register') }}">Open Account</a>
            </div>
        </div>
    </div>
</x-home-layout>