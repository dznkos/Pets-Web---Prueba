@extends('layouts.app')
@section('title', 'Registrarse')


@section('content')	
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('images/usuarios/registrarse.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card tarjeta-registro">
						<form class="form" method="POST" action="{{route('register')}}">
							@csrf
							<div class="header header-primary text-center">
								<h4>Crear cuenta</h4>
							</div>
							<p class="text-divider">¡Genial, serás un miembro más!</p>
							<div class="content">

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">account_box</i>
									</span>
									<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre completo...">
          @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
         <input id="email" type="email" class="form-control
          {{ $errors->has('email') ? ' is-invalid' : '' }}" 
          name="email" value="{{ old('email') }}" required 
          placeholder="Correo electrónico...">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">vpn_key</i>
									</span>
									<input id="password" type="password" class="form-control{{
          $errors->has('password') ? ' is-invalid' : '' }}" 
          name="password" required placeholder="Contraseña..."/>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input id="password-confirm" type="password" class="form-control"
         name="password_confirmation" required placeholder="Repetir contraseña..." />
								</div>


								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes" checked>
										Acepto los <a href="#" target="_blank">términos y condiciones</a>
									</label>
								</div>
							</div>
       <div class="footer text-center" style="min-height: 100px;">
        <button type="submit" class="btn btn-simple btn-primary btn-lg">
          <i class="material-icons">pets</i>Registrarse</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		
	
@endsection
