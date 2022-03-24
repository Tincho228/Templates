<div class="d-flex flex-wrap">
    @foreach($posts as $post)
    <div class="card m-3" style="width: 18rem;">
                @if($post->image->url == 'placeholder')
                <img src='https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
                    class="card-img-top" alt="...">
                @else
                <img src="{{Storage::url($post->image->url)}}" class="card-img-top" alt="...">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{$post->name}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    @endforeach
</div>