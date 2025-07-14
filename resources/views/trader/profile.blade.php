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

        {{-- third div --}}
        <div class="my-10">
            <form action="">
                @csrf

                <div class="font-bold text-lg">Personal Details</div>

                <div class="text-gray-600 my-1">
                    To change your personal detail , edit and save from here
                </div>

                <div class="my-8 grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <label for="fullname" class="block font-bold">Full Name</label>
                        <input type="text" name="fullname" id="fullname" value="Conor Iwobi" readonly class="block bg-gray-200 outline-none py-2 px-4 rounded-lg w-full">
                    </div>

                    <div>
                        <label for="displayname">Display Name</label>
                        <input type="text" name="displayname" id="displayname" value="Conor" readonly class="block bg-gray-200 outline-none py-2 px-4 rounded-lg w-full">
                    </div>
                    
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="conoriwovi@gmail.com" readonly class="block bg-gray-200 outline-none py-2 px-4 rounded-lg w-full">
                    </div>

                    <div>
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" value="Nigeria" readonly class="block bg-gray-200 outline-none py-2 px-4 rounded-lg w-full">
                    </div>

                    <div>
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" value="07010028679" class="block border border-gray-200 outline-none py-2 px-4 rounded-lg w-full">
                    </div>

                    <div>
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="No. 21 Omila Road" class="block border border-gray-200 outline-none py-2 px-4 rounded-lg w-full">
                    </div>
                </div>

                <div class="flex justify-center md:justify-end">
                    <input type="submit" value="Save" class="text-white bg-blue-800 px-5 py-2 font-bold rounded-lg hover:bg-blue-400 button">
                </div>
            </form>
        </div>
    </div>
</x-trader-layout>