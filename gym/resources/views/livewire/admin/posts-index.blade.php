<div class="card">

    <div class="card-header d-flex align-items-center">
    
        <input wire:model="search" class="form-control mr-2" type="text" placeholder="Ingrese el nombre del post"><i class="text-secondary fas fa-search"></i>
    </div>
    @if($posts->count())
    <div class="card-body">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->body}}</td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                            @csrf    
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
    @else
    <div class="card-body">
        <div class="alert alert-secondary">No hay posts</div>
    </div>
    @endif
</div>
