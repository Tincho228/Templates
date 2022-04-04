<div class="container-fluid pt-5 pb-5 bg-posts-skyblue" style="padding:0px">
    <h1 class="text-light text-center title-font">OPINIONES DE NUESTROS CLIENTES</h1>
    <p class="text-light text-center mb-5">Breve descripcion de esta seccion</p>
    <div class="">
        <div class="">
            <div class="owl-carousel owl-theme">
            @foreach($posts as $post)  
                <div class="card mb-2 bg-posts-gray color-posts" style="box-shadow:0px 5px 5px 0px #0000005e;">
                    <div class="p-2 d-flex justify-content-between">
                        <div>
                            @php
                            $user = \App\Http\Livewire\Home\PostSection::getUser($post->user_id);
                            $categoria = \App\Http\Livewire\Home\PostSection::getCategoria($post->categoria_id);
                            @endphp
                            @if($user[0]->profile_photo_url)
                            <img src="{{$user[0]->profile_photo_url}}" class="profile-image" width="32px" height="32px"
                                alt="Image">
                            @endif
                            
                            
                        </div>
                        <span style="font-weight: bold">{{$user[0]->name}}</span>
                        <div>
                            <i class="fas fa-star color-skyblue-light"></i>
                            <i class="fas fa-star color-skyblue-light"></i>
                            <i class="fas fa-star color-skyblue-light" style="margin-right:10px;"></i>
                            <i class="fas fa-comment color-skyblue-light"></i>
                        </div>
                    </div>
                    <p style="padding-left:10px; font-style:italic">{{$categoria[0]->name}}</p>
                    <hr style="border:1px solid #9dc3e6; margin:0">
                    <div class="">
                        <p class="p-2 card-text">"{{$post->name}}"</p>
                    </div>
                    <hr style="border:1px solid #9dc3e6; margin:0">
                    <p class="text-end" style="padding-right:10px;">{{$post->created_at->format('d/m/Y')}}</p>

                </div>
            
            @endforeach
            </div>
            
            <!-- Jquery links -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script>
                $(document).ready(function () {
                    var owl = $('.owl-carousel').owlCarousel({
                        autoHeight:true,
                        center:true,
                        loop: true,
                        margin: 10,
                        responsiveClass: true,
                        responsive: {
                            0: {
                                items: 1.2,
                                nav: true
                            },
                            480: {
                                items: 1.9,
                                nav: false
                            },
                            780: {
                                items: 3,
                                nav: false
                            },
                            1000: {
                                items: 4,
                                nav: true,
                                loop: true
                            }
                        }
                    })
                    owl.on('translated.owl.carousel', function (event) {

                        var now_class = $('.owl-carousel').find('.owl-item.active img').attr('class');

                        $('.profile-image').attr('class', now_class);
                    })
                });
            </script>
            <style>
                .profile-image {
                    border-radius: 50% !important;
                }
            </style>
        </div>
    </div>
    
</div>
