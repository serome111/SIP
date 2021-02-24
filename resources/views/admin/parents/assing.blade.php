@extends('layouts.dashdatatable')
@section('title','SIP | Cuidador')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario para asignar cuidadores</h1>
          <p>Aqui podras diligenciar si el niño tiene 1 o mas de un cuidador</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Form Components</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form method="POST" action="{{Route('cuidador.store')}}">
                  @csrf
                  @include('admin.parents._assingForm',['btntxt'=>'Asignar Cuidador'])
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h2>cuidadores de cada menor</h2>
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Nombre del menor</th>
                      <th>Registro sivil</th>
                      <th>Nombre del cuidador</th>
                      <th>Identificacion dle mayor</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users_parents as $uparent)
                      <tr>
                        <td>{{$uparent->user}}</td>
                        <td>{{$uparent->civilregis}}</td>
                        <td>{{$uparent->parent}}</td>
                        <td>{{$uparent->identificacion}}</td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection()