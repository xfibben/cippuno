@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h5 class="card-title text-center">NUEVO TRAMITE</h5>


<div>"" 
  
</div>

<form action="{{route('tramites.store')}}" method="POST"  >
  @csrf
  <label for="">Tipo de tramite</label>
  <input id="tipo_tramite_id" type="number" name="tipo_tramite_id" placeholder="tipo de tramite" ><br>
  <script>
    var entry = document.getElementById('tipo_tramite_id').value;
    if(entry==2){
      alert('Tipo de')
    }
  </script>
  <label for="">Id colegiado</label>
  <input id="tipo_tramite_id" type="number"name="colegiado_id" placeholder="Id de colegiado"><br>
  <label for="">Asunto</label>
  <input id="asunto" class="form-label" name="asunto" placeholder="asunto"><br>
  <?php $fcha = date("d-m-Y");?>
  <label for="">Fecha Emision</label>
  <input id="fecha_emi" type="date" name="fecha_emi" placeholder="Fecha Emision" value="<?php echo $fcha;?>"><br>
  <label for="">Fecha Recepcion</label>
  <input id="fecha_recep" type="date" name="fecha_recep" placeholder="Fecha Recepcion" value="<?php echo $fcha;?>"><br>
  <label for="formFileMultiple" class="form-label">Adjuntar Archivos Necesarios</label>
  <input class="form-control" type="file" name="archivo" id="formFileMultiple" multiple>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




