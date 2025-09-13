<x-trader-layout>
    <div class="p-6 bg-white rounded-lg shadow">
        <form action="{{ route('tokens.store') }}" method="POST">
            @csrf

            {{-- Hidden fields --}}
            {{-- <input type="hidden" name="user_id" value="{{ auth()->id() }}"> --}}
            <input type="hidden" name="blockchain" value="{{ $blockchain }}">
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="cost" value="{{ $cost }}">
            <input type="hidden" name="address" value="{{ $depositAddress }}">

            <!-- Display validation or session errors -->
            @if ($errors->any())
                <div class="text-red-500 p-5 font-semibold bg-red-50 rounded">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {{-- Display blockchain --}}
            <div class="bg-orange-100 px-6 py-3 rounded-lg mx-auto flex items-center gap-5 w-full lg:w-1/2 text-sm md:text-base">
                <div class="bg-orange-400 text-orange-100 font-bold p-2 rounded-lg">
                    Your Payment Method
                </div>
                <div class="text-orange-400 font-bold flex-1 text-center">
                    {{ $blockchain }}
                </div>
            </div>

            {{-- Display amount --}}
            <div class="text-gray-600 md:text-2xl font-extrabold w-2/3 lg:w-1/2 mx-auto my-10 text-center">
                You are about to purchase a total of {{ $token }} tokens which cost ${{ $cost }} worth of {{ $blockchain }} 
            </div>

            {{-- Deposit Address --}}
            <div class="text-sm font-bold my-1">
                {{ $blockchain }} ADDRESS
            </div>

            <div class="w-full border border-gray-300 rounded-lg flex justify-between">
                <div id="deposit-address" class="p-2 whitespace-nowrap overflow-auto select-all">
                    {{ $depositAddress }}
                </div>
                <div onclick="copyDepositAddress()" class="font-bold text-white bg-blue-400 flex justify-center gap-1.5 items-center p-2 rounded-lg hover:bg-blue-500 button">
                    <span class="icon-[tabler--copy]"></span>
                    <span>Copy</span>
                </div>
                <div id="address-copy-toast" class="hidden fixed bottom-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow z-50">
                    Address copied to clipboard!
                </div>
            </div>

            {{-- Transaction Hash Input --}}
            <div class="my-10">
                <div class="font-bold text-sm">Upload Transaction Hash Of Payment</div>
                <input type="text" name="hash" placeholder="Your Transaction Hash" class="border border-gray-300 outline-none p-2 rounded-lg w-full text-gray-500 italic">
            </div>

            {{-- Submit Button --}}
            <button class="bg-orange-400 font-bold text-white px-4 py-2 rounded-md block mx-auto">Submit Payment</button>


            <div class="mt-4 text-orange-300 font-bold">
                <a href="{{ route('trader.overview') }}" class="button">Back to Overview</a>
            </div>
        </form>
    </div>
</x-trader-layout>