<x-auth-layout>
    <form action="" method="POST">
        @csrf

        <div class="auth-header pt-20">Login into Account</div>
        <div>Sign in using your email and password.</div>

        <div class="auth-sub-head-con">
            <span class="auth-sub-head-border">________________ </span>
            <span class="auth-sub-head-text"> Login </span>
            <span class="auth-sub-head-border"> ________________</span>
        </div>

        <div class="relative w-full mb-6">
            <input type="email" name="email" id="email" placeholder="" class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required/>
            <label for="email" class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">
                Email Address
            </label>
        </div>

        <div class="relative w-full mb-6">
            <input type="password" name="password" id="password" placeholder=" " class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required/>
            <label for="password" class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">
                Password
            </label>
        </div>

        <div class=" my-5 flex justify-between ">
            <div class="inline-flex items-center">
                <input id="remember" type="checkbox" name="remember" class="scale-150 button">
                <span class="ml-2 text-gray-500 text-sm md:text-base">Remember this Device</span>
            </div>
            <a href="{{ route('forgot-password') }}" class="text-blue-500 font-bold">
                <div>Forgot Password?</div>
            </a>
        </div>

        <div class="auth-input-div">
            <button type="submit" class="auth-form-btn button">Sign in</button>
        </div>

        <div class="auth-input-div">
            <span>New to TruvoTrade? </span>
            <a href="{{ route('show.register') }}" class="text-blue-600 font-bold">
                <span class="">Sign up</span>
            </a>
        </div>
    </form>
</x-auth-layout>