<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/truvo_trades.png') }}" type="image/png">
    <title>Truvo Trade</title>
    @vite('resources/css/app.css')
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
        const investment = document.getElementById('traderInvestmentText');
        const plans = document.getElementById('traderPlansText');
        const transactions = document.getElementById('traderTransactionsText');
        const withdrawals = document.getElementById('traderWithdrawalsText');
        const deposits = document.getElementById('traderDepositsText');
        const referrals = document.getElementById('traderReferralsText');
        const extras = document.getElementById('extras');
        const overviewNav = document.getElementById('overviewNav');
        const profileNav = document.getElementById('profileNav');
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
            main.classList.remove('md:w-10/12');
            main.classList.add('md:w-11/12');
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
            investment.classList.add('hidden');
            plans.classList.add('hidden');
            transactions.classList.add('hidden');
            withdrawals.classList.add('hidden');
            deposits.classList.add('hidden');
            referrals.classList.add('hidden');
            extras.classList.add('hidden');
            overviewNav.classList.add('justify-center');
            profileNav.classList.add('justify-center');
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
            main.classList.add('md:w-10/12');
            main.classList.remove('md:w-11/12');
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
            investment.classList.remove('hidden');
            plans.classList.remove('hidden');
            transactions.classList.remove('hidden');
            withdrawals.classList.remove('hidden');
            deposits.classList.remove('hidden');
            referrals.classList.remove('hidden');
            extras.classList.remove('hidden');
            overviewNav.classList.remove('justify-center');
            profileNav.classList.remove('justify-center');
            investmentNav.classList.remove('justify-center');
            plansNav.classList.remove('justify-center');
            transactionsNav.classList.remove('justify-center');
            withdrawalsNav.classList.remove('justify-center');
            depositsNav.classList.remove('justify-center');
            referralsNav.classList.remove('justify-center');
        }
    }

</script>
<body>
    {{-- LOADER --}}
    <div id="app-loader" class="loader">
        <img src="{{asset('img/truvo_trade.png')}}" alt="Logo" class="loader-img">
    </div>

    {{-- Header for screens less than md: --}}
    <div class="trader-small-header-con">
        <div id="openMenu">
            <span class="icon-[material-symbols--menu-rounded] text-3xl"></span>
        </div>
        <div class="trader-small-header-logo-con">
            <img src="{{ asset('img/truvo_trade.png')}}" alt="Truvo Logo" class="w-16">
            <span>TruvoTrade</span>
        </div>
        <div>
            <img src="{{ asset('img/user-1.png') }}" alt="user" class="trader-small-header-img">
        </div>
    </div>

    {{-- navigation for smaller screens less than md --}}
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
            <a href="{{ route('trader.transactions') }}" class="trader-small-nav-link {{ request()->routeIs('trader.transactions') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--building-bank] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Transactions</span>
                </div>
            </a>
            <a href="{{ route('trader.withdrawals') }}" class="trader-small-nav-link {{ request()->routeIs('trader.withdrawals') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                <div>
                    <span class="icon-[tabler--square-arrow-up] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Withdrawals</span>
                </div>
            </a>
            <a href="{{ route('trader.deposits') }}" class="trader-small-nav-link {{ request()->routeIs('trader.deposits') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
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
            <a href="" class="trader-small-nav-link">
                <div>
                    <span class="icon-[tabler--power] trader-small-nav-link-icon"></span>
                </div>
                <div>
                    <span class="trader-small-nav-link-text">Log Out</span>
                </div>
            </a>

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
                <a href="{{ route('trader.transactions') }}" id="transactionsNav" class="trader-big-nav-link {{ request()->routeIs('trader.transactions') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--building-bank] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderTransactionsText">
                        <span class="trader-big-nav-link-text">Transactions</span>
                    </div>
                </a>
                <a href="{{ route('trader.withdrawals') }}" id="withdrawalsNav" class="trader-big-nav-link {{ request()->routeIs('trader.withdrawals') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                    <div>
                        <span class="icon-[tabler--square-arrow-up] trader-big-nav-link-icon"></span>
                    </div>
                    <div id="traderWithdrawalsText">
                        <span class="trader-big-nav-link-text">Withdrawals</span>
                    </div>
                </a>
                <a href="{{ route('trader.deposits') }}" id="depositsNav" class="trader-big-nav-link {{ request()->routeIs('trader.deposits') ? 'bg-blue-400 text-white' : 'text-gray-800 hover:bg-gray-100' }}">
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
                    <a href="" class="trader-big-nav-link">
                        <div>
                            <span class="icon-[tabler--power] trader-big-nav-link-icon"></span>
                        </div>
                        <div>
                            <span class="trader-big-nav-link-text">Log Out</span>
                        </div>
                    </a>

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
        <div id="bigMainContent" class="trader-big-main-content md:w-10/12">
            {{-- Header for bigger screens --}}
            <div id="bigScreenHeader" class="trader-big-screen-header w-10/12">
                <div class="trader-big-screen-hamburger" onclick="toggleBigSideBar()">
                    <span class="icon-[material-symbols--menu-rounded]"></span>
                </div>
                <div>
                    <img src="{{ asset('img/user-1.png') }}" alt="" class="trader-small-header-img">
                </div>
            </div>

            {{-- Page Content --}}
            <div class="trader-gen-container">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>