<x-trader-layout>
    <div class="max-w-2xl mx-auto py-10">
        {{-- Page Heading --}}
        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold">Confirm Withdrawal</h1>
            <p class="text-gray-500">Choose the account to withdraw your funds</p>
        </div>

        {{-- Withdrawal Form --}}
        <form action="{{ route('withdrawals.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Hidden inputs (from modal) --}}
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="method" value="{{ $method }}">
            <input type="hidden" name="status" value="pending">

            {{-- Show withdrawal amount --}}
            <div class="bg-purple-50 border border-purple-200 p-4 rounded-lg text-center">
                <p class="text-lg font-semibold text-purple-700">
                    You are withdrawing: <span class="text-xl">{{ number_format($amount, 2) }}</span>
                </p>
                <p class="text-sm text-gray-500 capitalize">Method: {{ $method }}</p>
            </div>

            {{-- Select Account --}}
            <div>
                <h2 class="text-lg font-semibold mb-3">Select {{ ucfirst($method) }} Account</h2>
                <div class="grid gap-4">
                    @forelse($accounts->where('type', ucfirst($method)) as $account)
                        <label class="cursor-pointer block">
                            <input 
                                type="radio" 
                                name="account" 
                                value="{{ $account->id }}" 
                                class="peer hidden"
                                required
                            >
                            <div class="p-4 border rounded-lg peer-checked:border-purple-500 peer-checked:bg-purple-50 transition">
                                <div class="flex items-center gap-3">
                                    @if($account->type === 'Crypto')
                                        <span class="icon-[tabler--coins] text-xl text-purple-600"></span>
                                        <div>
                                            <p class="font-bold">{{ $account->label_of_account }}</p>
                                            <p class="text-sm text-gray-500">{{ $account->wallet_chain }}</p>
                                        </div>
                                    @else
                                        <span class="icon-[tabler--building-bank] text-xl text-purple-600"></span>
                                        <div>
                                            <p class="font-bold">{{ $account->label_of_account }}</p>
                                            <p class="text-sm text-gray-500">{{ $account->bank_name }} ({{ $account->bank_currency }})</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </label>
                    @empty
                        <div class="p-4 border border-gray-200 bg-gray-50 text-center text-gray-500 rounded-lg">
                            No {{ $method }} accounts available. Please add one first.
                        </div>
                    @endforelse
                </div>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 button">
                    Confirm Withdrawal
                </button>
            </div>

            <!-- Display validation or session errors -->
            @if ($errors->any())
                <div class="text-red-500">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="mt-4 text-orange-300 font-bold">
                <a href="{{ route('withdrawals.index') }}" class="button">Back to Withdrawals</a>
            </div>
        </form>
    </div>
</x-trader-layout>