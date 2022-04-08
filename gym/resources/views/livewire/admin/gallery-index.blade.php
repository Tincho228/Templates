<div>
    <div class="card">
        <div class="card-body">
            <h3 class="mt-3">Administrar Galeria</h3>
            <p>Lista de fotos</p>
            @if ($gallery)
                <div class="d-flex flex-wrap ">
                    @foreach ($gallery as $photo)
                    <div class="item-detail"><img class="img-fluid" src="{{Storage::url($photo->url)}}" alt="Photo"
                        id="picture{{$photo->id}}"></div>
                    @endforeach
                    <div class="item-detail" style="overflow:hidden; position:relative; display:flex; justify-content:center; align-items:center">
                        <img class="img-fluid" style="position:absolute;z-index:1 " src="{{URL::asset('assets/images/placeholder.jpg')}}" alt="Photo" id="picture{{$photo->id}}">
                         <!-- Button trigger modal -->
                        <button type="button" style="z-index:2; position:relative;" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-plus text-white"></i> Agregar
                        </button>
                    </div>
                </div>
            @else
                <div class="alert alert-secondary">
                    No hay fotos en esta galleria.
                </div>
                <div class="item-detail" style="overflow:hidden; position:relative; display:flex; justify-content:center; align-items:center">
                    <img class="img-fluid" style="position:absolute;z-index:1 " src="{{URL::asset('assets/images/placeholder.jpg')}}" alt="Photo" id="picture{{$photo->id}}">
                     <!-- Button trigger modal -->
                    <button type="button" style="z-index:2; position:relative;" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus text-white"></i> Agregar
                    </button>
                </div>

            @endif

        </div>
    </div>
    
  
  <x-dialog-modal>
    <x-slot name="title">
        Delete Account
    </x-slot>
    <x-slot name="content">
        Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
    </x-slot>
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
            Nevermind
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
            Delete Account
        </x-jet-danger-button>
    </x-slot>
  </x-dialog-modal>

</div>

