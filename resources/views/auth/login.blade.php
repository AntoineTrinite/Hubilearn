<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="login-form-div top-div">Connexion</h2>
        <!-- Email Address -->
        <div class="login-form-div">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" class="input-login" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="login-form-div">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="input-login"
                            type="password"
                            name="password"
                            required autocomplete="current-password"/>

            <x-input-error :messages="$errors->get('password')"  />
        </div>

        <!-- Remember Me -->
        <div class="login-remember-part">
            <div class="login-form-div">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox"   name="remember">
                    <span >{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="login-form-div bottom-div">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                
            </div>
            
            <x-primary-button class="login-btn">
                {{ __('Log in') }}
            </x-primary-button>
                
        </div>
        
    </form>
</x-guest-layout>
