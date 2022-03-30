<x-app-layout>

    <div class="card text-black mt-5">
        <div class="card-header bg-white text-black">
            <p class="h5">Contactanos</p>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre']) !!}
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la
                categoria']) !!}
                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('body', 'body') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => ' Escribi tu mensaje','rows'=>'4']) !!}
                @error('body')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Enviar formulario', ['class' => 'btn btn-sm btn-primary']) !!}

            {!! Form::close() !!}
        </div>
        <div class="card-footer"></div>
    </div>
</x-app-layout>