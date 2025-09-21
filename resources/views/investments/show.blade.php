<x-trader-layout>
    <div class="p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Investment Details</h2>

        <div class="grid gap-4 sm:grid-cols-2">
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Investment Plan</p>
                <p class="text-lg font-semibold text-gray-800">{{ ucfirst($investment->plan) }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Status</p>
                <span 
                    @class([
                        'px-3 py-1 text-sm font-medium rounded-full',
                        'bg-green-100 text-green-700' => $investment->status === 'successful',
                        'bg-yellow-100 text-yellow-700' => $investment->status === 'pending',
                        'bg-red-100 text-red-700' => $investment->status !== 'successful' && $investment->status !== 'pending',
                    ])
                >
                    {{ ucfirst($investment->status) }}
                </span>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Amount</p>
                <p class="text-lg font-semibold text-gray-800">${{ number_format($investment->amount, 2) }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Expected Interest</p>
                <p class="text-lg font-semibold text-gray-800 break-all">{{ $investment->interest }}%</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Expected Return</p>
                <p class="text-lg font-semibold text-gray-800 break-all">${{ number_format(($investment->amount*$investment->interest/100)+$investment->amount, 2) }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Term Start Date</p>
                <p class="text-lg font-semibold text-gray-800 break-all">{{ $investment->created_at->format('F j, Y g:i A') }}</p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg sm:col-span-2">
                <p class="text-sm text-gray-500">Term End Date</p>
                <p class="text-lg font-semibold text-gray-800 break-all">{{ $investment->end->format('F j, Y g:i A') }}</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('investments.index') }}" class="inline-block px-5 py-2 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700">
                Back to Investments
            </a>
        </div>
    </div>
</x-trader-layout>