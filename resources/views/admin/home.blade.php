@extends('layouts.master')

@section('content')

<div class="container">
   
 
   {{--  <center>
   <div class="form-group">
      <img src="images/dashboard.png" style="height:300px; width:400px">
    </div>
   </center>  --}}

  <div class="row mt-3">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-center">
                <h3><i class="nav-icon fas fa-list red"></i></h3>

                <p> Categorias</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('category') }}" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner text-center">
                <h3><i class="nav-icon fas fa-list red"></i></h3>

                <p> Condicon</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('category') }}" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner text-center">
                <h3><i class="nav-icon fas fa-users red"></i></h3>

                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('users') }}" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner text-center">
                <h3><i class="nav-icon fas fa-image"></i></h3>

                <p>Mensajes</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('mostrarmensajeadmin') }}" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner text-center">
                <h3><i class="nav-icon fas fa-car red"></i></h3>

                <p>Predio</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('predio') }}" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
     
     </div>
   
</div>

@endsection
