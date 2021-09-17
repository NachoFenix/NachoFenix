<div class="form-group">
    <label for="nombre" class="col-sm-3 text-right control-label col-form-label requerido">Nombre</label>
    <div class="col-sm-5">
       <input id="nombre" class="form-control" value="{{old("nombre")}}" type="text" name="nombre" maxlength="50" required> 
    </div>
</div>
<div class="form-group">
    <label for="url" class="col-sm-3 text-right control-label col-form-label requerido">Url</label>
    <div class="col-sm-5">
       <input id="url" class="form-control" value="{{old("url")}}" type="text" name="url" maxlength="100" required> 
    </div>
</div>
<div class="form-group">
    <label for="icono" class="col-sm-3 text-right control-label col-form-label">Icono</label>
    <div class="col-sm-5">
       <input id="icono" class="form-control" value="{{old("icono")}}" type="text" name="icono" maxlength="50"> 
    </div>
    <div class="col-sm-1">
        <span id="mostrar-icono" class="{{old("icono")}}"></span>
    </div>
</div>