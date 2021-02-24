@extends('layouts.dashboard')
@section('title','SIP | Cuidador')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario para Editar cuidadores</h1>
          <p>Aqui podras diligenciar la informacion a modificar</p>
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
                <form method="POST" action="{{Route('cuidador.update',$parent->id)}}">
                  @csrf @method('PATCH')
                  @include('admin.parents._form',['btntxt'=>'Editar Cuidador'])
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    {{-- <script src="{{ mix('js/datepicker.js') }}"></script> --}}
@endsection()