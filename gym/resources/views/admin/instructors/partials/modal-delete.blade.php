<!-- Modal -->
<div class="modal fade" id="deleteInstructor{{$instructor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar categoria</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que desea eliminar al instructor {{$instructor->name}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>

                <form id="form-id" action="{{route('admin.instructors.destroy', $instructor)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm mr-2">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>