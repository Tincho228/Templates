<div class="container-fluid pt-5 bg-posts-skyblue">
    <h1 class="text-light text-center title-font">OPINIONES DE NUESTROS CLIENTES</h1>
    <p class="text-light text-center mb-5">Breve descripcion de esta seccion</p>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
                @if($post->image->url == 'placeholder')
                <img src='https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
                    class="rounded-circle" alt="...">
                @else
                <img src="{{Storage::url($post->image->url)}}" class="rounded-circle" width="32px" height="32px" alt="...">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{$post->name}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                @php
                $user = \App\Http\Livewire\Home\PostSection::getUser($post->id);
                @endphp

                {{$user[0]->name}}
                
            </div>
        </div>
        @endforeach
    </div>
</div>
