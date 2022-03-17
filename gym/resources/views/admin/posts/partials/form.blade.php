<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
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
    {!! Form::label('body', 'body') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un body para el post',
    'rows'=>'4']) !!}
    @error('body')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('categoria_id', 'categoria') !!}
    {!! Form::select('categoria_id', $categorias,null, ['class' => 'form-control']) !!}
    @error('body')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="row mb-3">
    <div class="col">
        <div class="img-wrapper">

                @isset($post->image) 
                    @if($post->image->url == 'placeholder')
                        <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    @else
                    <img id="picture" src="{{Storage::url($post->image->url)}}" class="img-fluid" alt="...">
                    @endif
                @else
                    <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
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
