<x-home-layout>
    {{-- first div --}}
    <div style="background-image: url('{{ asset('img/nightlife.png') }}')" class="platforms-first-div-con">
        <div class="platforms-first-div-text">
           TRADING PLATFORMS
        </div>
    </div>

    {{-- second div --}}
    <div class="general-div-container">
        <div>
            <img src="{{ asset('img/platform-img1.png')}}" alt="" class="w-xl mx-auto -mt-40 md:-mt-60 relative">
        </div>
        <div class="text-black text-3xl font-bold text-center py-8 max-w-xl mx-auto">
            GET MORE FROM METATRADER WITH TRUEPERFECTLINE
        </div>
        <div class="text-gray-500 font-nunito max-w-xl text-center mx-auto">
            Our MT4 and MT5 platforms combine the charting and analysis power of MetaTrader with trueperfectline raw spreads and rapid execution.
        </div>
        <div class="text-gray-500 font-nunito max-w-xl text-sm py-10 text-center mx-auto">
            Available on PC, Mac, web and mobile.
        </div>
    </div>

    {{-- third div --}}
    <div class="general-div-container bg-white">
        <div class="text-black text-3xl font-bold text-center py-8">
            INSTANT ACCESS TO GLOBAL MARKETS
        </div>
        <div class="text-gray-500 font-nunito text-center text-lg font-semibold">
            Analyse the markets, spot your opportunities and trade, all from the same platform. Charts, news streams, and mulitple order exeuction options available from any device.
        </div>
        <div class="md:flex justify-between items-center gap-8">
            <div class="platform-third-div-card">
                <div class="platform-third-div-card-icon-con">
                    <span class="icon-[ph--check-circle-fill]"></span>
                </div>
                <div class="platform-third-div-card-text">Professional Technical Analysis</div>
            </div>
            <div class="platform-third-div-card">
                <div class="platform-third-div-card-icon-con">
                    <span class="icon-[ph--check-circle-fill]"></span>
                </div>
                <div class="platform-third-div-card-text">Automatic Trading Using Expert Advisors</div>
            </div>
            <div class="platform-third-div-card">
                <div class="platform-third-div-card-icon-con">
                    <span class="icon-[ph--check-circle-fill]"></span>
                </div>
                <div class="platform-third-div-card-text">Mobile, Web, and Desktop Trading</div>
            </div>
            <div class="platform-third-div-card">
                <div class="platform-third-div-card-icon-con">
                    <span class="icon-[ph--check-circle-fill]"></span>
                </div>
                <div class="platform-third-div-card-text">Chart Trading and Market Execution</div>
            </div>
            <div class="platform-third-div-card">
                <div class="platform-third-div-card-icon-con">
                    <span class="icon-[ph--check-circle-fill]"></span>
                </div>
                <div class="platform-third-div-card-text">Buy, Sell, Stop Limit and Sell Stop orders</div>
            </div>
        </div>
    </div>

    {{-- fourth div --}}
    <div class="general-div-container bg-black text-white">
        <div class="text-center font-bold text-3xl pt-10 pb-20">THE BEST IN THE BUSINESS</div>
        <div class="md:flex justify-between items-center gap-10 py-10">
            <div class="platform-fourth-div-card">
                <div class="platform-fourth-div-card-icon-con">
                    <span class="icon-[simple-icons--timescale]"></span>
                </div>
                <div class="platform-fourth-div-card-header">REACT RAPIDLY</div>
                <div class="platform-fourth-div-card-text">
                    When milliseconds matter, our ultra‑low‑latency networks let you enter and exit your trades with precision timing.
                </div>
            </div>
            <div class="platform-fourth-div-card">
                <div class="platform-fourth-div-card-icon-con">
                    <span class="icon-[simple-icons--timescale]"></span>
                </div>
                <div class="platform-fourth-div-card-header">NEVER MISS A TRADE</div>
                <div class="platform-fourth-div-card-text">
                    Indicators, objects and tools to help you analyse every market and find your entry and exit points.
                </div>
            </div>
            <div class="platform-fourth-div-card">
                <div class="platform-fourth-div-card-icon-con">
                    <span class="icon-[simple-icons--timescale]"></span>
                </div>
                <div class="platform-fourth-div-card-header">AUTOMATE TRADES</div>
                <div class="platform-fourth-div-card-text">
                    Test your strategy without your intervention. Apply "expert advisors" to automate trades based on your rules.
                </div>
            </div>
        </div>
    </div>
</x-home-layout>