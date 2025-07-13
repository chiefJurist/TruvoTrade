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

        {{-- second div --}}
        <div class="profile-second-div-con">
            <a href="{{route('trader.profile')}}" class="profile-second-div-wrap-one {{ request()->routeIs('trader.profile') ? 'border-blue-600 text-blue-600' : 'text-gray-600 border-white' }}">
                <div>
                    <span class="icon-[tabler--user-circle] profile-second-div-wrap-two"></span>
                </div>
                <div>Profile</div>
            </a>
            
            <a href="" class="profile-second-div-wrap-one {{ request()->routeIs('trader.profile.accounts') ? 'border-blue-600 text-blue-600' : 'text-gray-600 border-white' }}">
                <div>
                    <span class="icon-[tabler--building-bank] profile-second-div-wrap-two"></span>
                </div>
                <div>Accounts</div>
            </a>

            <a href="" class="profile-second-div-wrap-one {{ request()->routeIs('trader.profile.security') ? 'border-blue-600 text-blue-600' : 'text-gray-600 border-white' }}">
                <div>
                    <span class="icon-[tabler--lock] profile-second-div-wrap-two"></span>
                </div>
                <div>Security</div>
            </a>
        </div>
    </div>
</x-trader-layout>