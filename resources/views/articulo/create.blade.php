@extends('layouts.plantillabase');

@section('contenido')

<h2>Crear Registros</h2>
<form action="/articulo" method="POST">
@csrf
    <div class="mb-3">
        <label for="" class='form-label'>Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class='form-label'>Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>

    <div class="mb-3">
        <label for="" class='form-label'>Cantidad</label>
        <input id="cantidad" name="cantidad" type="text" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class='form-label'>Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" step="any" value="0.00" tabindex="4">
    </div>

    <a href="/articulo" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
</form>
@endsection