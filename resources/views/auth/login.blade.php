@extends('auth.contenido')

@section('login')
<div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card-group mb-0">
          <div class="card p-4">
          <form class="form-horizontal was-validated" method="POST" action="{{route('logint')}}">
          {{ csrf_field() }}
              <div class="card-body">
              <h3 class="text-center bg-danger">Pedidos AmorMioShop</h3>
             
              <div class="form-group mb-3{{$errors->has('correo' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" value="{{old('correo')}}" name="correo" id="correo" class="form-control" placeholder="Correo">
                {!!$errors->first('correo','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!} 
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-danger px-4"><i class="fa fa-sign-in fa-2x"></i> Iniciar sesión</button>
                </div>
              </div>
            </div>
          </form>
          </div>

        </div>
      </div>
    </div>
@endsection