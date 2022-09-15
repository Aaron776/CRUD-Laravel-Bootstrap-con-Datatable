@extends('layouts.plantillabase')
@section('contenido')
    <form method="POST" action="/articulos">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descricpcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio" value='0.00' step='any' id="precio" aria-describedby="helpId" placeholder="">
        </div>
        <a href="/articulos" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection