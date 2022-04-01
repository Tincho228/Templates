<div class="container-fluid pb-5"
        style="background-image:url('assets/images/call-to-action.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
        <div class="row justify-content-center">

            <div class="col-sm-12 col-lg-6">


                <div class="card text-black mt-5" style="box-shadow:0px 6px 20px #000008; ">
                    <div class="card-header bg-black">
                        <p class="h1 pt-3 title-font text-white">Contactanos</p>
                        <p class="text-white" style="position:relative; top:-10px;left:5px;">No olvides compartir tu
                            plan
                        </p>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'contacto.store']) !!}

                        <div class="form-group mb-3">
                            {!! Form::label('name', 'Nombre Completo') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu nombre']) !!}
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' =>
                            'mail@example.com']) !!}
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-5">
                            {!! Form::label('phone', 'Telefono') !!}
                            {!! Form::number('phone', null, ['class' => 'form-control']) !!}
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <hr class="bg-secondary">
                        <p>Marca las categorias que te interesan </p>
                        <div class="mb-3">

                            @foreach($categorias as $categoria)
                            <div class="form-check form-check-inline">
                                <label>
                                    {!! Form::checkbox('categorias[]',$categoria->name,null,['class'=>'mr-2
                                    form-check-input']) !!}
                                    {{$categoria->name}}
                                </label>
                            </div>
                            @endforeach

                            @error('categorias')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>
                        <hr class="bg-secondary">
                        <div class="form-group mb-3">
                            {!! Form::label('body', 'Mensaje') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Escribi tu mensaje.','rows'=>'4']) !!}
                            @error('body')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            {!! Form::submit('Enviar', ['class' => 'btn btn-sm btn-primary text-light']) !!}
                            <a style="margin-left:5px" href="{{route('home.index')}}"
                                class="btn btn-secondary btn-sm">Cancelar</a>
                        </div>

                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <img src="assets/logos/logo.png" alt="Logo" width="100px">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="title-font text-center">Gracias por tu Mensaje!!!</h2>
                    <p class="text-center">{{session('info')}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    
    @if (session('info'))
        
    <script>
        $(document).ready(function () {
            $('#exampleModal').modal('show')
        });
    </script>

    @endif