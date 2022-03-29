<div class="container-fluid pt-5 pb-5 bg-posts-skyblue">
    <h1 class="text-light text-center title-font">OPINIONES DE NUESTROS CLIENTES</h1>
    <p class="text-light text-center mb-5">Breve descripcion de esta seccion</p>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card mb-2 bg-posts-gray color-posts" style="box-shadow: 0px 5px 20px black; height:90%;">
                <div class="p-2 d-flex justify-content-between">
                    <div>
                        @php
                        $user = \App\Http\Livewire\Home\PostSection::getUser($post->id);
                        @endphp
                        @if($user[0]->profile_photo_url)
                        <img src="{{$user[0]->profile_photo_url}}" class="rounded-circle" width="32px" height="32px" alt="">
                        @endif
                        {{$user[0]->name}}
                    </div>
                    <div>
                        <i class="fas fa-star color-skyblue-light"></i>
                        <i class="fas fa-star color-skyblue-light"></i>
                        <i class="fas fa-star color-skyblue-light" style="margin-right:10px;"></i>
                        <i class="fas fa-comment color-skyblue-light"></i>
                    </div>
                </div>
                <hr style="border:1px solid #9dc3e6; margin:0">
                <div class="">
                    <p class="p-2 card-text">"{{$post->name}}"</p>
                </div>
                <hr style="border:1px solid #9dc3e6; margin:0">
                <p class="text-end" style="padding-right:10px;">{{$post->created_at->format('d/m/Y')}}</p>
                
            </div>
        </div>
        @endforeach
    </div>
</div>
