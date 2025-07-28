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
        <div class="plans-second-div-con">
            <div class="plans-second-div-wrap-one">Investment Plans</div>

            <div class="plans-second-div-wrap-two">
                Here is our several investment plans. You can invest daily, weekly or monthly and get higher returns in your investment.
            </div>

            {{--plan one --}}
            <div class="plans-second-div-wrap-three">
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">STARTER PACK</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">45%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>1000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>10000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalOne()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan two --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">STANDARD PACK PLAN</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">55%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>10,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>50,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalTwo()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan three --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">DIAMOND PACK PLAN</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">65%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>50,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>100,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalThree()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan four --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">GOLD PACK PLAN</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">75%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>100,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalFour()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan five --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">PRE STARTER</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">45%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>500 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>10,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalFive()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan six --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">BITCOIN LIVE STAKING</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">85%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>50,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalSix()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan seven--}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">PATTERN DAY TRADER (PTD)</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">65%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>55,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalSeven()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan eight--}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">BITCOIN LIVE STAKING (PREMIUM)</div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">85%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">56</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>100,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalEight()"> 
                                <span>Invest Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-trader-layout>