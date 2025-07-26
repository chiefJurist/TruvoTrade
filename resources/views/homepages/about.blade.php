<x-home-layout>
    {{-- first div --}}
    <div class="general-div-container about-first-div-container">
        <div class="md:pr-36">
            <div class="font-semibold font-nunito text-gray-500 pb-5">ABOUT TRUVOTRADE</div>
            <div class="div-headings">
                We're one of the largest stock exchange-listed FX & CFD brokers in the world
            </div>
            <div class="div-texts text-gray-500">
                TruvoTrade is a licensed industry leader, at work to source the best products in the market for you, while also striving to increase accessibility and transparency in the trading industry.
            </div>
        </div>
        <div class=" pt-10 md:pt-0">
            <img src="{{ asset('img/about-img1.webp')}}" alt="" class="w-xl md:w-5xl">
        </div>
    </div>

    {{-- second div --}}
    <div class="general-div-container flex justify-center">
        <div class="lg:flex justify-between gap-5">
            <div class="about-second-div-card">
                <div><span class="icon-[simple-line-icons--trophy] text-5xl"></span></div>
                <div class="about-second-div-card-text">We constantly improve our trading platform trying to make it the best on the market</div>
            </div>
            <div class="about-second-div-card">
                <div><span class="icon-[simple-line-icons--badge] text-5xl"></span></div>
                <div class="about-second-div-card-text">We’re regulated by the the world's biggest supervision authorities</div>
            </div>
            <div class="about-second-div-card">
                <div><span class="icon-[simple-line-icons--check] text-5xl"></span></div>
                <div class="about-second-div-card-text">Our award - winning trading solutions are shaped to help you achieve your trading ambitions</div>
            </div>
        </div>
    </div>

    {{-- third div --}}
    <div class="general-div-container about-first-div-container">
        <div class="md:pr-36">
            <div class="div-headings">
                Our Company
            </div>
            <div class="div-texts text-gray-500">
                With almost 20 years of experience, TruvoTrade is one of the largest stock exchange-listed FX & CFD brokers in the world. We have offices in over 13 countries including UK, Poland, Germany, France and Chile.
            </div>
            <a href="{{ route('show.register') }}">
                <div class="mt-6 md:mt-12 about-third-div-btn button">Open an Account</div>
            </a>
        </div>
        <div class=" pt-10 md:pt-0">
            <img src="{{ asset('img/about-img2.png')}}" alt="" class="w-xl md:w-5xl">
        </div>
    </div>

    {{-- fourth div --}}
    <div class="general-div-container flex justify-center">
        <div class="lg:flex justify-between gap-5">
            <div class="about-second-div-card">
                <div><span class="icon-[simple-line-icons--map] text-5xl"></span></div>
                <div class="grow">
                    <div class="about-fourth-div-card-header">Address</div>
                    <div class="about-second-div-card-text">1910 Pacific Ave, Dallas, TX 75201</div>
                </div>
            </div>
            <div class="about-second-div-card">
                <div><span class="icon-[simple-line-icons--envolope-letter] text-5xl"></span></div>
                <div class="grow">
                    <div class="about-fourth-div-card-header">Inquiry</div>
                    <div class="about-second-div-card-text">info@truvotrade.com</div>
                </div>
            </div>
            <div class="about-second-div-card">
                <div><span class="icon-[simple-line-icons--envolope] text-5xl"></span></div>
                <div class="grow">
                    <div class="about-fourth-div-card-header">Email</div>
                    <div class="about-second-div-card-text">support@truvotrade.com</div>
                </div>
            </div>
        </div>
    </div>

    {{-- fifth div --}}
    <div class="general-div-container bg-white">
        <div class="div-headings">Our Values</div>
        <div class="font-nunito text-gray-400 py-5 max-w-3xl">
            TruvoTrade strives to provide the best possible trading experience to our clients, and our core values are tightly aligned with that vision.
        </div>
    </div>

    {{-- sixth div --}}
    <div class="general-div-container bg-white md:flex justify-between items-center gap-5">
        <div>
            <div class="about-sixth-div-header">Our Technology</div>
            <div class="about-sixth-div-body">
                Nowadays, technology is one of the most important elements of investing and finance. We know that, that's why we constantly improve our trading application in accordance with the latest trends and solutions. Our ambition is to make TruvoTrade one of the most reliable and functional trading apps on the market.
            </div>
        </div>
        <div>
            <div class="about-sixth-div-header">Support</div>
            <div class="about-sixth-div-body">
                We are here to help our clients become better investors. That's why our experienced customer service team works 24 hours a day for a good 5 days a week, and our extensive library of educational materials contains videos, webinars and courses suitable for both beginners and experienced investors.
            </div>
        </div>
    </div>

    {{-- COPIED DIVS FROM WELCOME PAGE --}}
    {{--tenth div--}}
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
            <div class="absolute -top-2 left-5 bg-gray-300 rounded-full w-40 text-center text-sm font-bold">
                OPEN YOUR ACCOUNT
            </div>
            <div class="text-gray-500 pb-8 md:pb-0 font-nunito">
                Connect with over 450,000 investors in the world’s leading FX Broker
            </div>
            <a href="{{ route('show.register') }}">
                <div class="eleventh-div-btn button">
                    Open Account
                </div>
            </a>
        </div>
    </div>

</x-home-layout>