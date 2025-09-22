<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Deposit</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Deposit</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        {{-- second div --}}
        <div class="my-15 mx-auto border-gray-200 shadow p-5 rounded-xl">
            <div class="withdrawals-second-div-wrap-two">Available Balance</div>
            <div class="withdrawals-second-div-wrap-three">
                <div class="withdrawals-second-div-wrap-four">${{number_format((float)auth()->user()->balance,2) }}</div>
                <div class="bg-indigo-500 withdrawals-second-div-wrap-five">
                    <span class="icon-[tabler--home-dollar]"></span>
                </div>
            </div>
            <div class="withdrawals-second-div-wrap-six">
                <span class="icon-[tabler--arrow-up-left] text-green-400"></span>
                <span>0 USD</span>
            </div>
            <div class="withdrawals-second-div-wrap-seven button" onclick="toggleDepositModal()">
                Deposit Funds
            </div>
        </div>


        {{-- third div --}}
        <div class="withdrawals-third-div-con">
            <div class="withdrawals-third-div-wrap-one">
                <div>
                    <div class="investment-fourth-div-wrap-one">Deposits</div>
                    <div class="investment-fourth-div-wrap-two">
                        List of Deposits in your account
                    </div>
                </div>
                <div>
                    <a href="{{route('transactions.index')}}">
                        <div class="withdrawals-third-div-wrap-two button">
                            <span class="icon-[tabler--home-dollar]"></span>
                            <span>View History</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="investment-fourth-div-wrap-three">
                <table class="investment-fourth-div-wrap-four">
                    <thead>
                        <tr class="investment-fourth-div-wrap-five">
                            <th class="investment-fourth-div-wrap-six">Trans.ID</th>
                            <th class="investment-fourth-div-wrap-six">Amount</th>
                            <th class="investment-fourth-div-wrap-six">Status</th>
                            <th class="investment-fourth-div-wrap-six">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($deposits->isEmpty())
                            <tr>
                                <td class="investment-fourth-div-wrap-six italic" colspan="4">No Data Available</td>
                            </tr>
                        @else
                            @foreach ($deposits as $deposit)
                                <tr>
                                    <td class="investment-fourth-div-wrap-six">20496794540{{ $deposit->id }}</td>
                                    <td class="investment-fourth-div-wrap-six">${{ number_format($deposit->amount, 2) }}</td>
                                    <td class="investment-fourth-div-wrap-six">{{ $deposit->status }}</td>
                                    <td class="investment-fourth-div-wrap-six">{{ $deposit->created_at->format('F j, Y g:i A') }}</td>
                                    <td class="investment-fourth-div-wrap-six">
                                        <a href="{{ route('deposits.show', $deposit->id) }}">View More</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {{$deposits->links()}}
            </div>
        </div>
    </div>
</x-trader-layout>