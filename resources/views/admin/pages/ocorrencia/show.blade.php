@extends('adminlte::page')

@section('title', 'Sistema - Ocorrências')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ocorrência - {{$ocorrencia->ocorrencia}}</h1>
        </div>
        <div class="col-sm-6">
            <div class="breadcrumb float-sm-right">
                
            </div>
        </div>
    </div>
@stop

@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Detalhes da Ocorrência</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <br>
     <div class="card-body p-0">
        <ul>
          <li><strong>Ocorrêcia :</strong> {{$ocorrencia->ocorrencia}}</li>
          <li><strong>Ofício :</strong> {{$ocorrencia->oficio}}</li>
          <li><strong>Perito :</strong> {{$ocorrencia->perito}}</li>
          <li><strong>Entrada :</strong> {{$ocorrencia->entrada}}</li>
        </ul>
    </div>          
  </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
