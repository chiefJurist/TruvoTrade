<x-auth-layout>
    <div>
        <h2>Reset Password</h2>

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
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <!-- New Password -->
            <div>
                <label>New Password:</label>
                <input type="password" name="password" required>
            </div>

            <!-- Confirm New Password -->
            <div>
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <div>
                <button type="submit">Reset Password</button>
            </div>
        </form>
    </div>
</x-auth-layout>