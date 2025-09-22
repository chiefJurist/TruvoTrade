<x-trader-layout>
    <div class="max-w-2xl mx-auto py-10">
        {{-- Page Heading --}}
        <div class="mb-6 text-center">
            <div class="text-2xl font-bold">Confirm Transfer</div>
            <div class="text-gray-500">Confirm the transfer amount</div>
        </div>

        {{-- Withdrawal Form --}}
        <form action="{{ route('transfer.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Display validation or session errors -->
            @if ($errors->any())
                <div class="text-red-500 p-5 font-semibold bg-red-50 rounded">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {{-- Hidden inputs (from modal) --}}
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="profit" value="{{ $profit }}">

            {{-- Show transfer amount --}}
            <div class="bg-purple-50 border border-purple-200 p-4 rounded-lg text-center">
                <div class="text-lg font-semibold text-purple-700">
                    <span>You are transfering </span>
                    <span class="text-xl">{{ number_format($amount, 2) }}</span>
                    <span>Profit to your balance</span>
                </div>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 button">
                    Confirm Transfer
                </button>
            </div>

            <div class="mt-4 text-orange-300 font-bold">
                <a href="{{ route('trader.overview') }}" class="button">Back to Overview</a>
            </div>
        </form>
    </div>
</x-trader-layout>