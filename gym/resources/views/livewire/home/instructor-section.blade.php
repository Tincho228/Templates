<div class="container-fluid bg-skyblue-middle pt-5 pb-5">
    <h1 class="text-light text-center title-font">NUESTROS INSTRUCTORES</h1>
    <p class="text-light text-center mb-5">Breve descripcion de esta seccion</p>
    <div class="row">
        @foreach ($instructors as $instructor)
        <div class="col-sm-12 col-md-4 mb-4">
            @if($instructor->image->url == 'placeholder')
                <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle mb-3 img-fluid" alt="Imagen de instructor" style="width:200px; display:block;margin:auto; clip-path:circle()">
            @else
                <img src="{{Storage::url($instructor->image->url)}}" class="rounded-circle mb-3 img-fluid" alt="Imagen de instructor" style="width:200px; display:block;margin:auto; clip-path:circle()">
            @endif
            
            <h3 class="text-light mb-3 text-center">{{$instructor->name}}</h3>
            <P class="text-light text-center" style="padding:0px 20px;">{{$instructor->description}}</P>
        </div>
        @endforeach
    </div>
</div>
