<x-home-layout>
    {{-- first div --}}
    <div style="background-image: url('{{ asset('img/nightlife.png') }}')" class="marijuana-first-div-con">
        <div class="marijuana-first-div-text">
            SWAPS
        </div>
    </div>

    {{--second div --}}
    <div class="general-div-container bg-white">
        <div class="text-center text-3xl md:text-4xl text-black font-bold py-5">WHAT ARE SWAPS?</div>
        <div class="swaps-text-divs">
            Swap is the interest paid or earned for holding a position overnight. Each symbol has an overnight lending rate associated with it. Spot trades need to be settled and rolled forward every day. Swaps are attached to open positions and are realized when the position is closed.
        </div>
        <div class="swaps-text-divs">
            Overnight interest rates will determine whether the trader will ultimately pay to hold the position or earn interest.
        </div>
        <div class="swaps-text-divs">
            22:00 (UK Time) is considered the beginning and end of a trade session. Any positions that are open at 22:00 (UK Time) are considered to be held overnight, and are subject to rollover.
        </div>
        <div class="swaps-text-divs">
            Swap is calculated and charged once daily. Globally, most banks are closed on Saturdays and Sundays, so there is no rollover on these days. Therefore, 3x the amount of swap is applied on Wednesday to account for these two days.*
        </div>
        <div class="swaps-text-divs">
            *For AUS200, STOXX50, HK50, JP225, DE30, ESP35, UK100, DJ, ND, S&P500 the 3x swap is applied on Friday, while for USDTRY, USDCAD & USDRUB the 3x swap is applied on Thursday.
        </div>
    </div>

    {{--third div --}}
    <div class="general-div-container bg-white">
        <div class="text-3xl md:text-4xl text-black font-bold pb-5">TRUEPERFECTLINE SWAP RATES</div>
        <div class="swaps-text-divs">
            To view the latest swap rates for any of our instruments, please refer to the MT4 or MT5 Trading platforms.
        </div>
        <div class="swaps-text-divs">
            <div>1. Open MT4 or MT5</div>
            <div>2. View > Market Watch</div>
            <div>3. Right click on Market Watch and select Symbols</div>
            <div>4. Right click on the instrument you want to check and chose Properties.</div>
        </div>
    </div>
</x-home-layout>