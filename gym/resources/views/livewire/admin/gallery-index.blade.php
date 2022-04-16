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
                <div class="item-detail"
                    style="overflow:hidden; position:relative; display:flex; justify-content:center; align-items:center">
                    <img class="img-fluid" style="position:absolute;z-index:1 "
                        src="{{URL::asset('assets/images/placeholder.jpg')}}" alt="Photo" id="picture{{$photo->id}}">
                    <!-- Button trigger modal -->
                    <button type="button" style="z-index:2; position:relative;" class="btn btn-sm btn-dark"
                        data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus text-white"></i> Agregar
                    </button>
                </div>
                {{-- Nuevo ratio --}}
                <div class="ratio">
                    <img src="" alt="">
                </div>
            </div>
            @if (session()->has('info'))
                <div class="alert alert-success">{{session('info')}}</div>
            @endif
            @else
            <div class="alert alert-secondary">
                No hay fotos en esta galleria.
            </div>
            <div class="item-detail"
                style="overflow:hidden; position:relative; display:flex; justify-content:center; align-items:center">
                <img class="img-fluid" style="position:absolute;z-index:1 "
                    src="{{URL::asset('assets/images/placeholder.jpg')}}" alt="Photo" id="picture{{$photo->id}}">
                <!-- Button trigger modal -->
                <button type="button" style="z-index:2; position:relative;" class="btn btn-sm btn-dark"
                    data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus text-white"></i> Agregar
                </button>
            </div>

            @endif
            
        </div>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Subir foto a la galeria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storePhoto">
                        <!-- Loading placeholder -->
                        <div wire:loading wire:target="image">
                            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>   
                        </div>
                        <!-- Image preview -->
                        @if ($image)
                            <img class="img-fluid mb-4" src="{{$image->temporaryUrl()}}" alt="">
                        @endif
                        
                        <div class="form-group">
                            <label for="image">Elegir una foto</label>
                            <input type="file" class="form-control-file" id="image" wire:model="image">
                        </div>
                        @error('image')
                            <div class="text-danger mb-4">{{$message}}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Save changes</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        window.addEventListener('closeModal', event => {
            $("#exampleModal").modal('hide');                
        })
    </script>


    <style>
        
    .lds-roller {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-roller div {
        animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        transform-origin: 40px 40px;
    }

    .lds-roller div:after {
        content: " ";
        display: block;
        position: absolute;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #c1c1c1;
        margin: -4px 0 0 -4px;
    }

    .lds-roller div:nth-child(1) {
        animation-delay: -0.036s;
    }

    .lds-roller div:nth-child(1):after {
        top: 63px;
        left: 63px;
    }

    .lds-roller div:nth-child(2) {
        animation-delay: -0.072s;
    }

    .lds-roller div:nth-child(2):after {
        top: 68px;
        left: 56px;
    }

    .lds-roller div:nth-child(3) {
        animation-delay: -0.108s;
    }

    .lds-roller div:nth-child(3):after {
        top: 71px;
        left: 48px;
    }

    .lds-roller div:nth-child(4) {
        animation-delay: -0.144s;
    }

    .lds-roller div:nth-child(4):after {
        top: 72px;
        left: 40px;
    }

    .lds-roller div:nth-child(5) {
        animation-delay: -0.18s;
    }

    .lds-roller div:nth-child(5):after {
        top: 71px;
        left: 32px;
    }

    .lds-roller div:nth-child(6) {
        animation-delay: -0.216s;
    }

    .lds-roller div:nth-child(6):after {
        top: 68px;
        left: 24px;
    }

    .lds-roller div:nth-child(7) {
        animation-delay: -0.252s;
    }

    .lds-roller div:nth-child(7):after {
        top: 63px;
        left: 17px;
    }

    .lds-roller div:nth-child(8) {
        animation-delay: -0.288s;
    }

    .lds-roller div:nth-child(8):after {
        top: 56px;
        left: 12px;
    }

    @keyframes lds-roller {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    </style>
    </div>
