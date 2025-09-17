<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/truvo_trades.png') }}" type="image/png">
    <title>Truvo Trade</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<script>
    //for the loader
    window.addEventListener('load', function () {
        const loader = document.getElementById('app-loader');
        if (loader) {
            loader.style.opacity = '0';
            loader.style.pointerEvents = 'none';
            setTimeout(() => loader.remove(), 500); // Optional: remove it completely
        }
    });

    //For Showing the small nav
    document.addEventListener("DOMContentLoaded", function () {
        const openBtn = document.getElementById("openMenu");
        const closeBtn = document.getElementById("closeMenu");
        const mobileNav = document.getElementById("mobileNav");

        openBtn.addEventListener("click", () => {
            // Show and slide in
            mobileNav.classList.remove("-translate-x-full");
            mobileNav.classList.add("translate-x-0");
        });

        closeBtn.addEventListener("click", () => {
            // Slide out to the right
            mobileNav.classList.remove("translate-x-0");
            mobileNav.classList.add("-translate-x-full");
        });
    });

    //For Controlling The Big Menu Bar
    let expanded = true;

    function toggleBigSideBar() {
        const sidebar = document.getElementById('bigMobileNav');
        const main = document.getElementById('bigMainContent');
        const header = document.getElementById('bigScreenHeader');
        const logoName = document.getElementById('bigNavLogoName');
        const homeHeading = document.getElementById('traderHomeBigHeader');
        const homeDot = document.getElementById('traderHomeBigDot');
        const appHeading = document.getElementById('traderAppBigHeader');
        const appDot = document.getElementById('traderAppBigDot');
        const transactionsHeading = document.getElementById('traderTransactionsBigHeader');
        const transactionsDot = document.getElementById('traderTransactionsBigDot');
        const extrasHeading = document.getElementById('traderExtrasBigHeader');
        const extrasDot = document.getElementById('traderExtrasBigDot');
        const overview = document.getElementById('traderOverviewText');
        const profile = document.getElementById('traderProfileText');
        const accounts = document.getElementById('traderAccountsText');
        const security = document.getElementById('traderSecurityText');
        const investment = document.getElementById('traderInvestmentText');
        const plans = document.getElementById('traderPlansText');
        const transactions = document.getElementById('traderTransactionsText');
        const withdrawals = document.getElementById('traderWithdrawalsText');
        const deposits = document.getElementById('traderDepositsText');
        const referrals = document.getElementById('traderReferralsText');
        const extras = document.getElementById('extras');
        const overviewNav = document.getElementById('overviewNav');
        const profileNav = document.getElementById('profileNav');
        const accountsNav = document.getElementById('accountsNav');
        const securityNav = document.getElementById('securityNav');
        const investmentNav = document.getElementById('investmentNav');
        const plansNav = document.getElementById('plansNav');
        const transactionsNav = document.getElementById('transactionsNav');
        const withdrawalsNav = document.getElementById('withdrawalsNav');
        const depositsNav = document.getElementById('depositsNav');
        const referralsNav = document.getElementById('referralsNav');

        expanded = !expanded


        if (expanded) {
            sidebar.classList.remove('w-2/12');
            sidebar.classList.add('w-1/12');
            sidebar.classList.remove('hover:overflow-y-auto');
            header.classList.remove('w-10/12');
            header.classList.add('w-11/12');
            main.classList.remove('lg:w-10/12');
            main.classList.add('lg:w-11/12');
            logoName.classList.add('hidden');
            homeHeading.classList.add('hidden');
            homeDot.classList.remove('hidden');
            appHeading.classList.add('hidden');
            appDot.classList.remove('hidden');
            transactionsHeading.classList.add('hidden');
            transactionsDot.classList.remove('hidden');
            extrasHeading.classList.add('hidden');
            extrasDot.classList.remove('hidden');
            overview.classList.add('hidden');
            profile.classList.add('hidden');
            accounts.classList.add('hidden');
            security.classList.add('hidden');
            investment.classList.add('hidden');
            plans.classList.add('hidden');
            transactions.classList.add('hidden');
            withdrawals.classList.add('hidden');
            deposits.classList.add('hidden');
            referrals.classList.add('hidden');
            extras.classList.add('hidden');
            overviewNav.classList.add('justify-center');
            profileNav.classList.add('justify-center');
            accountsNav.classList.add('justify-center');
            securityNav.classList.add('justify-center');
            investmentNav.classList.add('justify-center');
            plansNav.classList.add('justify-center');
            transactionsNav.classList.add('justify-center');
            withdrawalsNav.classList.add('justify-center');
            depositsNav.classList.add('justify-center');
            referralsNav.classList.add('justify-center');
        } else {
            sidebar.classList.add('w-2/12');
            sidebar.classList.remove('w-1/12');
            sidebar.classList.add('hover:overflow-y-auto');
            header.classList.add('w-10/12');
            header.classList.remove('w-11/12');
            main.classList.add('lg:w-10/12');
            main.classList.remove('lg:w-11/12');
            logoName.classList.remove('hidden');
            homeHeading.classList.remove('hidden');
            homeDot.classList.add('hidden');
            appHeading.classList.remove('hidden');
            appDot.classList.add('hidden');
            transactionsHeading.classList.remove('hidden');
            transactionsDot.classList.add('hidden');
            extrasHeading.classList.remove('hidden');
            extrasDot.classList.add('hidden');
            overview.classList.remove('hidden');
            profile.classList.remove('hidden');
            accounts.classList.remove('hidden');
            security.classList.remove('hidden');
            investment.classList.remove('hidden');
            plans.classList.remove('hidden');
            transactions.classList.remove('hidden');
            withdrawals.classList.remove('hidden');
            deposits.classList.remove('hidden');
            referrals.classList.remove('hidden');
            extras.classList.remove('hidden');
            overviewNav.classList.remove('justify-center');
            profileNav.classList.remove('justify-center');
            accountsNav.classList.remove('justify-center');
            securityNav.classList.remove('justify-center');
            investmentNav.classList.remove('justify-center');
            plansNav.classList.remove('justify-center');
            transactionsNav.classList.remove('justify-center');
            withdrawalsNav.classList.remove('justify-center');
            depositsNav.classList.remove('justify-center');
            referralsNav.classList.remove('justify-center');
        }
    }

    //overview Modal
    window.toggleOverviewModal = function () {
        const modal = document.getElementById('overviewModal');
        let visible = !modal.classList.contains('hidden');
        const content = document.getElementById('overviewModalContent');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Five
    window.toggleOverviewTokenModal = function () {
        const modal = document.getElementById('overviewTokenModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

   //profile accounts display
   window.toggleProfileAccounts = function (){
        const buttons = document.getElementById('cryptoAndBank');
        let visible = !buttons.classList.contains('hidden');

        if (visible) {
            buttons.classList.add('hidden');
        } else {
            buttons.classList.remove('hidden');
        }
    }

    //Profile Accounts Bank Modal
    window.toggleProfileBankModal = function () {
        const modal = document.getElementById('profileBankModal');
        const buttons = document.getElementById('cryptoAndBank');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            buttons.classList.add('hidden');
        } else {
            modal.classList.remove('hidden');
        }
    }

    //Profile Accounts Crypto Modal
    window.toggleProfileCryptoModal = function () {
        const modal = document.getElementById('profileCryptoModal');
        const buttons = document.getElementById('cryptoAndBank');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            buttons.classList.add('hidden');
        } else {
            modal.classList.remove('hidden');
        }
    }

    //Plan Modal One
    window.togglePlanModalOne = function () {
        const modal = document.getElementById('planOneModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Two
    window.togglePlanModalTwo = function () {
        const modal = document.getElementById('planTwoModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Three
    window.togglePlanModalThree = function () {
        const modal = document.getElementById('planThreeModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Four
    window.togglePlanModalFour = function () {
        const modal = document.getElementById('planFourModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Five
    window.togglePlanModalFive = function () {
        const modal = document.getElementById('planFiveModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Six
    window.togglePlanModalSix = function () {
        const modal = document.getElementById('planSixModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Seven
    window.togglePlanModalSeven = function () {
        const modal = document.getElementById('planSevenModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //Plan Modal Eight
    window.togglePlanModalEight = function () {
        const modal = document.getElementById('planEightModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //withdrawal modal
    window.toggleWithdrawalModal = function () {
        const modal = document.getElementById('withdrawalModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //referral withdrawal modal
    window.toggleReferralWithdrawalModal = function () {
        const modal = document.getElementById('referralWithdrawalModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //deposit modal
    window.toggleDepositModal = function () {
        const modal = document.getElementById('depositModal');
        let visible = !modal.classList.contains('hidden');

        if (visible) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        } else {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    //copy referral link
    window.copyReferralLink = function () {
        const text = document.getElementById("referral-link").innerText.trim();
        navigator.clipboard.writeText(text).then(() => {
            const toast = document.getElementById("copy-toast");
            toast.classList.remove("hidden");
            setTimeout(() => toast.classList.add("hidden"), 2000);
        }).catch(err => {
            alert("Failed to copy link: " + err);
        });
    }

    //copy address
    window.copyDepositAddress = function () {
        const text = document.getElementById("deposit-address").innerText.trim();
        navigator.clipboard.writeText(text).then(() => {
            const toast = document.getElementById("address-copy-toast");
            toast.classList.remove("hidden");
            setTimeout(() => toast.classList.add("hidden"), 2000);
        }).catch(err => {
            alert("Failed to copy link: " + err);
        });
    }

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/68ca82adb1960d1924ccd0f3/1j5bgsu0b';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<body class="bg-white relative">
    {{-- LOADER --}}
    <div id="app-loader" class="loader">
        <img src="{{asset('img/truvo_trade.png')}}" alt="Logo" class="loader-img">
    </div>

    {{-- Header for screens less than lg: --}}
    <div class="trader-small-header-con">
        <div id="openMenu">
            <span class="icon-[material-symbols--menu-rounded] text-3xl"></span>
        </div>
        <div class="trader-small-header-logo-con">
            <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class="w-16">
            <span>TruvoTrade</span>
        </div>
        <div>
            <a href="{{route('trader.profile')}}">
                <img src="{{ asset('img/user-1.png') }}" alt="user" class="trader-small-header-img">
            </a>
        </div>
    </div>

    {{-- navigation for smaller screens less than lg --}}
    <div  id="mobileNav" class="trader-small-mobilenav -translate-x-full ">
        <div class="trader-menu-cancel-con">
            <div class="trader-small-header-logo-con">
                <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class="w-10">
                <span>TruvoTrade</span>
            </div>
            <span id="closeMenu" class="icon-[material-symbols--cancel-outline-rounded] trader-menu-cancel"></span>
        </div>
        <div>
            <div  class="trader-small-nav-link-header">HOME</div>
            <a href="{{ route('trader.overview') }}" class="trader-small-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--layout-dashboard] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Overview</span>
                </div>
            </a>
            <a href="{{ route('trader.profile') }}" class="trader-small-nav-link {{ request()->routeIs('trader.profile') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--user-cog] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">My Profile</span>
                </div>
            </a>

            <a href="{{ route('accounts.index') }}" class="trader-small-nav-link {{ request()->routeIs('accounts.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--building-bank] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">My Accounts</span>
                </div>
            </a>
             <a href="{{ route('trader.security') }}" class="trader-small-nav-link {{ request()->routeIs('trader.security') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--lock] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Security</span>
                </div>
            </a>


            <div class="trader-small-nav-link-header">APPS</div>
            <a href="{{ route('trader.investment') }}" class="trader-small-nav-link {{ request()->routeIs('trader.investment') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--home-stats] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Investment</span>
                </div>
            </a>
            <a href="{{ route('trader.plans') }}" class="trader-small-nav-link {{ request()->routeIs('trader.plans') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--report-money] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Our Plans</span>
                </div>
            </a>

            <div class="trader-small-nav-link-header">TRANSACTIONS</div>
            <a href="{{ route('transactions.index') }}" class="trader-small-nav-link {{ request()->routeIs('transactions.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--building-bank] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Transactions</span>
                </div>
            </a>
            <a href="{{ route('withdrawals.index') }}" class="trader-small-nav-link {{ request()->routeIs('withdrawals.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--square-arrow-up] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Withdrawals</span>
                </div>
            </a>
            <a href="{{ route('deposits.index') }}" class="trader-small-nav-link {{ request()->routeIs('deposits.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--square-arrow-down] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Deposits</span>
                </div>
            </a>
            <a href="{{ route('trader.referrals') }}" class="trader-small-nav-link {{ request()->routeIs('trader.referrals') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--share] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Referrals</span>
                </div>
            </a>

            <div class="trader-small-nav-link-header">EXTRAS</div>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    
                    <button class="trader-small-nav-link">
                        <div>
                            <span class="icon-[tabler--power] trader-small-nav-link-icon"></span>
                        </div>
                        <div>
                            <span class="trader-small-nav-link-text">Log Out</span>
                        </div>
                    </button>
                </form>

            <div class="trader-small-nav-link-contact-btn-con">
                <div>24/7 Support Available</div>
                <div class="trader-small-nav-link-contact-btn">
                    <span>Contact Us</span>
                    <span class="icon-[tabler--headset]"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="trader-big-gen-container">
        {{-- Navigation for Big Screens --}}
        <div  id="bigMobileNav" class="trader-big-mobile-nav w-2/12">
            <div class="trader-big-header-logo-con">
                <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class="w-10">
                <span id="bigNavLogoName">TruvoTrade</span>
            </div>
            <div>
                <div id="traderHomeBigHeader" class="trader-big-nav-link-header">HOME</div>
                <div id="traderHomeBigDot" class="trader-big-nav-link-header-dot hidden">...</div>
                <a href="{{ route('trader.overview') }}" id="overviewNav" class="trader-big-nav-link {{ request()->routeIs('trader.overview') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--layout-dashboard] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderOverviewText">
                        <span class="trader-big-nav-link-text">Overview</span>
                    </div>
                </a>
                <a href="{{ route('trader.profile') }}" id="profileNav" class="trader-big-nav-link {{ request()->routeIs('trader.profile') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--user-cog] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderProfileText">
                        <span class="trader-big-nav-link-text">My Profile</span>
                    </div>
                </a>
                <a href="{{ route('accounts.index') }}" id="accountsNav" class="trader-big-nav-link {{ request()->routeIs('accounts.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--building-bank] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderAccountsText">
                        <span class="trader-big-nav-link-text">My Accounts</span>
                    </div>
                </a>
                <a href="{{ route('trader.security') }}" id="securityNav" class="trader-big-nav-link {{ request()->routeIs('trader.security') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--lock] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderSecurityText">
                        <span class="trader-big-nav-link-text">Security</span>
                    </div>
                </a>

                <div id="traderAppBigHeader" class="trader-big-nav-link-header">APPS</div>
                <div id="traderAppBigDot" class="trader-big-nav-link-header-dot hidden">...</div>
                <a href="{{ route('trader.investment') }}" id="investmentNav" class="trader-big-nav-link {{ request()->routeIs('trader.investment') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--home-stats] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderInvestmentText">
                        <span class="trader-big-nav-link-text">Investment</span>
                    </div>
                </a>
                <a href="{{ route('trader.plans') }}" id="plansNav" class="trader-big-nav-link {{ request()->routeIs('trader.plans') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--report-money] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderPlansText">
                        <span class="trader-big-nav-link-text">Our Plans</span>
                    </div>
                </a>

                <div id="traderTransactionsBigHeader" class="trader-big-nav-link-header">TRANSACTIONS</div>
                <div id="traderTransactionsBigDot" class="trader-big-nav-link-header-dot hidden">...</div>
                <a href="{{ route('transactions.index') }}" id="transactionsNav" class="trader-big-nav-link {{ request()->routeIs('transactions.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--building-bank] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderTransactionsText">
                        <span class="trader-big-nav-link-text">Transactions</span>
                    </div>
                </a>
                <a href="{{ route('withdrawals.index') }}" id="withdrawalsNav" class="trader-big-nav-link {{ request()->routeIs('withdrawals.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--square-arrow-up] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderWithdrawalsText">
                        <span class="trader-big-nav-link-text">Withdrawals</span>
                    </div>
                </a>
                <a href="{{ route('deposits.index') }}" id="depositsNav" class="trader-big-nav-link {{ request()->routeIs('deposits.index') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--square-arrow-down] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderDepositsText">
                        <span class="trader-big-nav-link-text">Deposits</span>
                    </div>
                </a>
                <a href="{{ route('trader.referrals') }}" id="referralsNav" class="trader-big-nav-link {{ request()->routeIs('trader.referrals') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--share] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderReferralsText">
                        <span class="trader-big-nav-link-text">Referrals</span>
                    </div>
                </a>

                <div id="traderExtrasBigHeader" class="trader-big-nav-link-header">EXTRAS</div>
                <div id="traderExtrasBigDot" class="trader-big-nav-link-header-dot hidden">...</div>
                <div id="extras">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf

                        <button class="trader-big-nav-link">
                            <div>
                                <span class="icon-[tabler--power] trader-big-nav-link-icon"></span>
                            </div>
                            <div>
                                <span class="trader-big-nav-link-text">Log Out</span>
                            </div>
                        </button>
                    </form>

                    <div class="trader-big-nav-link-contact-btn-con">
                        <div>24/7 Support Available</div>
                        <div class="trader-big-nav-link-contact-btn">
                            <span>Contact Us</span>
                            <span class="icon-[tabler--headset]"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Header and Page Content --}}
        <div id="bigMainContent" class="trader-big-main-content lg:w-10/12">
            {{-- Header for bigger screens --}}
            <div id="bigScreenHeader" class="trader-big-screen-header w-10/12">
                <div class="trader-big-screen-hamburger" onclick="toggleBigSideBar()">
                    <span class="icon-[material-symbols--menu-rounded]"></span>
                </div>
                <div>
                    <a href="{{route('trader.profile')}}">
                        <img src="{{ asset('img/user-1.png') }}" alt="" class="trader-small-header-img">
                    </a>
                </div>
            </div>

            {{-- Page Content --}}
            <div class="trader-gen-container">
                {{ $slot }}
            </div>
        </div>
    </div>

    {{-- Overview Modal View --}}
    <div id="overviewModal" class="hidden overview-modal-backdrop">
        <div id="overviewModalContent" class="overview-modal-con animate-bounce-once">
            <form action="{{ route('tokens-transfer.create') }}" method="GET">
                @csrf
                <div class="overview-modal-div-wrap-one" onclick="toggleOverviewModal()">
                    <span class="icon-[hugeicons--cancel-01] overview-modal-div-wrap-two"></span>
                </div>
                <div class="overview-modal-div-wrap-three">Transfer Tokens</div>
                <div class="overview-modal-div-wrap-four">Enter Token Amount To Be Transferred</div>
                <div class="overview-modal-div-wrap-five">
                    <div class="overview-modal-div-wrap-six">Minimum transfer of 10 ELT</div>
                    <input type="number" name="amount" class="overview-modal-div-wrap-seven">
                </div>
                <div class="overview-modal-div-wrap-eight">Token Balance (Available)</div>
                <input type="text" value="{{ number_format((float)auth()->user()->tokens,2) }} ELT" readonly name="tokens" class="overview-modal-div-wrap-nine">
                <div class="overview-modal-div-wrap-ten">These are the profits you currently have available.</div>
                <div class="overview-modal-div-wrap-eleven">
                    <input type="submit" value="Proceed" class="overview-modal-div-wrap-twelve button">
                </div>
            </form>
        </div>
    </div>

    {{-- Overview Token Modal --}}
    <div id="overviewTokenModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="{{ route('tokens.create') }}" method="GET">
                @csrf

                <div class="authed-form-cancel-con" onclick="toggleOverviewTokenModal()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Purchase Tokens</div>

                <div class="plan-modal-wrap-two">You can purchase your tokens here.</div>

                <div class="plan-modal-wrap-three">
                    <select required name="blockchain" class="w-full outline-none text-gray-500">
                        <option value="BITCOIN">BITCOIN</option>
                        <option value="ETHEREUM">ETHEREUM (ERC20)</option>
                        <option value="SOLANA">SOLANA (SOL)</option>
                        <option value="USDT(BEP20)">USDT(BEP20)</option>
                        <option value="USDT(TRX10)">USDT(TRX10)</option>
                        <option value="USDC(BEP20)">USDC(BEP20)</option>
                        <option value="BNB(BEP20)">BNB(BEP20)</option>
                        <option value="TRON(TRX)">TRON(TRX)</option>
                    </select>
                </div>

                <div class="relative w-full my-6">
                    <input type="number" name="token" id="token_amount" placeholder="" class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required/>
                    <label for="email" class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">
                        Enter Token Amount*
                    </label>
                </div>

                <div class="relative w-full my-6">
                    <input type="number" name="cost" id="token_calculated_amount" value="0" placeholder="" class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required readonly/>
                    <label for="email" class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">
                        Calculated Amount($)
                    </label>
                </div>

                <div class="text-red-400 font-mono text-sm">
                    Note: 1 ELT Token = 50 USD
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const amountInput = document.getElementById('token_amount');
            const calculatedInput = document.getElementById('token_calculated_amount');

            const TOKEN_PRICE = 50; // 1 Token = 50 USD

            amountInput.addEventListener('input', function () {
                let amount = parseFloat(amountInput.value) || 0; // Default to 0 if empty
                calculatedInput.value = amount * TOKEN_PRICE;
            });
        });
    </script>

    {{-- Profile Accounts Bank Modal --}}
    <div id="profileBankModal" class="hidden profile-bank-modal-backdrop">
        <div class="profile-bank-modal-sizer">
            <div class="profile-bank-modal-con">
                <form action="{{ Route('accounts.store') }}" method="POST">
                    @csrf

                    {{-- Hidden fields --}}
                    <input type="hidden" name="type" value="Bank">

                    <div class="authed-form-cancel-con" onclick="toggleProfileBankModal()">
                        <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                    </div>

                    <div class="profile-bank-modal-wrap-one">Add Bank Account</div>

                    <div class="profile-bank-modal-wrap-two">Add your bank information to withdraw your funds.</div>

                    <div class="profile-bank-modal-wrap-three">
                        <div class="profile-bank-modal-wrap-four">
                            <span>Account Type</span>
                            <span class="profile-bank-modal-required">*</span>
                        </div>
                        <div>
                            <span>
                                <input type="radio" name="account_type" id="personalBank">
                                <span class="profile-bank-modal-wrap-five">Personal</span>
                            </span>
                            <span>
                                <input type="radio" name="account_type" id="businessBank">
                                <span class="profile-bank-modal-wrap-five">Business</span>
                            </span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Acount Name</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="account_name" placeholder="Your Account Name" class="profile-bank-modal-input" required>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Acount Number</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="number" name="account_number" placeholder="eg. 094567453712" class="profile-bank-modal-input">
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Bank Country</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <select id="countrySelect" name="bank_country" required class="profile-bank-modal-input">
                                <option value="" disabled selected>Select your country</option>
                            </select>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Bank Currency</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="bank_currency" placeholder="Enter Currency Name" class="profile-bank-modal-input" required>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Bank Name</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="bank_name" placeholder="Your Bank Name" class="profile-bank-modal-input" required>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Branch Name</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="branch_name" placeholder="Name of Branch" class="profile-bank-modal-input" required>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Sort Code</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="sort_code" placeholder="Bank Sort Code" class="profile-bank-modal-input" required>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Routing Number</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="routing_number" placeholder="Routing Number" class="profile-bank-modal-input" required>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Swift Code / BIC</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="swift_code" placeholder="Bank Swift / BIC Code" class="profile-bank-modal-input" required>
                        </div>
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>IBAN Number</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="iban_number" placeholder="Bank IBAN Number" class="profile-bank-modal-input" required>
                        </div>
                        <div class="md:col-span-2">
                            <div class="profile-bank-modal-wrap-four">
                                Label of account (Optional)
                            </div>
                            <input type="text" name="label_of_account" placeholder="eg. Personal" class="profile-bank-modal-input" required>
                        </div>
                    </div>

                    <div class="profile-bank-modal-wrap-six">
                        You can easily identify using this. Two withdrawal methods cannot have one label.
                    </div>

                    <div class="profile-bank-modal-wrap-seven">
                        <input type="submit" value="Add Account" class="profile-bank-modal-wrap-eight button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Profile Accounts Crypto Modal --}}
    <div id="profileCryptoModal" class="hidden profile-bank-modal-backdrop">
        <div class="profile-bank-modal-sizer">
            <div class="profile-bank-modal-con">
                <form action="{{ Route('accounts.store') }}" method="POST">
                    @csrf

                    {{-- Hidden fields --}}
                    <input type="hidden" name="type" value="Crypto">

                    <div class="authed-form-cancel-con" onclick="toggleProfileCryptoModal()">
                        <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                    </div>

                    <div class="profile-bank-modal-wrap-one">Add New Wallet</div>

                    <div class="profile-bank-modal-wrap-two">Add your personal wallet to withdraw your funds.</div>

                    <div class="profile-crypto-modal-wrap-one">
                        <div>
                            <div class="profile-bank-modal-wrap-four">
                                <span>Wallet Name</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <select id="addressSelect" name="wallet_chain" required class="profile-bank-modal-input">
                                <option value="" disabled selected>Select Your Wallet Chain</option>
                                <option value="Bitcoin">Bitcoin</option>
                                <option value="Ethereum (ERC20)">Ethereum (ERC20)</option>
                                <option value="Ethereum (BEP20)">Ethereum (BEP20)</option>
                                <option value="USDT (BEP20)">USDT (BEP20)</option>
                                <option value="USDT (TRC20)">USDT (TRC20)</option>
                                <option value="Tron">Tron</option>
                                <option value="Litecoin">Litecoin</option>
                                <option value="XRP">XRP</option>
                                <option value="USD Coin">USD Coin</option>
                            </select>
                        </div>
                        <div class="profile-crypto-modal-wrap-two">
                            <div class="profile-bank-modal-wrap-four">
                                <span>Wallet Address</span>
                                <span class="profile-bank-modal-required">*</span>
                            </div>
                            <input type="text" name="wallet_address"  class="profile-bank-modal-input" required placeholder="eg. GCSWJRVBEYSXO4U35DYWV6MZGLEVA3NRHNXPVWFTDR2J7XKM5IJ5IGB6">
                        </div>
                    </div>

                    <div class="profile-crypto-modal-wrap-three">
                        You will receive payment on this account in selected currency.
                    </div>

                    <div class="profile-crypto-modal-wrap-four">
                        <div class="profile-bank-modal-wrap-four">
                            Label of account
                        </div>
                        <input type="text" name="label_of_account" placeholder="eg. Personal" class="profile-bank-modal-input" required>
                    </div>

                    <div class="profile-bank-modal-wrap-six">
                        You can easily identify using this. Two withdrawal methods cannot have one label.
                    </div>

                    <div class="profile-bank-modal-wrap-seven profile-crypto-modal-wrap-five">
                        <input type="submit" value="Add Account" class="profile-bank-modal-wrap-eight button">
                    </div>

                    <div class="profile-crypto-modal-wrap-six">
                        <span class="icon-[tabler--info-circle]"></span>
                        <span class="text-xs">
                            Please ensure that you have provided the correct address and you have access to it.
                        </span>
                    </div>

                    <div class="profile-crypto-modal-wrap-seven">
                        <span class="icon-[tabler--info-circle]"></span>
                        <span class="text-xs">
                            Caution: You will lose your funds if your wallet address is wrong or you don't have access.
                        </span>
                    </div>

                    <!-- Display validation or session errors -->
                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    {{-- Plan-one Modal --}}
    <div id="planOneModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalOne()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">STARTER PACK</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Plan-Two Modal --}}
    <div id="planTwoModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalTwo()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">STANDARD PACK PLAN</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Plan-Three Modal --}}
    <div id="planThreeModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalThree()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">DIAMOND PACK PLAN</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Plan-Four Modal --}}
    <div id="planFourModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalFour()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">GOLD PACK PLAN</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Plan-Five Modal --}}
    <div id="planFiveModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalFive()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">PRE STARTER</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Plan-Six Modal --}}
    <div id="planSixModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalSix()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">BITCOIN LIVE STAKING</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Plan-Seven Modal --}}
    <div id="planSevenModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalSeven()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">PATTERN DAY TRADER (PDT)</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Plan-Eight Modal --}}
    <div id="planEightModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="togglePlanModalEight()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Subscribe to plan</div>

                <div class="plan-modal-wrap-two">Please input the amount you'd like to invest</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="plan-modal-wrap-six">
                    <div class="plan-modal-wrap-seven">Plan</div>
                    <div class="plan-modal-wrap-eight">BITCOIN LIVE STAKING (PREMIUM)</div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Confirm&Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Withdrawal Modal --}}
    <div id="withdrawalModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con animate-bounce-once">
            <form action="{{ Route('withdrawals.create') }}" method="GET">
                @csrf

                <div class="authed-form-cancel-con" onclick="toggleWithdrawalModal()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Request Withdrawal</div>

                <div class="plan-modal-wrap-two">Withdraw funds from your account directly.</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="amount" placeholder="Enter Amount ($)" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="withdrawals-modal-wrap-one">
                    <div class="plan-modal-wrap-ten">Select Withdrawal Method</div>
                    <div class="withdrawals-modal-wrap-two">
                        <label class="cursor-pointer">
                            <input type="radio" name="method" value="crypto" class="peer hidden" checked>
                            <div class="withdrawals-modal-wrap-three">
                                <span class="icon-[tabler--coins]"></span>
                                <span>Crypto Wallet</span>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="method" value="bank" class="peer hidden">
                            <div class="withdrawals-modal-wrap-four">
                                <span class="icon-[tabler--building-bank]"></span>
                                <span>Bank Account</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="${{number_format((float)auth()->user()->balance,2) }}" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Referral Withdrawal Modal --}}
    <div id="referralWithdrawalModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con animate-bounce-once">
            <form action="">
                @csrf

                <div class="authed-form-cancel-con" onclick="toggleReferralWithdrawalModal()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Request Withdrawal</div>

                <div class="plan-modal-wrap-two">Withdraw funds from your account directly.</div>

                <div class="plan-modal-wrap-three">
                    <input type="number" name="planAmount" placeholder="Enter Amount ($)" required class="plan-modal-wrap-four">
                </div>
                <div class="plan-modal-wrap-five">
                    * Your account balance will be immediately deducted upon confirmation.
                </div>

                <div class="withdrawals-modal-wrap-one">
                    <div class="plan-modal-wrap-ten">Select Withdrawal Method</div>
                    <div class="withdrawals-modal-wrap-two">
                        <label class="cursor-pointer">
                            <input type="radio" name="payment_method" value="crypto" class="peer hidden" checked>
                            <div class="withdrawals-modal-wrap-three">
                                <span class="icon-[tabler--coins]"></span>
                                <span>Crypto Wallet</span>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="payment_method" value="bank" class="peer hidden">
                            <div class="withdrawals-modal-wrap-four">
                                <span class="icon-[tabler--building-bank]"></span>
                                <span>Bank Account</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="plan-modal-wrap-nine">
                    <div>
                        <label for="planBalance" class="plan-modal-wrap-ten">Account Balance (Available)</label><br>
                        <input type="text" name="planBalance" value="$0" readonly placeholder="Enter Amount" required class="plan-modal-wrap-eleven">
                    </div>
                    <div class="plan-modal-wrap-twelve">
                        This is your available account balance for investments.
                    </div>
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>

    {{-- Deposit Modal --}}
    <div id="depositModal" class="hidden plan-modal-backdrop">
        <div class="plan-modal-con animate-bounce-once">
            <form action="{{route('deposits.create')}}" method="GET">
                @csrf

                <div class="authed-form-cancel-con" onclick="toggleDepositModal()">
                    <span class="icon-[hugeicons--cancel-01] authed-form-cancel"></span>
                </div>

                <div class="plan-modal-wrap-one">Fund Account</div>

                <div class="plan-modal-wrap-two">Deposit Funds into your account directly.</div>

                <div class="font-bold text-sm mt-7">Payment method</div>
                <div class="border border-blue-200 rounded-lg px-3 py-1">
                    <div class="text-gray-400 text-sm select-none">Select Payment Method*</div>
                    <select required name="blockchain" class="w-full outline-none text-gray-500">
                        <option value="BITCOIN">BITCOIN</option>
                        <option value="ETHEREUM">ETHEREUM (ERC20)</option>
                        <option value="SOLANA">SOLANA (SOL)</option>
                        <option value="USDT(BEP20)">USDT(BEP20)</option>
                        <option value="USDT(TRX10)">USDT(TRX10)</option>
                        <option value="USDC(BEP20)">USDC(BEP20)</option>
                        <option value="BNB(BEP20)">BNB(BEP20)</option>
                        <option value="TRON(TRX)">TRON(TRX)</option>
                    </select>
                </div>

                <div class="overview-modal-div-wrap-five">
                    <div class="overview-modal-div-wrap-six">Enter Amount ($)</div>
                    <input type="number" name="amount" class="overview-modal-div-wrap-seven" required>
                </div>
                <div class="plan-modal-wrap-five">
                    * Secure and safely deposit money into your account.
                </div>

                <div class="plan-modal-wrap-thirteen">
                    <input type="submit" value="Proceed" class="plan-modal-wrap-fourteen button">
                </div>
            </form>
        </div>
    </div>
</body>
</html>