<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Profile</div>
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
            <div class="profile-third-div-con">
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
            </div>
        </div>
    </div>
</x-trader-layout>