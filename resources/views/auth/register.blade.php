<x-guest-layout>
    <x-jet-authentication-card>
        
        <div class="row" style="height:95vh; overflow-y:hidden;">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <x-slot name="logo" class="">
                    
                </x-slot>
                <img src="{{asset('img/logo.jpg')}}" alt="img" class="">
            </div>
            <div class="border-start col-6 d-flex justify-content-center align-items-center">
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('register') }}" class="px-5 py-5 border w-50">
                    @csrf
                    <h1 class="pt-5 text-center">Créer compte Admin</h1>
                    <hr>
                    <div class="mb-3 input-group">
                        <label for="name" class="input-group-text"><i class="fa fa-user"></i></label>
                        <x-jet-input id="name" class="form-control" type="text" placeholder="Nom" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mb-3 input-group">
                        <label for="email" class="input-group-text"><i class="fa fa-envelope"></i></label>
                        <x-jet-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <div class="mb-3 input-group">
                        <label for="password" class="input-group-text"><i class="fa fa-key"></i></label>
                        <x-jet-input id="password" class="form-control" placeholder="Mot de passe" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mb-3 input-group">
                        <label for="password_confirmation" class="input-group-text"><i class="fa fa-key"></i></label>
                        <x-jet-input id="password_confirmation" class="form-control" placeholder="Confirmer mot de passe" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
        
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
        
                    <div class="row">
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Vous avez déjà un compte ?') }}
                        </a>
        
                        <x-jet-button class="ml-4 rounded bg-primary">
                            {{ __('Créer') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>

    </x-jet-authentication-card>
</x-guest-layout>
