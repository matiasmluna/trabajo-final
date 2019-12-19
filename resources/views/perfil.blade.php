@extends('layout')
@section('title')
Nosotros - Didi Tienda Deportiva
@endsection

@section('main')


<div class="section nosotros anchor">
  <div class="center row">
    <div class="text left col-lg-6 col-sm-12" style="padding-top: 15px;">
      <div class="image res-mobile">
      </div>
      <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      <img class="user-avatar" src="/storage/{{Auth::user()->avatar}}" alt="">
      {{ Auth::user()->name }} <span class="caret"></span>
      </a> -->
      <div class="subpages">
        <div class="avatar">
          <img class="user-avatar" src="/storage/{{Auth::user()->avatar}}" alt="" style="border-radius: 50%" width="100">
          
        </div>
        <div class="nombre">
          <p><b>Nombre:</b> {{ Auth::user()->name }}</p>

        </div>
        <div class="email">
          <p><b>Email:</b> {{Auth::user()->email}}</p>
        </div>
      </div>
    </div>
    <div class="image center col-lg-6 col-sm-12">
      <div class="box-banner">
        <a>
          <img width="300px" alt="nosotros" src="images/logo0.png" complete="complete"></a>
      </div>
    </div>
  </div>
</div>

<section id="form" style="margin-top:20px;"><!--form-->
	<div class="container">
		<div class="row">
			@if(Session::has('flash_message_success'))
	            <div class="alert alert-success alert-block">
	                <button type="button" class="close" data-dismiss="alert">×</button> 
	                    <strong>{!! session('flash_message_success') !!}</strong>
	            </div>
	        @endif
	        @if(Session::has('flash_message_error'))
	            <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
	                <button type="button" class="close" data-dismiss="alert">×</button> 
	                    <strong>{!! session('flash_message_error') !!}</strong>
	            </div>
    		@endif  
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form">
					<h2>Actualizar datos</h2>
					<form id="accountForm" name="accountForm" action="{{ url('/perfil') }}" method="POST">{{ csrf_field() }}
						<input value="{{ $userDetails->email }}" readonly="" />
						<input value="{{ $userDetails->name }}" id="name" name="name" type="text" placeholder="Name"/>
						<input value="{{ $userDetails->address }}" id="address" name="address" type="text" placeholder="Direccion"/>
						<input value="{{ $userDetails->mobile }}" id="mobile" name="mobile" type="text" placeholder="Telefono"/>
						<button type="submit" class="btn btn-success">Actualizar</button>
					</form>
				</div>
			</div>
			<div class="col-sm-1">
				<h2 class="or"></h2>
			</div>
		</div>
	</div>
</section><!--/form-->

@endsection