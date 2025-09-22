<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Transactions</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Transactions</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        {{-- second div --}}
        <div class="transactions-second-div-con">
            <div class="transactions-second-div-wrap-one">Transaction History</div>
            <div class="transactions-second-div-wrap-two">
                List of transactions in your account
            </div>
            <div class="investment-fourth-div-wrap-three">
                <table class="investment-fourth-div-wrap-four">
                    <thead>
                        <tr class="investment-fourth-div-wrap-five">
                            <th class="investment-fourth-div-wrap-six">ID</th>
                            <th class="investment-fourth-div-wrap-six">Type</th>
                            <th class="investment-fourth-div-wrap-six">Status</th>
                            <th class="investment-fourth-div-wrap-six">Amount</th>
                            <th class="investment-fourth-div-wrap-six">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($transactions->isEmpty())
                            <tr>
                                <td class="investment-fourth-div-wrap-six italic" colspan="4">No Data Available</td>
                            </tr>
                        @else
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td class="investment-fourth-div-wrap-six">21796794540{{ $transaction->id }}</td>
                                    <td class="investment-fourth-div-wrap-six">{{ $transaction->type }}</td>
                                    <td class="investment-fourth-div-wrap-six">{{ $transaction->status }}</td>
                                    <td class="investment-fourth-div-wrap-six">${{ number_format($transaction->amount, 2) }}</td>
                                    <td class="investment-fourth-div-wrap-six">{{ $transaction->created_at->format('F j, Y g:i A') }}</td>
                                    <td class="investment-fourth-div-wrap-six">
                                        <a href="{{ route('transactions.show', $transaction->id) }}">View More</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
</x-trader-layout>