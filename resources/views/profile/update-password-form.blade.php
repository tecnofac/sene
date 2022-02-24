<x-jet-form-section submit="updatePassword" class="py-5">
    <x-slot name="title">
        {{ __('Mettre à jour le  mot de passe') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester en sécurité.') }}
    </x-slot>

    <x-slot name="form" class="px-5">
        <div class="col-6 sm:col-4 input-group">
            <label for="current_password" class="input-group-text"><i class="fa fa-key"></i> <b class="px-2">Mot de passe actuel</b></label>
            <x-jet-input id="current_password" type="password" placeholder="Mot de passe en cours" class="form-control" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-6 sm:col-4 input-group">
            <label for="password" class="input-group-text"><i class="fa fa-key"></i> <b class="px-2">Nouveau Mot de passe</b></label>
            <x-jet-input id="password" type="password" placeholder="Nouveau mot de passe" class="form-control" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-6 sm:col-4 input-group">
            <label for="password_confirmation" class="input-group-text"><i class="fa fa-key"></i> <b class="px-2">Confirmer Mot de passe</b></label>
            <x-jet-input id="password_confirmation" type="password" class="form-control" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button class="btn btn-primary">
            {{ __('Enregistrer') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
