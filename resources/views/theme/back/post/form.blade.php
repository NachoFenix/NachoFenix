<div class="form-group row">
    <label for="titulo" class="col-sm-3 text-end control-label col-form-label requerido">Titulo</label>
    <div class="col-sm-5">
       <input id="titulo" class="form-control" value="{{old('titulo', $post->titulo ?? '')}}" type="text" name="nombre" maxlength="50" required> 
    </div>
</div>
<div class="form-group row">
    <label for="slug" class="col-sm-3 text-end control-label col-form-label requerido">Slug</label>
    <div class="col-sm-5">
       <input id="slug" class="form-control" value="{{old('slug', $post->slug ?? '')}}" type="text" name="slug" maxlength="50" required> 
    </div>
</div>
<div class="form-group row">
    <label for="categoria" class="col-sm-3 text-end control-label col-form-label requerido">Categoria</label>
    <div class="col-sm-5">
       <select name="categoria[]" id="categoria" class="select2" multiple="multiple" style="width: 100%" required>
       <option value="">Seleccione</option>
       @foreach ($categorias as $key => $value)
           <option value="{{$key}}">{{$value}}</option>
       @endforeach
    </select>
    </div>
</div>
<div class="form-group row">
    <label for="tag" class="col-sm-3 text-end control-label col-form-label">Tags</label>
    <div class="col-sm-5">
       <select name="tag[]" id="tag" class="tags" multiple="multiple" style="width: 100%" required>
       @foreach ($tags as $key => $value)
           <option value="{{$key}}">{{$value}}</option>
       @endforeach
    </select>
    </div>
</div>
<div class="form-group row">
    <label for="descripcion" class="col-sm-3 text-end control-label col-form-label requerido">Descripcion</label>
    <div class="col-sm-5">
        <textarea id="descripcion" class="form-control" rows="3" maxlength="255" value="{{old('descripcion', $post->descripcion ?? '')}}" type="text" name="descripcion" required></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="cuerpo" class="col-sm-3 text-end control-label col-form-label requerido">Cuerpo</label>
    <div class="col-sm-5">
       <div id="body" class="form-control" style="height: 200px">
        {{old('body', $post->body ?? '')}}
    </div>
    </div>
</div>
<div class="form-group row">
    <label for="imagen" class="col-sm-3 text-end control-label col-form-label requerido">Imagen</label>
    <div class="col-sm-5">
       <input id="imagen" class="form-control" data-initial-preview="{{"http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Imagen+Post"}}" type="file" name="imagen" accept="image/*" required> 
    </div>
</div>
