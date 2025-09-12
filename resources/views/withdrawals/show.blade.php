<x-trader-layout>
    <div class="p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Withdrawal Details</h2>

        <div class="grid gap-4 sm:grid-cols-2">
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Method</p>
                <p class="text-lg font-semibold text-gray-800">{{ ucfirst($withdrawal->method) }} Account</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Status</p>
                <span 
                    @class([
                        'px-3 py-1 text-sm font-medium rounded-full',
                        'bg-green-100 text-green-700' => $withdrawal->status === 'successful',
                        'bg-yellow-100 text-yellow-700' => $withdrawal->status === 'pending',
                        'bg-red-100 text-red-700' => $withdrawal->status !== 'successful' && $withdrawal->status !== 'pending',
                    ])
                >
                    {{ ucfirst($withdrawal->status) }}
                </span>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Amount</p>
                <p class="text-lg font-semibold text-gray-800">${{ number_format($withdrawal->amount, 2) }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">From</p>
                <p class="text-lg font-semibold text-gray-800 break-all">Balance</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">To</p>
                <p class="text-lg font-semibold text-gray-800 break-all">{{ $withdrawal->account }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg sm:col-span-2">
                <p class="text-sm text-gray-500">Initiation Time</p>
                <p class="text-lg font-semibold text-gray-800 break-all">{{ $withdrawal->created_at }}</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('withdrawals.index') }}" 
               class="inline-block px-5 py-2 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700">
                Back to Withdrawals
            </a>
        </div>
    </div>
</x-trader-layout>