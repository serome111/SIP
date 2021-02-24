<div class="row">
  <div class="form-group mb-3 col-sm-4 mx-auto">
    <label for="users">niños inscritos</label>
	  <select class="form-control" id="users" name="user" multiple="" required>
      <optgroup label="Seleccione el menor">
        @foreach($users as $user)
          <option> <span>{{$user->name}} </span> {{$user->lastname}} {{$user->cardid}}</option>
        @endforeach
      </optgroup>
    </select>
  </div>

<div class="form-group mb-3 col-sm-4 mx-auto">
  <label for="usersparents">Cuidadores inscritos</label>
  <select class="form-control" id="usersparents" name="userParent" multiple="" required>
        <optgroup label="Seleccione el acudiente del menor">
           @foreach($parents as $parent)
              <option> <span>{{$parent->name}}</span> {{$parent->lastname}} {{$parent->cardid}}</option>
            @endforeach
        </optgroup>
    </select>
  </div>
</div>
<div class="tile-footer">
  <button class="btn btn-primary" type="submit">{{ $btntxt }}</button>
</div>