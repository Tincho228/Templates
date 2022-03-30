<div class="container-fluid bg-categoria-skyblue">
    <h1 class="text-center title-font text-light pt-5">NUESTRAS RUTINAS</h1>
    <p class="text-center text-light mb-5">Breve explicativo sobre esta seccion</p>
    <div class="d-flex flex-wrap justify-content-evenly pb-5">
        @foreach($categorias as $categoria)
        <div class="mb-2 category-item">
            @if($categoria->image->url == 'placeholder')
            <div class="category-image"
                style="background-image: url('https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
            </div>
            @else
            <div class="category-image" style="background-image: url('{{Storage::url($categoria->image->url)}}')"></div>
            @endif

            <div class="category-body text-center text-light">
                <p class="category-title">{{$categoria->name}}</p>
                <p class="category-description">{{$categoria->description}}</p>
                <a class="btn btn-sm bg-transparent text-warning category-button"
                    style="border:1px solid whitesmoke; border-radius:20px;" href="">Ver más</a>
            </div>

        </div>
        @endforeach
    </div>
</div>
