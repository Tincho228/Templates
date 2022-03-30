<x-app-layout>

    <div class="card text-black mt-5">
        <div class="card-header bg-white text-black">
            <p class="display-3 pt-3">Contactanos</p>
            <p class="text-info" style="position:relative; top:-20px;left:5px;">No olvides compartir tu plan</p>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store']) !!}

            <div class="form-group mb-3">
                {!! Form::label('name', 'Nombre Completo') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre']) !!}
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'mail@example.com']) !!}
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('phone', 'Telefono') !!}
                {!! Form::number('phone', null, ['class' => 'form-control']) !!}
                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('message', 'Mensaje') !!}
                {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Escribi tu mensaje','rows'=>'4']) !!}
                @error('body')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="card-footer">
                {!! Form::submit('Enviar', ['class' => 'btn btn-sm btn-primary text-light']) !!}
                <a href="{{route('home.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
            </div>

            {!! Form::close() !!}   
        </div>
        <div class="card-footer"></div>
    </div>
</x-app-layout>