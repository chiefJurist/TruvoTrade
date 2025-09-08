<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Accounts</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Accounts</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        <div class="profile-second-and-third-div-con">
            {{-- second div --}}
            <div class="profile-second-div-con">
                <div>
                    <span class="icon-[tabler--building-bank] profile-second-div-wrap-two"></span>
                </div>
                <div class="profile-second-div-wrap-three">Accounts</div>
            </div>

            {{-- third div --}}
            <div class="profile-third-div-con">
                @if($accounts->isNotEmpty())
                    {{-- Heading and button --}}
                    <div class="flex justify-between items-center mx-auto w-full lg:w-2/3">
                        <div>
                            <div class="font-bold text-lg md:text-2xl">Your Accounts</div>
                            <div class="text-gray-400 font-semibold text-xs md:text-base">Below are the accounts that can withdraw your funds</div>
                        </div>

                        <div onclick="toggleProfileAccounts()" class=" bg-purple-100 p-2 text-xs md:text-base rounded text-purple-500 font-bold flex items-center flex-nowrap button">
                            <span class="text-nowrap">Add Account</span>
                            <span class="icon-[ion--caret-down]"></span>
                        </div>
                    </div>

                    {{-- Modal to show when button is cliccked --}}
                    <div class="relative">
                        <div id="cryptoAndBank" class="hidden profile-third-wrap-fifteen">
                            <div class="profile-third-wrap-sixteen animate-bounce-once">
                                <div class="profile-third-wrap-seventeen button" onclick="toggleProfileCryptoModal()">
                                    <span class="icon-[tabler--currency-bitcoin]"></span>
                                    <span>Crypto</span>
                                </div>
                                <div class="profile-third-wrap-seventeen button" onclick="toggleProfileBankModal()">
                                    <span class="icon-[tabler--building-bank]"></span>
                                    <span>Bank</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Displaying the withdrawal method --}}
                    <div class="grid grid-cols-1 gap-5 mt-10">
                        @foreach ($accounts as $account)
                            @if($account->type == 'Crypto')
                                <div class="rounded-md shadow px-5 py-5 border border-gray-100 border-l-4">
                                    <div class="font-bold text-xl">
                                        <span>Crypto Wallet</span>
                                        <span class="text-purple-700">({{ $account->label_of_account }})</span>
                                    </div>
                                    <div class="flex gap-4 items-center py-4">
                                        <div class="bg-gray-200 p-2 text-xl font-bold rounded">
                                            <span class="icon-[tabler--credit-card]"></span>
                                        </div>
                                        <div class="w-full">
                                            <div class="font-bold">{{ $account->wallet_chain }}</div>
                                            <div class="text-gray-500 w-10/12 overflow-hidden text-sm">{{ \Illuminate\Support\Str::mask($account->wallet_address, '*', 5, -4) }}</div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <a href="{{ Route('accounts.show', $account->id ) }}" class="px-5 py-2 border border-purple-300 hover:bg-purple-300 text-purple-600 rounded-lg">Details</a>
                                        <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            <button type="submit" class="px-5 p-2 border border-red-300 hover:bg-red-300 text-red-600 rounded-lg">Delete Account</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="rounded-md shadow px-5 py-5 border border-gray-100 border-l-4">
                                    <div class="font-bold text-xl">
                                        <span>Bank Account</span>
                                        <span class="text-purple-700">({{ $account->label_of_account }})</span>
                                    </div>
                                    <div class="flex gap-4 items-center py-4">
                                        <div class="bg-gray-200 p-2 text-xl font-bold rounded">
                                            <span class="icon-[tabler--credit-card]"></span>
                                        </div>
                                        <div class="w-full">
                                            <div class="font-bold">{{ $account->bank_name }}</div>
                                            <div class="text-gray-500 w-11/12 overflow-hidden">{{ \Illuminate\Support\Str::mask($account->account_number, '*', 3, -3) }}</div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <a href="{{ Route('accounts.show', $account->id ) }}" class="px-5 py-2 border border-purple-300 hover:bg-purple-300 text-purple-600 rounded-lg">Details</a>
                                        <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            <button type="submit" class="px-5 p-2 border border-red-300 hover:bg-red-300 text-red-600 rounded-lg">Delete Account</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @else
                   <div class="profile-third-wrap-nine">
                        <div class="profile-third-wrap-ten">
                            <span class="icon-[tabler--info-circle] profile-third-wrap-eleven"></span>
                            <span class="profile-third-wrap-twelve">
                                Add a withdrawal account to withdraw funds.
                            </span>
                        </div>

                        <div onclick="toggleProfileAccounts()" class="profile-third-wrap-thirteen button">
                            <span>Add Account</span>
                            <span class="icon-[ion--caret-down] profile-third-wrap-fourteen"></span>
                        </div>
                    </div>

                    {{-- Modal to show when button is clicked --}}
                    <div class="relative">
                        <div id="cryptoAndBank" class="hidden profile-third-wrap-fifteen">
                            <div class="profile-third-wrap-sixteen animate-bounce-once">
                                <div class="profile-third-wrap-seventeen button" onclick="toggleProfileCryptoModal()">
                                    <span class="icon-[tabler--currency-bitcoin]"></span>
                                    <span>Crypto</span>
                                </div>
                                <div class="profile-third-wrap-seventeen button" onclick="toggleProfileBankModal()">
                                    <span class="icon-[tabler--building-bank]"></span>
                                    <span>Bank</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endif
                
            </div>
        </div>
    </div>
</x-trader-layout>