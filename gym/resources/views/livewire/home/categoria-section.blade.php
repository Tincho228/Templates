<div class="container-fluid bg-categoria-skyblue" style="padding:0px">
    <h1 class="text-center title-font text-light pt-5">NUESTRAS RUTINAS</h1>
    <p class="text-center text-light mb-5">Breve explicativo sobre esta seccion</p>
    <div class="container" style="padding:0px">
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
                <a class="btn btn-sm text-warning category-button" href="{{ route('categoria.show',$categoria)}}">Ver más</a>
            </div>

            {{-- <div class="item__container">
                <img class="item__img" src="{{Storage::url($photo->url)}}" alt="Photo"
                    id="picture{{$photo->id}}">
                <div class="item__overlay">
                    <p><i class="fas fa-trash-alt text-white icon-delete"  ></i> Borrar imagen?</p>
                    <button type="button" class="btn btn-outline-light" wire:click="deleteConfirmation({{$photo->id}})">Borrar</button>
                </div>
            </div> --}}
            {{-- <style>
                .item__container{
                    position: relative;
                    margin:5px;
                }
                .item__img {
                    display: block;
                    width: 100%;
                }
                .item__overlay {
                    position: absolute;
                    top:0px;
                    left:0;
                    height: 100%;
                    width: 100%;
                    background:rgba(0,0,0,0.6);
                    color: whitesmoke;
                    display:flex;
                    flex-direction: column;
                    align-items:center;
                    justify-content: center; 
                    opacity: 0;
                    transition: 0.5s;
                    
                }
                .item__overlay:hover {
                    opacity: 1;
                    transition:0.5;
                }
            </style> --}}
        </div>
        @endforeach
    </div>
    </div>
</div>
<style>
    .category-button {
        border:1px solid whitesmoke;
        border-radius:20px;
    }
    .category-button:hover {
        background-color:whitesmoke;
        border:1px solid whitesmoke;
        padding:10px 13px;
        color:black !important;
        font-weight:bold;
        transition: 0.5s;
    }
</style>
