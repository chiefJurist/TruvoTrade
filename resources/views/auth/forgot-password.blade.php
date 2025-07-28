<x-auth-layout>
    <form action="" method="POST">
        @csrf

        <div class="auth-header pt-20">Set Password</div>
        <div>Enter your email address to receive reset link.</div>

        <div class="relative w-full my-20">
            <input type="email" name="email" id="email" placeholder="" class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required/>
            <label for="email" class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">
                Email Address
            </label>
        </div>

        <div class="auth-input-div">
            <button type="submit" class="forgot-password-btn button">Send Password Reset Link</button>
        </div>
    </form>
</x-auth-layout>