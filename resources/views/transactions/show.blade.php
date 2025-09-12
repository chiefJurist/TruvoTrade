<x-trader-layout>
    <div class="p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Transaction Details</h2>

        <div class="grid gap-4 sm:grid-cols-2">
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Type</p>
                <p class="text-lg font-semibold text-gray-800">Deposit</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Blockchain</p>
                <p class="text-lg font-semibold text-gray-800">{{ ucfirst($transaction->blockchain) }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Status</p>
                <span 
                    @class([
                        'px-3 py-1 text-sm font-medium rounded-full',
                        'bg-green-100 text-green-700' => $transaction->status === 'successful',
                        'bg-yellow-100 text-yellow-700' => $transaction->status === 'pending',
                        'bg-red-100 text-red-700' => $transaction->status !== 'successful' && $transaction->status !== 'pending',
                    ])
                >
                    {{ ucfirst($transaction->status) }}
                </span>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Amount</p>
                <p class="text-lg font-semibold text-gray-800">${{ number_format($transaction->amount, 2) }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">From</p>
                <p class="text-lg font-semibold text-gray-800 break-all">{{ $transaction->from }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">To</p>
                <p class="text-lg font-semibold text-gray-800 break-all">{{ $transaction->to }}</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('transactions.index') }}" 
               class="inline-block px-5 py-2 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700">
                Back to Transactions
            </a>
        </div>
    </div>
</x-trader-layout>
