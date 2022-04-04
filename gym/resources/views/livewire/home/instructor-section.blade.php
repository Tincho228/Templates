<div class="container-fluid bg-skyblue-middle pt-5 pb-5">
    <h1 class="text-light text-center title-font">NUESTROS INSTRUCTORES</h1>
    <p class="text-light text-center mb-5">Breve descripcion de esta seccion</p>
    <div class="container">
    <div class="row">
        @foreach ($instructors as $instructor)
        <div class="col-sm-12 col-md-4 mb-4">
            <div class="sixteen-nine-img mb-3">
            @if($instructor->image->url == 'placeholder')
                <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Imagen de instructor">
            @else
                <img src="{{Storage::url($instructor->image->url)}}" alt="Imagen de instructor">
            @endif
            </div>
            <h3 class="text-light mb-3 text-center">{{$instructor->name}}</h3>
            <P class="text-light text-center" style="padding:0px 20px;">{{$instructor->description}}</P>
            <div class="d-flex justify-content-center">
            <a href="" class="btn btn-yellow">Ver más</a>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
{{-- style="width:200px; display:block;margin:auto; clip-path:circle()" --}}
<style>
    .sixteen-nine-img {
        width: 100%;
        overflow: hidden;
        margin: 0;
        padding-top: 56.25%;
        position: relative;
        clip-path: circle();
    }

    .sixteen-nine-img img {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        transform: translate(-50%, -50%);
    }
</style>
