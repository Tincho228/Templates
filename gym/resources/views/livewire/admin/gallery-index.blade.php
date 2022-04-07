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
                
            </div>
            <a class="btn btn-sm btn-success mt-3" wire:click="showform(true)"><i class="fas fa-plus text-white"></i> Agregar foto</a>
            
            @else
            <div class="alert alert-secondary">
                No hay fotos en esta galleria.
            </div>
            <div class="btn btn-sm btn-success">Agregar foto</div>

            @endif

            @if ($form)
            
            <div class="row mb-3 mt-3">
                <div class="col-sm-12 col-md-6">
                    <div class="img-wrapper">
                            <img id="picture" class="img-fluid" src="{{URL::asset('assets/images/placeholder.jpg')}}" alt="Photo image">            
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mt-3">
                    <div class="form-group">
                        <form wire:submit.prevent="store({{$categoria}})">
                            <input type="file" wire:model="picture">
                         
                            @error('photo')
                             <span class="text-danger">{{ $message }}</span> 
                             @enderror
                         
                            <button type="submit">Save Photo</button>
                        </form>
                        
                        <div><span class="text-danger">Importante! </span>Las imagenes deben estar libre de licencia de copyright</div>
                    </div>
                </div>
            </div>
            
            
            @endif

        </div>
    </div>
</div>

