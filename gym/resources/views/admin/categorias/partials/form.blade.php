<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria',
    'readonly']) !!}
    @error('slug')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripcion de la
    categoria', 'rows'=>'4']) !!}
    @error('description')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('price', 'Precio') !!}
    {!! Form::number('price',null, ['class' => 'form-control']) !!}
    @error('price')
    <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<!-- Image management -->

<div class="row mb-3">
    <div class="col">
        <div class="img-wrapper">

                @isset($categoria->image) 
                    @if($categoria->image->url == 'placeholder')
                        <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    @else
                    <img id="picture" src="{{Storage::url($categoria->image->url)}}" class="img-fluid" alt="Imagen previa">
                    @endif
                @else
                    <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                @endisset
            
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file','Imagen') !!}
            {!! Form::file('file',['class'=>'form-control-file mb-3','accept'=>'image/*']) !!}
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius possimus obcaecati delectus
                exercitationem, accusamus eaque!</div>
        </div>
    </div>
</div>