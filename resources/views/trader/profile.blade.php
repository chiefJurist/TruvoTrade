<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="flex justify-between items-center bg-purple-50 px-7 py-5 rounded-xl">
            <div class="basis-2/3">
                <div class="text-2xl font-bold">Profile</div>
                <div class="text-xs md:text-base inline-flex items-center">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] text-3xl font-bold"></span>
                    <span>Profile</span>
                </div>
            </div>
            <div class="basis-1/3 flex justify-end">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>
    </div>
</x-trader-layout>