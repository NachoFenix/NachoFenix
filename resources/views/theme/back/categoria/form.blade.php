<div class="form-group row">
    <label for="nombre" class="col-sm-3 text-end control-label col-form-label requerido">Nombre</label>
    <div class="col-sm-9">
       <input id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" type="text" name="nombre" maxlength="50" required> 
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-sm-3 text-end control-label col-form-label requerido">Slug</label>
    <div class="col-sm-9">
       <input id="slug" class="form-control" value="{{old('url', $data->slug ?? '')}}" type="text" name="slug" maxlength="50" required> 
    </div>
</div>