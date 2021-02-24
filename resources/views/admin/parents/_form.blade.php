<div class="row">
  <div class="form-group mb-3 col-sm-4">
    <label for="exampleInputEmail1">Nombre</label>
    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" aria-describedby="nameHelp" placeholder="Escribe el nombre del cuidador" value="{{ old('name',$parent->name) }}">
    @error('name')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  <div class="form-group mb-3 col-sm-4">
    <label for="lastname">Apellidos</label>
    <input class="form-control @error('lastname') is-invalid @enderror" id="lastname" type="text" aria-describedby="lastname" name="lastname" placeholder="Escribe el nombre del cuidador" value="{{ old('lastname',$parent->lastname) }}">
    @error('lastname')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  <div class="form-group mb-3 col-sm-4">
    <label for="email">Correo electronico</label>
    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" aria-describedby="emailHelp" name="email" placeholder="Escribe el nombre del cuidador" value="{{ old('email',$parent->email) }}">
    @error('email')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  <div class="form-group mb-3 col-sm-4">
    <label for="phone">Telefono</label>
    <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" type="tel" aria-describedby="phoneHelp" placeholder="Escribe el telefono del cuidador" value="{{ old('phone',$parent->phone) }}">
    @error('phone')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  <div class="form-group mb-3 col-sm-4">
    <label for="fixedphone">Telefono fijo</label>
    <input class="form-control @error('fixedphone') is-invalid @enderror" id="fixedphone" name="fixedphone" type="tel" aria-describedby="fixedphoneHelp" placeholder="Escribe el telefono fijo del cuidador" value="{{ old('fixedphone',$parent->fixedphone) }}">
    @error('fixedphone')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  <div class="form-group mb-3 col-sm-4">
    <label for="cardtype_id @error('cardtype_id') is-invalid @enderror">Tipo de documento</label>
    <select class="form-control @error('cardtype_id') is-invalid @enderror" id="cardtype_id" name="cardtype_id">
    <option value="">Seleccione</option>
          @if($parent->cardtype_id === 1)
            <option value="1" selected>Cedula</option>
            <option value="2">Tarjeta de identidad</option>
            <option value="3">Pasaporte</option>
          @elseif($parent->cardtype_id === 2)
            <option value="1">Cedula</option>
            <option value="2" selected>Tarjeta de identidad</option>
            <option value="3">Pasaporte</option>
          @elseif($parent->cardtype_id === 3)
            <option value="1">Cedula</option>
            <option value="2">Tarjeta de identidad</option>
            <option value="3" selected>Pasaporte</option>
          @else
            <option value="1">Cedula</option>
            <option value="2">Tarjeta de identidad</option>
            <option value="3">Pasaporte</option>
          @endif
    </select>
    @error('cardtype_id')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  <div class="form-group mb-3 col-sm-4">
    <label for="cardid">Documento de identificacion</label>
    <input class="form-control @error('cardid') is-invalid @enderror" id="cardid" name="cardid" type="text" aria-describedby="cardidlHelp" placeholder="Escribe el nombre del cuidador" value="{{ old('cardid',$parent->cardid) }}">
    @error('cardid')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  <div class="form-group mb-3 col-sm-4">
    <label for="parent">Parentesco del niño</label>
    <input class="form-control @error('parent') is-invalid @enderror" id="parent" type="text" name="parent" aria-describedby="parentHelp" placeholder="Escribe el parentesco del niño ejemplo: vecino,papa" value="{{ old('parent',$parent->parent) }}">
    @error('parent')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>
  {{-- <div class="form-group mb-3 col-sm-4">
      <label for="date_of_birth">Fecha de nacimiento</label>
      <input class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" type="text" placeholder="Select Date">
      @error('date_of_birth')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	  @enderror
  </div> --}}
  <div class="form-group mb-3 col-sm-4 mx-auto">
    <label for="gender">Genero</label>
    <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
      <option value="">Seleccione</option>
      <option value="male" selected>Masculino</option>
      <option value="female">Femenino</option>

    </select>
    @error('gender')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
  </div>

  {{-- <div class="form-group mb-3 col-sm-4 mx-auto">
  	<label for="users">niños inscritos</label>
	<select class="form-control" id="users" multiple="">
        <optgroup label="Seleccione">
          <option>Ahmedabad</option>
          <option>Surat</option>
          <option>Vadodara</option>
          <option>Rajkot</option>
          <option>Bhavnagar</option>
          <option>Jamnagar</option>
          <option>Gandhinagar</option>
          <option>Nadiad</option>
          <option>Morvi</option>
          <option>Surendranagar</option>
          <option>Junagadh</option>
          <option>Gandhidham</option>
          <option>Veraval</option>
          <option>Ghatlodiya</option>
          <option>Bharuch</option>
          <option>Anand</option>
          <option>Porbandar</option>
          <option>Godhra</option>
          <option>Navsari</option>
          <option>Dahod</option>
          <option>Botad</option>
          <option>Kapadwanj</option>
        </optgroup>
    </select>
  </div>
 --}}

</div>
<div class="tile-footer">
	<button class="btn btn-primary" type="submit">{{ $btntxt }}</button>
</div>