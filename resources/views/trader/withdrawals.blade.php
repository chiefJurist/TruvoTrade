<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Withdrawal</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Withdrawal</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        {{-- second div --}}
        <div class="withdrawals-second-div-con">
            <div class="withdrawals-second-div-wrap-one">
                <div class="withdrawals-second-div-wrap-two">Available Balance</div>
                <div class="withdrawals-second-div-wrap-three">
                    <div class="withdrawals-second-div-wrap-four">$0</div>
                    <div class="bg-indigo-500 withdrawals-second-div-wrap-five">
                        <span class="icon-[tabler--home-dollar]"></span>
                    </div>
                </div>
                <div class="withdrawals-second-div-wrap-six">
                    <span class="icon-[tabler--arrow-up-left] text-green-400"></span>
                    <span>0 USD</span>
                </div>
                <div class="withdrawals-second-div-wrap-seven button">
                    Request Withdrawal
                </div>
            </div>

            <div class="withdrawals-second-div-wrap-one">
                <div class="withdrawals-second-div-wrap-two">Referral Bonus</div>
                <div class="withdrawals-second-div-wrap-three">
                    <div class="withdrawals-second-div-wrap-four">$0</div>
                    <div class="bg-orange-500 withdrawals-second-div-wrap-five">
                        <span class="icon-[tabler--gift]"></span>
                    </div>
                </div>
                <div class="withdrawals-second-div-wrap-six">
                    <span class="icon-[tabler--arrow-up-left] text-green-400"></span>
                    <span>0 USD</span>
                </div>
                <div class="withdrawals-second-div-wrap-eight button">
                    Request Withdrawal
                </div>
            </div>
        </div>
    </div>
</x-trader-layout>