<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Security</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Security</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        <div class="profile-second-and-third-div-con">
            {{-- second div --}}
            <div class="profile-second-div-con">
                <div>
                    <span class="icon-[tabler--lock] profile-second-div-wrap-two"></span>
                </div>
                <div class="profile-second-div-wrap-three">Security</div>
            </div>

            {{-- third div --}}
            <div class="profile-third-div-con">
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
            </div>
        </div>
    </div>
</x-trader-layout>