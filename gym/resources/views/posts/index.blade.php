<x-app-layout>
@livewire('home.hero-section')

@livewire('home.new-product-section')
<div class="container">
<h1 class="text-center">Categorias</h1>

<div class="container d-flex flex-wrap justify-content-center ">

    @foreach ($categorias as $categoria)
    <a href="{{route('categorias.show', $categoria)}}">
    <div class="card m-3" style="width: 18rem;">
        <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$categoria->name}}</h5>
            <p class="card-text">{{$categoria->description}}</p>
            <h1>{{$categoria->price}}</h1>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div>
    </a>
    </div>
    @endforeach
</div>
    <h1 class="text-center">Posts</h1>

    <div class="container d-flex flex-wrap justify-content-center ">
        @foreach ($posts as $post)
        
        <div class="card m-3" style="width: 18rem;">    
                @if($post->image->url == 'placeholder') 
                    <img src='https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' class="card-img-top" alt="...">
                @else
                    <img src="{{Storage::url($post->image->url)}}" class="card-img-top" alt="...">
                @endif
                
            <div class="card-body">
                <h5 class="card-title">{{$post->name}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div>

        </div>
        @endforeach
    </div>
    <h1 class="text-center">Instructores</h1>

    <div class="container d-flex flex-wrap justify-content-center ">

        @foreach ($instructors as $instructor)

        <div class="card m-3" style="width: 18rem;">       
            <img src="{{Storage::url($post->image->url)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$instructor->name}}</h5>
                <p class="card-text">{{$instructor->description}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div>

        </div>
        @endforeach
    </div>
</div>
</x-app-layout>
