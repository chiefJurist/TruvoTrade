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
                <div>
                    <span class="icon-[tabler--user-circle] profile-second-div-wrap-two"></span>
                </div>
                <div class="profile-second-div-wrap-three">Profile</div>
            </div>

            {{-- third div --}}
            <div class="profile-third-div-con">
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
            </div>
        </div>
    </div>
</x-trader-layout>