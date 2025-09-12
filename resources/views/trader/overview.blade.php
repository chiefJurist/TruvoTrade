<x-trader-layout>
    <div>
        {{-- Live Crypto Ticker Tape Marquee --}}
        <div class="w-full bg-white text-black overflow-hidden shadow-lg my-10">
            <div class="tradingview-widget-container">
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [
                        {
                            "proName": "BINANCE:BTCUSDT",
                            "title": "BTC/USDT"
                        },
                        {
                            "proName": "BINANCE:ETHUSDT",
                            "title": "ETH/USDT"
                        },
                        {
                            "proName": "BINANCE:SOLUSDT",
                            "title": "SOL/USDT"
                        },
                        {
                            "proName": "BINANCE:XRPUSDT",
                            "title": "XRP/USDT"
                        },
                        {
                            "proName": "BINANCE:ADAUSDT",
                            "title": "ADA/USDT"
                        }
                    ],
                    "colorTheme": "light",
                    "isTransparent": false,
                    "displayMode": "regular",
                    "locale": "en"
                }
                </script>
            </div>
        </div>

        {{-- Second Div --}}
        <div class="overview-second-div-con">
            <div>
                <div class="overview-second-div-user-con">
                    <div>
                        <img src="{{asset('img/user-2.png')}}" alt="user" class="overview-second-div-user-img">
                    </div>
                    <div>
                        <div class="overview-second-div-salute">Hi, {{ucfirst(strtolower(auth()->user()->first_name))}}</div>
                        <div class="overview-second-div-salute-text">Here's a summary of your account. Have fun!</div>
                    </div>
                </div>
                <div class="overview-second-div-btn-con">
                    <a href="{{ route('deposits.index') }}">
                        <div class="overview-second-div-deposit-btn">
                            <span class="icon-[tabler--home-dollar] text-xl"></span>
                            <span>Deposit</span>
                        </div>
                    </a>
                    <a href="{{ route('withdrawals.index') }}">
                        <div class="overview-second-div-withdraw-btn">
                            <span class="icon-[tabler--credit-card] text-xl"></span>
                            <span>Withdraw</span>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <img src="{{asset('img/overview-img1.svg')}}" alt="">
            </div>
        </div>

        {{-- Third div --}}
        <div class="overview-third-div-first">
            <div class="overview-third-div-second">
                <div>
                    <span class="icon-[tabler--info-circle]"></span>
                    <span>Verify KYC Information to activate withdrawals</span>
                </div>
                <a href="{{route('trader.kyc')}}">
                    <div class="overview-third-div-third">Verify KYC</div>
                </a>
            </div>
            <div class="overview-third-div-fourth">
                <div>
                    <span class="icon-[tabler--info-circle]"></span>
                    <span>Update your account information from your profile to make withdrawals.</span>
                </div>
                <a href="{{route('accounts.index')}}">
                    <div class="overview-third-div-fifth">Update Account</div>
                </a>
            </div>
        </div>

        {{-- overview fourth div --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Bitcoin Live Price Card -->
            <div class="overview-chart-card-con">
                <div class="text-center font-semibold mb-2">Live BTC/USDT Price</div>
                <div class="flex justify-center">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                        {
                            "symbol": "BINANCE:BTCUSDT",
                            "width": "100%",
                            "height": "100",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "#2196F3",
                            "underLineColor": "rgba(33, 150, 243, 0.15)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                        </script>
                    </div>
                </div>
            </div>

            <!-- Solana Live Price Card -->
            <div class="overview-chart-card-con">
                <div class="text-center font-semibold mb-2">Live SOL/USDT Price</div>
                <div class="flex justify-center">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                        {
                            "symbol": "BINANCE:SOLUSDT",
                            "width": "100%",
                            "height": "100",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "#2196F3",
                            "underLineColor": "rgba(33, 150, 243, 0.15)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                        </script>
                    </div>
                </div>
            </div>

            <!-- Ethereum Live Price Card -->
            <div class="overview-chart-card-con">
                <div class="text-center font-semibold mb-2">Live ETH/USDT Price</div>
                <div class="flex justify-center">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                        {
                            "symbol": "BINANCE:ETHUSDT",
                            "width": "100%",
                            "height": "100",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "#2196F3",
                            "underLineColor": "rgba(33, 150, 243, 0.15)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        {{-- fifth div --}}
        <div class="overview-fifth-div-con">
            <div class="overview-fifth-div-card-con">
                <div>
                    <div class="overview-fifth-div-card-header">Available Balance</div>
                    <div class="overview-fifth-div-card-left">
                        <span class="overview-fifth-div-card-balance">${{ number_format((float)auth()->user()->balance,2) }}</span>
                        <span class="overview-fifth-div-card-arrow">
                            <span class="icon-[tabler--arrow-up-left] text-green-400"></span>
                        </span>
                        <span>+ 9%</span>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/overview-img2.svg') }}" alt="" class="overview-fifth-div-card-img">
                </div>
            </div>
            <div class="overview-fifth-div-card-con">
                <div>
                    <div class="overview-fifth-div-card-header">Total Deposit</div>
                    <div class="overview-fifth-div-card-left">
                        <span class="overview-fifth-div-card-balance">${{ number_format($totalDeposits, 2) }}</span>
                        <span class="overview-fifth-div-card-arrow">
                            <span class="icon-[tabler--arrow-up-left] text-green-400"></span>
                        </span>
                        <span>+ 9%</span>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/overview-img2.svg') }}" alt="" class="overview-fifth-div-card-img">
                </div>
            </div>
            <div class="overview-fifth-div-card-con">
                <div>
                    <div class="overview-fifth-div-card-header">Total Withdrawal</div>
                    <div class="overview-fifth-div-card-left">
                        <span class="overview-fifth-div-card-balance">${{ number_format($totalWithdrawals, 2) }}</span>
                        <span class="overview-fifth-div-card-arrow">
                            <span class="icon-[tabler--arrow-up-left] text-green-400"></span>
                        </span>
                        <span>+ 9%</span>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/overview-img2.svg') }}" alt="" class="overview-fifth-div-card-img">
                </div>
            </div>
        </div>

        {{-- sixth div --}}
        <div class="overview-sixth-div-con">
            <div class="overview-sixth-div-left-con">
                <div>
                    <div class="overview-sixth-div-wrap-one">
                        <span class="overview-sixth-div-wrap-two">
                            <span class="overview-sixth-div-wrap-three">
                                <span class="icon-[token--eth] overview-sixth-div-wrap-four"></span>
                            </span>
                        </span>
                        <span class="font-bold">TOKEN BALANCE</span>
                    </div>
                    <div class="overview-sixth-div-wrap-five">{{ number_format((float)auth()->user()->token_balance,2) }} ELT</div>
                </div>
                <div>
                    <div class="overview-sixth-div-wrap-six button" onclick="toggleOverviewModal()">
                        <span class="icon-[tabler--ticket]"></span>
                        <span>Load Tokens</span>
                    </div>
                    <div class="overview-sixth-div-wrap-seven button" onclick="toggleOverviewTokenModal()">
                        Purchase Tokens
                    </div>
                </div>
            </div>

            <div class="overview-sixth-div-right-con">
                <div>
                    <div class="overview-sixth-div-wrap-eight">
                        <img src="{{ asset('img/overview-img2.svg') }}" alt="" class="overview-sixth-div-wrap-nine">
                        <span class="font-bold">TOTAL PROFIT</span>
                    </div>
                    <div class="overview-sixth-div-wrap-ten">${{ number_format((float)auth()->user()->token_profit,2) }}</div>
                </div>
                <div class="overview-sixth-div-wrap-eleven">
                    <span class="icon-[tabler--trending-up]"></span>
                    <span>+3.20%</span>
                </div>
            </div>
        </div>

        {{-- seventh div --}}
        <div class="overview-seventh-div-con">
            <div class="overview-seventh-div-wrap-one">
                @if(false)
                    <div class=" ">
                        <img src="{{asset('img/overview-img4.png')}}" alt="bot" class="overview-seventh-div-img">
                    </div>
                    <div class="overview-seventh-div-wrap-two">Bot is not active</div>
                    <div>Please activate the bot to start trading</div>
                @else
                    <div class="font-bold text-2xl lg:text-4xl">Bot is Active</div>
                    <div class="italic font-bold text-gray-400">Your profit will be displayed in the dashboard</div>
                @endif
            </div>
        </div>

        {{--eight div --}}
        <div>
            <!-- TradingView Top Stories / News Widget -->
            <div class="overview-chart-card-con">
                <div class="text-center mb-2 font-extrabold text-2xl">#Market Top Stories</div>
                <div class="flex justify-center">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                        {
                            "feedMode": "market",
                            "colorTheme": "light",
                            "isTransparent": false,
                            "displayMode": "regular",
                            "width": "100%",
                            "height": 400,
                            "locale": "en"
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        {{-- ninth div --}}
        <div class="overview-ninth-div-con">
            <div class="overview-ninth-div-wrap-one">
                <div class="overview-ninth-div-wrap-two">Recent Transactions</div>
                <a href="{{route('transactions.index')}}">
                    <div class="overview-ninth-div-wrap-three button">
                        <span>View all</span>
                        <span class="icon-[tabler--arrow-big-right-lines-filled] overview-ninth-div-wrap-four"></span>
                    </div>
                </a>
            </div>
            <div class="overview-ninth-div-wrap-five">
                <table class="overview-ninth-div-wrap-six">
                    <thead>
                        <tr class="overview-ninth-div-wrap-seven">
                            <th class="overview-ninth-div-wrap-eight">Transaction</th>
                            <th class="overview-ninth-div-wrap-eight">Status</th>
                            <th class="overview-ninth-div-wrap-eight">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="overview-ninth-div-wrap-eight">Deposit</td>
                            <td class="overview-ninth-div-wrap-eight">Success</td>
                            <td class="overview-ninth-div-wrap-eight">Monday</td>
                        </tr>
                        <tr>
                            <td class="overview-ninth-div-wrap-eight">Deposit</td>
                            <td class="overview-ninth-div-wrap-eight">Success</td>
                            <td class="overview-ninth-div-wrap-eight">Monday</td>
                        </tr>
                        <tr>
                            <td class="overview-ninth-div-wrap-eight">Deposit</td>
                            <td class="overview-ninth-div-wrap-eight">Success</td>
                            <td class="overview-ninth-div-wrap-eight">Monday</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-trader-layout>