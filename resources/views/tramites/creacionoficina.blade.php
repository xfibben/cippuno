@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h5 class="card-title text-center">CREAR OFICINAS</h5>


<div>
  <form >
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre de oficina</label>
      <input  class="form-control" >
      
    </div>
    
    
    <button type="submit" class="btn btn-primary">CREAR</button>
  </form>
  
</div>

@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




