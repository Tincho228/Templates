<x-jet-action-section>
    <x-slot name="title">
        {{ __('Informacion de membresia.') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Informacion sobre tu plan, vencimientos.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="h5 font-weight-bold">
                {{ __('Plan') }}
        </h3>

        <p class="mt-3">
            {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
        </p>

        <div class="mt-3">
            <h3 class="h5 font-weight-bold">
                {{ __('Duracion de membresia') }}
        </h3>
        <div id="counter"></div>
        <p class="mt-3">
            <strong>Nota: </strong>{{ __('Una vez vencida tu membresia, el administrador puede eliminar tu cuenta pasados los treinta dias.') }}
        </p>
        </div>
    </x-slot>
</x-jet-action-section>