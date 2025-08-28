<x-trader-layout>
    <div class="max-w-4xl mx-auto mt-10">
        <div class="bg-purple-50 shadow-md rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-purple-800 mb-6">Account Details</h2>

            @if($account->type == 'Crypto')
                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="font-bold lg:text-xl text-purple-600">Withdrawal Type:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->type }} ({{ $account->label_of_account }})</div>

                        <div class="font-bold lg:text-xl text-purple-600">Wallet Chain:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->wallet_chain }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Wallet Address:</div>
                        <div class="text-purple-600 italic break-words">{{ $account->wallet_address }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Account Label:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->label_of_account }}</div>
                    </div>
                </div>
            @else
                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="font-bold lg:text-xl text-purple-600">Type:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->type }} ({{ $account->label_of_account }})</div>

                        <div class="font-bold lg:text-xl text-purple-600">Account Type:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->account_type }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Account Name:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->account_name }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Account Number:</div>
                        <div class="text-purple-600 italic break-words">{{ $account->account_number }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Bank Country:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->bank_country }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Bank Currency:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->bank_currency }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Bank Name:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->bank_name }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Branch Name:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->branch_name }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Sort Code:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->sort_code }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Routing Number:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->routing_number }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">Swift Code:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->swift_code }}</div>

                        <div class="font-bold lg:text-xl text-purple-600">IBAN Number:</div>
                        <div class="text-purple-600 lg:text-xl break-words font-bold">{{ $account->iban_number }}</div>
                    </div>
                </div>
            @endif

            <div class="mt-8">
                <a href="{{ route('accounts.index') }}" 
                   class="px-4 py-2 bg-purple-200 text-purple-700 rounded-lg hover:bg-purple-300 transition">
                    Back
                </a>
            </div>
        </div>
    </div>
</x-trader-layout>