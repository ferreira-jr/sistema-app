@extends('adminlte::page')

@section('title', 'Sistema - Ocorrências')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Lista de Ocorrências</h1>
        </div>
        <div class="col-sm-6">
            <div class="breadcrumb float-sm-right">
                <a class="btn btn-primary" href="{{route('ocorrencia.create')}}"><i class="fas fa-plus"></i> Nova Ocorrência</a>
            </div>
        </div>
    </div>
@stop

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ocorrências</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Pesquisar">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th style="width: 30% ">Ocorrência</th>
                <th style="width: 30% ">Ofício</th>
                <th style="width: 30% " >Perito</th>
                <th >Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ocorrencia ?? '' as $item)
                <tr>
                    <td>{{$item->ocorrencia}}</td>
                    <td>{{$item->oficio}}</td>
                    <td><span class="tag tag-success">{{$item->perito}}</span></td>
                    <td><a href="" class="btn btn-info   "><i class="fas fa-edit"></i></a></td>
                    <td><a href="{{route('ocorrencia.show', $item->id)}}" class="btn btn-warning  "><i class="fas fa-eye"></i></i></a></td>
                    <td><a class="btn btn-danger  "><i class="fas fa-trash-alt"></i></i></a></td>
                  </tr>
                @endforeach             
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
