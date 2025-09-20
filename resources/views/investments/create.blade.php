<x-trader-layout>
    <div class="p-6 bg-white rounded-lg shadow">
        <form action="{{ route('investments.store') }}" method="POST">
            @csrf

            {{-- Hidden fields --}}
            {{-- <input type="hidden" name="user_id" value="{{ auth()->id() }}"> --}}
            <input type="hidden" name="plan" value="{{ $plan }}">
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="minimum" value="{{ $minimum }}">
            <input type="hidden" name="maximum" value="{{ $maximum }}">
            <input type="hidden" name="end" value="{{ $end }}">

            <!-- Display validation or session errors -->
            @if ($errors->any())
                <div class="text-red-500 font-semibold bg-red-50 p-4 rounded">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {{-- Display blockchain --}}
            <div class="bg-orange-100 px-6 py-3 rounded-lg mx-auto flex items-center gap-5 w-full lg:w-1/2 text-sm md:text-base">
                <div class="bg-orange-400 text-orange-100 font-bold p-2 rounded-lg">
                    Your Plan
                </div>
                <div class="text-orange-400 font-bold flex-1 text-center capitalize">
                    {{ $plan }}
                </div>
            </div>

            {{-- Display amount --}}
            <div class="text-gray-600 md:text-2xl font-extrabold w-2/3 lg:w-1/2 mx-auto my-10 text-center">
                You are about to invest in the {{ $plan }} plan with ${{ $amount }} which will end on {{ $end->format('F j, Y g:i A') }}.
            </div>

            {{-- Submit Button --}}
            <button class="bg-orange-400 hover:bg-orange-300 font-bold text-white px-4 py-2 rounded-md block mx-auto button">Submit Payment</button>

            <div class="mt-4 text-orange-300 font-bold">
                <a href="{{ route('trader.plans') }}" class="button">Back to plans</a>
            </div>
        </form>
    </div>
</x-trader-layout>