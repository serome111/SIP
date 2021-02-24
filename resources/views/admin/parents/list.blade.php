@extends('layouts.dashdatatable')
@section('title','SIP | Cuidador')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Lista de cuidadores en el sistema</h1>
          <p>Aqui podras filtrar y visualizar la informacion de los cuidadores</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Nombre cuidador</th>
                      <th>cedula</th>
                      <th>correo</th>
                      <th>telefono</th>
                      <th>Fijo</th>
                      <th>Editar</th>

                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($parents as $parent)
                  		<tr>
	                      <td>{{$parent->name." ".$parent->lastname}}</td>
	                      <td>{{$parent->cardid}}</td>
	                      <td>{{$parent->email}}</td>
	                      <td>{{$parent->phone}}</td>
	                      <td>{{$parent->fixedphone}}</td>
	                      <td>
	                      <a class="badge rounded-pill btn btn-warning text-dark" href="{{route('cuidador.edit', $parent )}}">Editar Cuidador</a>
	                      </td>
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