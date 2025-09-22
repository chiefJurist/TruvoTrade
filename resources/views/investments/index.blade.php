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
                <a href="{{ route('deposits.index') }}">
                    <div class="overview-second-div-deposit-btn">
                        <span class="icon-[tabler--home-dollar] text-lg"></span>
                        <span>Deposit</span>
                    </div>
                </a>
                <a href="{{ route('withdrawals.index') }}">
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
                <div class="investment-third-div-wrap-three">{{ number_format((float)auth()->user()->profits,2) }} USD</div>
                <div class="investment-third-div-wrap-four">Gained profits</div>
                <div class="investment-third-div-wrap-five button" onclick="toggleTransferInvestmentModal()">
                    <span>Transfer Funds</span>
                    <span class="icon-[tabler--arrow-big-right]"></span>
                </div>
            </div>
            <div class="investment-third-div-wrap-six">
                <div>
                    <div class="investment-third-div-wrap-two">Current Investments</div>
                    <div class="investment-third-div-wrap-three">${{ number_format($currentInvestments,2) }}</div>
                    <div class="investment-third-div-wrap-four">Amount Invested</div>
                    <a href="{{ route('transactions.index') }}" class="investment-third-div-wrap-five button">
                        <span>History</span>
                        <span class="icon-[tabler--history]"></span>
                    </a>
                </div>
                <div>
                    <span class="icon-[tabler--chart-histogram] investment-third-div-wrap-seven"></span>
                </div>
            </div>
        </div>

        {{-- fourth div --}}
        <div class="my-5 md:my-15">
            <div class="investment-fourth-div-wrap-one">Ongoing Investment</div>
            <div class="investment-fourth-div-wrap-two">
                List of ongoing investments in your account
            </div>
            <div class="investment-fourth-div-wrap-three">
                <table class="investment-fourth-div-wrap-four">
                    <thead>
                        <tr class="investment-fourth-div-wrap-five">
                            <th class="investment-fourth-div-wrap-six">Plan</th>
                            <th class="investment-fourth-div-wrap-six">Status</th>
                            <th class="investment-fourth-div-wrap-six">Amount</th>
                            <th class="investment-fourth-div-wrap-six">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($investments->isEmpty())
                            <tr>
                                <td class="investment-fourth-div-wrap-six italic" colspan="4">No Data Available</td>
                            </tr>
                        @else
                            @foreach ($investments as $investment)
                                <tr>
                                    <td class="investment-fourth-div-wrap-six capitalize">{{ $investment->plan }}</td>
                                    <td class="investment-fourth-div-wrap-six capitalize">{{ $investment->status }}</td>
                                    <td class="investment-fourth-div-wrap-six capitalize">${{ number_format($investment->amount, 2) }}</td>
                                    <td class="investment-fourth-div-wrap-six capitalize">{{ $investment->created_at->format('F j, Y g:i A') }}</td>
                                    <td class="investment-fourth-div-wrap-six">
                                        <a href="{{ route('investments.show', $investment->id) }}">View More</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-trader-layout>