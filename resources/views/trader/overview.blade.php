<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/truvo_trades.png') }}" type="image/png">
    <title>Truvo Trade</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Live Crypto Ticker Tape Marquee -->
    <div class="w-full bg-white text-black overflow-hidden shadow">
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
    <div class="md:flex justify-between">
        <!-- Bitcoin Live Price Card -->
        <div class="bg-white shadow-lg rounded-xl p-4 w-full max-w-sm">
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
                        "colorTheme": "light",
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

        <!-- Bitcoin Live Price Card -->
        <div class="bg-white shadow-lg rounded-xl p-4 w-full max-w-sm">
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
                        "colorTheme": "light",
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

        <!-- Bitcoin Live Price Card -->
        <div class=" bg-white shadow-lg rounded-xl p-4 w-full max-w-sm">
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
                        "colorTheme": "light",
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
</body>
</html>