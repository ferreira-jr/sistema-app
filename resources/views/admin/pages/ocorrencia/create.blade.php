@extends('adminlte::page')

@section('title', 'Sistema - Ocorrências')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
            <div class="breadcrumb float-sm-right">
                
            </div>
        </div>
    </div>
@stop

@section('content')
  <div class="card card-primary" >
    <div class="card-header" >
      <h3 class="card-title"><Strong>Nova Ocorrência</Strong></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('ocorrencia.store')}}">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label >Ocorrência</label>
          <input type="text" class="form-control @error('ocorrencia') is-invalid @enderror" name="ocorrencia" id="ocorrencia" placeholder="Ocorrência" value="{{ old('ocorrencia') }}" >
          @error('ocorrencia')
            <div class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label >Ofício</label>
          <input type="text" class="form-control @error('oficio') is-invalid @enderror" name="oficio" id="oficio" placeholder="Ofício">
          @error('oficio')
            <div class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label >Perito</label>
          <select class="form-control" @error('perito') is-invalid @enderror" name="perito" id="perito" value="teste  ">
            @error('perito')
              <div class="error invalid-feedback">{{ $message }}</div>
            @enderror
            <option value="" selected disabled hidden>Selecionar Perito...</option>
            @foreach ($user ?? '' as $item)
              <option>{{$item->name}}</option>
            @endforeach
          </select>
          <!--
          <input type="text" class="form-control @error('perito') is-invalid @enderror" name="perito" id="perito" placeholder="Perito">
          @error('perito')
            <div class="error invalid-feedback">{{ $message }}</div>
          @enderror
          -->
        </div>
        <div class="form-group">
          <label >Entrada</label>
          <input type="date" class="form-control @error('entrada') is-invalid @enderror" name="entrada" id="entrada" placeholder="Entrada">
          @error('entrada')
          <div class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
