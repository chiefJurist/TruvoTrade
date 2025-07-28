<x-home-layout>
    {{-- first div --}}
    <div style="background-image: url('{{ asset('img/nightlife.png') }}')" class="marijuana-first-div-con">
        <div class="marijuana-first-div-text">
            MARIJUANA
        </div>
    </div>

    {{-- second div --}}
    <div class="general-div-container lg:flex justify-between items-start gap-5 bg-white">
        <div class="basis-1/2">
            <div class="text-black text-center text-2xl font-bold py-10">Invest in Marijuana - 700% return profit</div>
            <div>
                <img src="{{ asset('img/marijuana-img1.png')}}" alt="" class="mx-auto">
            </div>
        </div>
        <div class="basis-1/2 mt-10 lg:mt-0">
            <div class="text-black text-center text-2xl font-bold py-10">
                As States Legalize Marijuana, Investors See an Opportunity
            </div>
            <div class="font-nunito text-gray-500">
                Marijuana s the world’s most commonly cultivated, trafficked, and used illicit drug, and as the push for legalization at home and abroad grows, marijuana is garnering significant attention from investors, manufacturers, and researchers. Despite the plant being illegal under federal law as a Schedule I drug, the U.S. legal marijuana industry was estimated at $10.4 billion in 2018 with 250,000 jobs devoted to the handling of plants, according to New Frontier Data. A total of 33 states have legalized marijuana for medical use, 10 of which allow adults to legally use the drug for recreational use. And that number may continue to rise, as more people are accepting the idea of legalizing marijuana across the United States. This article looks at some of the uses of marijuana as well as the overall market for the drug.
            </div>
        </div>
    </div>

    {{-- third div --}}
    <div class="general-div-container md:flex justify-between items-start gap-16 bg-white">
        <div class="basis-1/2">
            <img src="{{asset('img/marijuana-img2.jpg')}}" alt="">
        </div>
        <div class="basis-1/2 mt-5 md:mt-0">
            <img src="{{asset('img/marijuana-img3.jpg')}}" alt="">
        </div>
    </div>

    {{-- fourth div --}}
    <div class="general-div-container bg-white">
        <div class="text-3xl font-bold">Trueperfectline Marijuana</div>
        <div class="py-5 text-gray-500 font-nunito">
            <li>$6k to $500k Minimum Investment</li>
            <li>10% Return over</li>
            <li>24 Hours Expiration time</li>
            <li>Trade Marijuana</li>
        </div>
        <a href="{{ route('show.register') }}">
            <div class="forex-first-div-btn button">Get Started</div>
        </a>
    </div>
</x-home-layout>