<x-auth-layout>
    <div>
        <div class="py-8 font-bold text-xl">Reset Password</div>

        @if (session('status'))
            <div>{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Hidden Token -->
            <input type="hidden" name="token" value="{{ $token }}">

            <!-- Email -->
            <div class="relative w-full mb-6">
                <input type="email" name="email" value="{{ old('email') }}" class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:border-blue-500" required autofocus>
                <label class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Email</label>
            </div>

            <!-- New Password -->
            <div class="relative w-full mb-6">
                <input type="password" name="password" class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:border-blue-500" required>
                <label class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">New Password</label>
            </div>

            <!-- Confirm New Password -->
            <div class="relative w-full mb-6">
                <input type="password" name="password_confirmation" class="peer w-full border border-gray-300 rounded px-4 pt-6 pb-2 text-sm focus:outline-none focus:border-blue-500" required>
                <label class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Confirm Password</label>
            </div>

            <div>
                <button type="submit" class="auth-form-btn button">Reset Password</button>
            </div>
        </form>
    </div>
</x-auth-layout>