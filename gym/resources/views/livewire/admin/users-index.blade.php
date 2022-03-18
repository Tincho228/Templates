<div>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <input wire:model="search" class="form-control mr-2" type="text"
                placeholder="Ingrese el nombre del usuario"><i class="text-secondary fas fa-search"></i>
        </div>
        @if($users->count())
        <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
        @else
        <div class="card-body">
            <div class="alert alert-secondary">No hay posts</div>
        </div>
        @endif
    </div>

</div>
