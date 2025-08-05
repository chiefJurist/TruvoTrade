<x-auth-layout>
    <div>
        <h2>Hello, {{ $user->first_name }}!</h2>

        <p>Thank you for registering. Please verify your email address by clicking the button below:</p>

        <p>
            <a href="{{ route('verify.email', $user->verification_token) }}"
            style="background-color: #4f46e5; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                Verify Email
            </a>
        </p>

        <p>If you did not create this account, no action is required.</p>
    </div>
</x-auth-layout>