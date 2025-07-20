<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Investment</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Investment</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        {{-- second div --}}
        <div class="investment-second-div-con">
            <div class="investment-second-div-wrap-one">
                <div class="investment-second-div-wrap-two">
                    Invested Plans
                </div>
                <div>
                    At a glance summary of your investment
                </div>
            </div>
            <div class="overview-second-div-btn-con">
                <a href="{{ route('trader.deposits') }}">
                    <div class="overview-second-div-deposit-btn">
                        <span class="icon-[tabler--home-dollar] text-lg"></span>
                        <span>Deposit</span>
                    </div>
                </a>
                <a href="{{ route('trader.withdrawals') }}">
                    <div class="overview-second-div-withdraw-btn">
                        <span class="icon-[tabler--credit-card] text-lg"></span>
                        <span>Withdraw</span>
                    </div>
                </a>
            </div>
        </div>

        {{-- third div --}}
        <div class="investment-third-div-con">
            <div class="investment-third-div-wrap-one">
                <div class="investment-third-div-wrap-two">Investment Account</div>
                <div class="investment-third-div-wrap-three">0 USD</div>
                <div class="investment-third-div-wrap-four">Gained profits</div>
                <div class="investment-third-div-wrap-five button">
                    <span>Transfer Funds</span>
                    <span class="icon-[tabler--arrow-big-right]"></span>
                </div>
            </div>
            <div class="investment-third-div-wrap-six">
                <div>
                    <div class="investment-third-div-wrap-two">Current Investments</div>
                    <div class="investment-third-div-wrap-three">$ 0</div>
                    <div class="investment-third-div-wrap-four">Amount Invested</div>
                    <div class="investment-third-div-wrap-five button">
                        <span>History</span>
                        <span class="icon-[tabler--history]"></span>
                    </div>
                </div>
                <div>
                    <span class="icon-[tabler--chart-histogram] investment-third-div-wrap-seven"></span>
                </div>
            </div>
        </div>
    </div>
</x-trader-layout>