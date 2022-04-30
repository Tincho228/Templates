<!-- Modal -->
<div class="modal fade" id="deleteUser{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            @if (Auth::user()->id === $user->id)
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle text-orange"></i> Error!!!</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                     No puede eliminarse a si mismo
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Entendido</button>    
                </div>
            @else
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Eliminar Usuario</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que desea eliminar el usuario {{$user->name}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>

                <form id="form-id" action="{{route('admin.users.destroy', $user)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm mr-2">Eliminar</button>
                </form>
            </div>
            @endif
            
        </div>
    </div>
</div>