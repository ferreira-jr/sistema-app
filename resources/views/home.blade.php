@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="col-sm-6">
        <h1>Dashboard</h1>
    </div>    

    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-info">
                <span class="info-box-icon"><i class="fas fa-clipboard-list"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Ocorrências Totais</span>
                  <span class="info-box-number">{{count($ocorrencia)}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-success">
                <span class="info-box-icon"><i class="far fa-check-circle"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Ocorrências Abertas</span>
                  <span class="info-box-number">{{count($abertas)}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-warning">
                <span class="info-box-icon"><i class="fas fa-spinner"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Ocorrências Em Andamento</span>
                  <span class="info-box-number">{{count($andamento)}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-danger">
                <span class="info-box-icon"><i class="far fa-times-circle"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Ocorrências Finalizadas</span>
                  <span class="info-box-number">{{count($finalizado)}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Últimas Ocorrências</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width: 40vh" >Ocorrência</th>
              <th>Ofício</th>
              <th>Perito</th>
              <th>Entrada</th>
              <th>Dias</th>
              <th style="width: 20px">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ocorrencia ?? '' as $item)
            <tr>
              <td>{{$item->ocorrencia}}</td>
              <td>{{$item->oficio}}</td>
              <td>{{$item->perito}}</td>
              <td>{{$item->entrada}}</td>
              <td>{{number_format($item->dias, 0)}}</td>
              @if ($item->status == "Aberto")
                <td><span class="badge bg-success">{{$item->status}}</span></td>
              @elseif($item->status == "Andamento")
                <td><span class="badge bg-warning">{{$item->status}}</span></td>
              @else
                <td><span class="badge bg-danger">{{$item->status}}</span></td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
</div>

@endsection
