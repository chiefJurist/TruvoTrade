<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Profile</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Profile</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        <div class="profile-second-and-third-div-con">
            {{-- second div --}}
            <div class="profile-second-div-con">
                <a href="{{ route('trader.profile', ['section' => 'profile']) }}" class="profile-second-div-wrap-one {{ request()->routeIs('trader.profile') && $section !== 'accounts' && $section !== 'security' ? 'border-blue-600 text-blue-600' : 'text-gray-600 border-white' }}">
                    <div>
                        <span class="icon-[tabler--user-circle] profile-second-div-wrap-two"></span>
                    </div>
                    <div class="profile-second-div-wrap-three">Profile</div>
                </a>
                
                <a href="{{ route('trader.profile', ['section' => 'accounts']) }}" class="profile-second-div-wrap-one {{ $section === 'accounts' ? 'border-blue-600 text-blue-600' : 'text-gray-600 border-white' }}">
                    <div>
                        <span class="icon-[tabler--building-bank] profile-second-div-wrap-two"></span>
                    </div>
                    <div class="profile-second-div-wrap-three">Accounts</div>
                </a>

                <a href="{{ route('trader.profile', ['section' => 'security']) }}" class="profile-second-div-wrap-one {{ $section === 'security' ? 'border-blue-600 text-blue-600' : 'text-gray-600 border-white' }}">
                    <div>
                        <span class="icon-[tabler--lock] profile-second-div-wrap-two"></span>
                    </div>
                    <div class="profile-second-div-wrap-three">Security</div>
                </a>
            </div>

            {{-- third div --}}
            <div class="profile-third-div-con">
                @if (request()->routeIs('trader.profile') && $section !== 'accounts' && $section !== 'security')
                    <form action="">
                        @csrf

                        <div class="profile-third-wrap-one">Personal Details</div>

                        <div class="profile-third-wrap-two">
                            To change your personal detail , edit and save from here
                        </div>

                        <div class="profile-third-wrap-three">
                            <div>
                                <label for="fullname" class="profile-third-wrap-four">Full Name</label>
                                <input type="text" name="fullname" id="fullname" value="{{auth()->user()->first_name}} {{auth()->user()->last_name}}" readonly class="profile-third-wrap-five">
                            </div>

                            <div>
                                <label for="displayname" class="profile-third-wrap-four">Display Name</label>
                                <input type="text" name="displayname" id="displayname" value="{{auth()->user()->first_name}}" readonly class="profile-third-wrap-five">
                            </div>
                            
                            <div>
                                <label for="email" class="profile-third-wrap-four">Email</label>
                                <input type="email" name="email" id="email" value="{{auth()->user()->email}}" readonly class="profile-third-wrap-five">
                            </div>

                            <div>
                                <label for="country" class="profile-third-wrap-four">Country</label>
                                <input type="text" name="country" id="country" value="{{auth()->user()->country}}" readonly class="profile-third-wrap-five">
                            </div>

                            <div>
                                <label for="phone" class="profile-third-wrap-four">Phone</label>
                                <input type="tel" name="phone" id="phone" value="{{auth()->user()->phone_number}}" class="profile-third-wrap-six">
                            </div>

                            <div>
                                <label for="address" class="profile-third-wrap-four">Address</label>
                                <input type="text" name="address" id="address" value="{{auth()->user()->address}}" class="profile-third-wrap-six">
                            </div>
                        </div>

                        <div class="profile-third-wrap-seven">
                            <input type="submit" value="Save" class="profile-third-wrap-eight button">
                        </div>
                    </form>
                @elseif($section === 'accounts')
                    <div class="profile-third-wrap-nine">
                        <div class="profile-third-wrap-ten">
                            <span class="icon-[tabler--info-circle] profile-third-wrap-eleven"></span>
                            <span class="profile-third-wrap-twelve">
                                Add a withdrawal account to withdraw funds.
                            </span>
                        </div>

                        <div onclick="toggleProfileAccounts()" class="profile-third-wrap-thirteen button">
                            <span>Add Account</span>
                            <span class="icon-[ion--caret-down] profile-third-wrap-fourteen"></span>
                        </div>
                    </div>

                    <div class="relative">
                        <div id="cryptoAndBank" class="hidden profile-third-wrap-fifteen">
                            <div class="profile-third-wrap-sixteen animate-bounce-once">
                                <div class="profile-third-wrap-seventeen button" onclick="toggleProfileCryptoModal()">
                                    <span class="icon-[tabler--currency-bitcoin]"></span>
                                    <span>Crypto</span>
                                </div>
                                <div class="profile-third-wrap-seventeen button" onclick="toggleProfileBankModal()">
                                    <span class="icon-[tabler--building-bank]"></span>
                                    <span>Bank</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($section === 'security')
                    <div class="profile-fourth-wrap-eighteen">
                        <div class="profile-fourth-wrap-nineteen">
                            <div>
                                <div class="profile-fourth-wrap-twenty">KYC VERIFICATION</div>
                                <div class="profile-fourth-wrap-twenty-one">
                                    Note: You have to complete your KYC Verification to access withdrawals
                                </div>
                            </div>
                            <div>
                                <a href="{{route('trader.kyc')}}">
                                    <div class="profile-fourth-wrap-twenty-two button">Verify</div>
                                </a>
                            </div>
                        </div>

                        <div class="profile-fourth-wrap-twenty-three">
                            <form action="">
                                @csrf
                                <div class="profile-fourth-wrap-twenty-four">Change Password</div>
                                <div class="profile-fourth-wrap-twenty-five">
                                    To change your password please confirm here
                                </div>
                                <div class="profile-fourth-wrap-twenty-six">
                                    <label for="currentpassword" class="profile-fourth-wrap-twenty-seven">Current Password</label><br>
                                    <input type="password" name="currentpassword" class="profile-fourth-wrap-twenty-eight">
                                </div>
                                <div class="profile-fourth-wrap-twenty-six">
                                    <label for="password" class="profile-fourth-wrap-twenty-seven">New Password</label><br>
                                    <input type="password" name="password" class="profile-fourth-wrap-twenty-eight">
                                </div>
                                <div class="profile-fourth-wrap-twenty-six">
                                    <label for="confirmpassword" class="profile-fourth-wrap-twenty-seven">Confirm Password</label><br>
                                    <input type="password" name="confirmpassword" class="profile-fourth-wrap-twenty-eight">
                                </div>
                                <div class="mt-10">
                                    <input type="submit" value="Update Password" class="profile-fourth-wrap-twenty-nine button">
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-trader-layout>