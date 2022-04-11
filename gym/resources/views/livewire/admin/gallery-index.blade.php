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
                
            </div>
            @if (session()->has('info'))
                <div class="alert alert-success">{{session('message')}}</div>
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
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storePhoto">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" wire:model="name">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="content">Contenido</label>
                            <input type="text" class="form-control" id="content" wire:model="content">
                        </div>
                        @error('content')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="photo">Elegir foto</label>
                            <input type="file" class="form-control-file" id="photo" wire:model="photo">
                        </div>
                        @error('photo')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Save changes</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
