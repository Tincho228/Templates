<div class="bg-categoria-skyblue">
    <h1 class="text-center title-font text-light pt-5">NUESTRAS RUTINAS</h1>
    <p class="text-center text-light mb-5">Breve explicativo sobre esta seccion</p>
<div class="d-flex flex-wrap justify-content-evenly pb-5">
    @foreach($categorias as $categoria)
        <div class="mb-2 category-item">
                @if($categoria->image->url == 'placeholder')
                <img src='https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
                    class="card-img-top" alt="...">
                @else
                <!-- <img src="{{Storage::url($categoria->image->url)}}" class="card-img-top" alt="..."> -->
                <div class="category-image" style="background-image: url('assets/images/new-product.jpg')">
                
                </div>
                <!-- <img src="assets/images/new-product.jpg" class="card-img-top" alt="..."> -->
                <div class="category-body text-center text-light">
                    <p class="category-title">{{$categoria->name}}</p>
                    <p class="category-description">{{$categoria->description}}</p>
                    <a class="btn btn-sm btn-yellow category-button" href="">Ver más</a>
                </div>
                @endif

                <!-- <div class="card-body">
                    <h5 class="card-title">{{$categoria->name}}</h5>
                    <p class="card-text">{{$categoria->description}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div> -->
                
        </div>
        
    @endforeach
</div>
</div>
