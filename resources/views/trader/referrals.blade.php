<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Referrals</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Referrals</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        {{-- second div --}}
        <div class="withdrawals-second-div-con">
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
                <div class="withdrawals-second-div-wrap-eight button" onclick="toggleReferralWithdrawalModal()">
                    Request Withdrawal
                </div>
            </div>

            <div class="withdrawals-second-div-wrap-one">
                <div class="withdrawals-second-div-wrap-two">Refer Us & Earn</div>
                <div class="referral-second-div-wrap-one">
                    Use the below link to invite your friends.
                </div>
                <div class="referral-second-div-wrap-two">
                    <span class="referral-second-div-wrap-three">
                        <span class="icon-[tabler--link]"></span>
                    </span>
                    <span id="referral-link" class="referral-second-div-wrap-four">
                        https://truvotrade.com/user/register?ref=Conor
                    </span>
                </div>
                <div onclick="copyReferralLink()" class="referral-second-div-wrap-five button">
                    <span class="icon-[tabler--copy]"></span>
                    <span>Copy Link</span>
                </div>
                <div id="copy-toast" class="hidden referral-second-div-alert">
                    Link copied to clipboard!
                </div>
            </div>
        </div>

        {{-- third div --}}
        <div class="withdrawals-third-div-con">
            <div class="withdrawals-third-div-wrap-one">
                <div>
                    <div class="investment-fourth-div-wrap-one">Referral List</div>
                    <div class="investment-fourth-div-wrap-two">
                        List of Pending Withdrawals in your account
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
                            <th class="investment-fourth-div-wrap-six">User</th>
                            <th class="investment-fourth-div-wrap-six">Date Joined</th>
                            <th class="investment-fourth-div-wrap-six">Earned</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
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