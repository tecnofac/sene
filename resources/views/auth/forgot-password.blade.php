<x-guest-layout>
    <x-jet-authentication-card>
        <div class="row" style="height:95vh; overflow-y:hidden;">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <x-slot name="logo">
                </x-slot>
                <img src="{{asset('img/logo.jpg')}}" alt="img" class="">
                
            </div>
            <div class="border-start col-6 d-flex justify-content-center align-items-center">
                {{-- <div class="mb-4 text-sm text-secondary offset-lg-4 col-lg-4 ">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div> --}}
        
                @if (session('status'))
                    <div class="mb-4 h5 text-success">
                        {{ session('status') }}
                    </div>
                @endif
        
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('password.email') }}" class="w-50">
                    @csrf
        
                    <div class="mb-3 input-group">
                        <label for="email" class="input-group-text"><i class="fa fa-envelope"></i></label>
                        {{-- <x-jet-input id="email" class="block w-full mt-1 ms-4" type="email" name="email" :value="old('email')" required autofocus /> --}}
                        <x-jet-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="row">
                        <x-jet-button class="rounded bg-primary">
                            {{ __('Envoi du lien de reinitialisation du mot de passe') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>

        
    </x-jet-authentication-card>
</x-guest-layout>
