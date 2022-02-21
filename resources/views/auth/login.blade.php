<x-guest-layout >
    <x-jet-authentication-card >
        <div class="row container pb-3 px-3">
            <div class="border border-top-0 border-secondary-opacity-2 offset-lg-5 col-lg-5 rounded">
                <div >
                    <x-slot name="logo" class="">
                        <img src="{{asset('img/logo.jpg')}}" alt="img" class="rounded-circle offset-lg-5 col-lg-2">
                    </x-slot>
                </div>
        
                <x-jet-validation-errors class="mb-4" />
        
                @if (session('status'))
                    <div class="">
                        {{ session('status') }}
                    </div>
                @endif
        
                <form method="POST" action="{{ route('login') }}" class="my-3 ms-5 text-secondary">
                    @csrf
        
                    <div class="mb-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="ms-5 text-secondary bg-secondary bg-opacity-25 rounded border-none" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="mb-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="ms-4 text-secondary bg-secondary bg-opacity-25 rounded border-none" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="ms-5">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" class="ms-5" />
                            <span class="">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-primary hover:text-gray-900 " href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-jet-button class="ml-4 bg-primary rounded">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
