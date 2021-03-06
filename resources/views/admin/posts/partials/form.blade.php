<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'ingrese el nombre del post']) !!}
    @error('name')
        <small  class="text-danger">{{$message}}</small >
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'ingrese el slug del post','readonly']) !!}
    @error('slug')
        <small  class="text-danger">{{$message}}</small >
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories,null, ['class'=>'form-control']) !!}
    @error('category_id')
        <small  class="text-danger">{{$message}}</small >
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach 

    @error('tags')
    <br>
        <small  class="text-danger">{{$message}}</small >
    @enderror                  
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="mr-2">
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>  
    
    @error('status')
    <br>
        <small  class="text-danger">{{$message}}</small >
    @enderror                 
</div>
<div class="row mb-3">
    <div class="col">
        @isset ($post->image)
        <div class="image-wrapper"><img id="picture"  src="{{Storage::url($post->image->url)}}" alt=""></div> 
        @else
        <div class="image-wrapper"><img id="picture"  src="https://cdn.pixabay.com/photo/2020/12/18/16/56/laptop-5842509_960_720.jpg" alt=""></div>  
        @endisset
        
    </div>
    <div class="col">
       <div class="form-group">
           {!! Form::label('file', 'imagen que se mostrar?? en el post') !!}
           {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
       </div>
       @error('file')
        <small  class="text-danger">{{$message}}</small >
    @enderror
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat perferendis repellat numquam esse error aliquam perspiciatis non enim soluta cum odit aspernatur hic, magni rem, asperiores blanditiis? Aspernatur, nam harum!</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}
    @error('extract')
        <small  class="text-danger">{{$message}}</small >
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    @error('body')
        <small  class="text-danger">{{$message}}</small >
    @enderror
</div>