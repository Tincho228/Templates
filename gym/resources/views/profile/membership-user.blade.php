<x-jet-action-section>
    <x-slot name="title">
        {{ __('Informacion de membresia.') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Informacion sobre tu plan, vencimientos.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="h5 font-weight-bold">
                {{ __('Plan Mensual') }} <strong class="text-success">Activo</strong>
        </h3>

        <p class="mt-3">
            {{ __('YOGA') }}
        </p>

        <div class="mt-3">
            <h3 class="h5 font-weight-bold">
                {{ __('Duracion de membresia') }}
        </h3>
        <div id="counter" data-date={{Auth::user()->created_at}} data-plan="1"></div>
        
        </div>
        <div id="counter_alert" class="alert alert-danger">
            <h5 class="font-weight-bold">Su membresia expiro!!!!</h5>
            <p class="mt-3">
                <strong>Nota: </strong>{{ __('Una vez vencida tu membresia, el administrador puede eliminar tu cuenta pasados los treinta dias.') }}
            </p>
        </div>
       
    </x-slot>
</x-jet-action-section>