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
                            <th class="investment-fourth-div-wrap-six">Plan</th>
                            <th class="investment-fourth-div-wrap-six">Status</th>
                            <th class="investment-fourth-div-wrap-six">From - To</th>
                            <th class="investment-fourth-div-wrap-six">Amount</th>
                            <th class="investment-fourth-div-wrap-six">Date</th>
                            <th class="investment-fourth-div-wrap-six">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="investment-fourth-div-wrap-six">Deposit</td>
                            <td class="investment-fourth-div-wrap-six">Success</td>
                            <td class="investment-fourth-div-wrap-six">Monday</td>
                            <td class="investment-fourth-div-wrap-six">Deposit</td>
                            <td class="investment-fourth-div-wrap-six">Success</td>
                            <td class="investment-fourth-div-wrap-six">Monday</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-trader-layout>