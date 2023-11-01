<x-guest-layout>
    <form class="login-form" method="POST" action="{{ route('register') }}">
        @csrf

        <h2 class="login-form-div top-div">Connexion</h2>
        <!-- Name -->
        <div class="login-form-div">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" type="text" name="name" class="input-login" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')"/>
        </div>

        <!-- Email Address -->
        <div class="login-form-div">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" class="input-login" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        <!-- Password -->
        <div class="login-form-div">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="input-login"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <!-- Confirm Password -->
        <div class="login-form-div">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="input-login"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')"/>
        </div>

        <div class="login-form-div">
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>            
        </div>
        
        <x-primary-button class="register-btn">
            {{ __('Register') }}
        </x-primary-button>
    </form>
</x-guest-layout>
