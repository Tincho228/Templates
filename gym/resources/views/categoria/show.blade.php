<x-app-layout>
    <div class="container-fluid" style="background-image:url('{{URL::asset('assets/images/call-to-action.jpg')}}'); background-repeat:no-repeat; background-size:cover;background-position:center;">
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">

                    <div class="col-sm-12 col-md-6">
                        <div class="img-wrapper mb-2 mt-2">
                            @isset($categoria->image)
                            @if($categoria->image->url == 'placeholder')
                            <img id="picture" class="img-fluid"
                                src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                            @else
                            <img id="picture" src="{{Storage::url($categoria->image->url)}}" class="img-fluid"
                                alt="Imagen previa">
                            @endif
                            @else
                            <img id="picture" class="img-fluid"
                                src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                            @endisset
                        </div>
                        <hr>
                        <h3>Galeria</h3>

                        <div class="d-flex">
                            @foreach ($gallery as $photo)
                            <div class="item-detail"><img class="img-fluid" src="{{Storage::url($photo->url)}}"
                                    alt="Photo" onclick="cambiarImagen(this)"></div>
                            @endforeach
                            <div class="item-detail">
                            @isset($categoria->image)
                                @if($categoria->image->url == 'placeholder')
                                    <img class="img-fluid"
                                        src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        alt="Photo" onclick="cambiarImagen(this)">
                                @else
                                    <img src="{{Storage::url($categoria->image->url)}}" class="img-fluid"
                                        alt="Imagen previa" onclick="cambiarImagen(this)">
                                @endif
                            @else
                                <img class="img-fluid"
                                        src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        alt="Photo" onclick="cambiarImagen(this)">
                            @endisset
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h1 class="title-font">{{$categoria->name}}</h1>
                        <hr>
                        <p class="h4">Descripcion:</p>
                        <p>{{$categoria->description}}</p>
                        <hr>
                        <p class="h4">Precio:</p>
                        <p class="h1">${{$categoria->price}}</p>
                        <hr>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-white" href="{{ route('home.index') }}">Volver</a>    
                            <a class="btn btn-yellow" href="">Solicitar</a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
<div>

</div>
<script>
    function cambiarImagen(image){
        document.getElementById('picture').setAttribute('src', image.src);
    }
    
</script>
<style>
    .item-detail {
        width:22%;
        margin:5px;
        height:calc(width)
    }
    .img-fluid {
        height:56.25% !important;
    }
    .img-wrapper img {
        border-radius: 5px;
    }
    .card {
        background-color:#ffffff57;
        color:whitesmoke;
    }
    .btn-white {
        color:whitesmoke;
        border-radius: 25px;
        padding:5px 20px;
        border:1px solid whitesmoke;
        margin-right:10px;
    }
    .btn-white:hover {
        background-color:whitesmoke;
        color:black;
    }
    .btn-yellow:hover {
        background-color:yellow;
        color:black !important;
    }
    
</style>

</x-app-layout>