<x-guest-layout >
    <x-jet-authentication-card >
        <div class="" >
            <div class="row" style="height:95vh; overflow-y:hidden;">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <x-slot name="logo" class="">
                        
                    </x-slot>
                    <img src="{{asset('img/logo.jpg')}}" alt="img" class="">
                </div>
                <div class="border-start col-6 d-flex justify-content-center align-items-center">
            
                    <form method="POST" action="{{ route('login') }}" class="px-5 py-5 border w-50">
                        <x-jet-validation-errors class="alert alert-danger" />
            
                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                        @endif
                        @csrf
            
                        <h1 class="pt-5 text-center">Connectez vous Admin</h1>
                        <hr>
                        <div class="mb-3 input-group">
                            <label for="email" class="input-group-text"><i class="fa fa-envelope"></i></label>
                            <x-jet-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
            
                        <div class="mb-4 input-group w-100">
                            <label for="email" class="input-group-text"><i class="fa fa-key"></i></label>
                            <x-jet-input id="password" class="form-control" placeholder="Mot de passe" type="password" name="password" required autocomplete="current-password" />
                        </div>
            
                        <div class="mb-3 input-group">
                            <label for="remember_me" class="">
                                <x-jet-checkbox id="remember_me" name="remember" class="ms-5" />
                                <span class="">{{ __('Remember me') }}</span>
                            </label>
                        </div>
            
                        <div class="gap-2 text-center row">
                            @if (Route::has('password.request'))
                                <a class="text-sm underline text-primary hover:text-gray-900 " href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif
            
                            <x-jet-button class="ml-4 rounded bg-primary">
                                {{ __('Connexion') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
