<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form class="login-form" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="login-form-div forget-div top-div">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Email Address -->
        <div class="login-form-div">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" class="input-login" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        
        <x-primary-button class="forget-btn">
            {{ __('Email Password Reset Link') }}
        </x-primary-button>
        
    </form>
</x-guest-layout>
