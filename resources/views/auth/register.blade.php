<x-auth-layout>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="auth-header">Create an Account</div>
        <div>Sign up with your email and get started.</div>

        <div class="auth-sub-head-con">
            <span class="auth-sub-head-border">_____________ </span>
            <span class="auth-sub-head-text"> Registration </span>
            <span class="auth-sub-head-border"> _____________</span>
        </div>

        <div>
            <div class="auth-input-div">
                <input type="text" name="firstname" value="{{ old('name') }}" required placeholder="First Name" class="auth-input">
            </div>
            <div class="auth-input-div">
                <input type="text" name="lastname" value="{{ old('name') }}" required placeholder="Last Name" class="auth-input">
            </div>
        </div>
        
        <div class="auth-input-div">
            <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email address" class="auth-input">
        </div>

        <div>
            <div class="auth-input-div">
                <select id="countrySelect" name="country" required class="auth-input">
                    <option value="" disabled selected>Select your country</option>
                </select>
            </div>
            <div class="auth-input-div">
                <input type="tel" name="phone" id="phone-number" placeholder="phone number" class="auth-input">
            </div>
        </div>

        <div>
            <div class="auth-input-div">
                <select name="gender" id="gender" required class="auth-input">
                    <option value="" disabled selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="auth-input-div">
                <input type="text" name="address" placeholder="address" class="auth-input">
            </div>
        </div>

        <div>
            <div class="auth-input-div">
                <input type="password" name="password" required placeholder="Password" class="auth-input">
            </div>
            <div class="auth-input-div">
                <input type="password" name="password_confirmation" required placeholder="Confirm Password" class="auth-input">
            </div>
        </div>
        
        <div class="auth-input-div">
            <button type="submit" class="auth-form-btn button">Sign up</button>
        </div>

        <div class="auth-input-div">
            <span>Already have an Account? </span>
            <a href="{{ route('show.login') }}" class="text-blue-600 font-bold">
                <span class="">Sign in</span>
            </a>
        </div>

        <!-- validate errors (Laravel automatically returns this if there were errors in the controller validation) -->
        @if($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-auth-layout>