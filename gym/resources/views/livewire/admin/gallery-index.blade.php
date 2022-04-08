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
    
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</div>

