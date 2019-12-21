@extends('layout')
@section('title')
Nosotros - Didi Tienda Deportiva
@endsection

@section('main')
<div class="row">
  <div class="col-lg-6 text-center">
    <div class="subpages" style="margin-top:20px;">
      <h2 class="mt-1">Perfil</h2>
      <div class="avatar">
        <img class="user-avatar" src="/storage/{{Auth::user()->avatar}}" alt="" style="border-radius: 50%" width="100">

      </div>
      <div class="nombre">
        <p><b>Nombre:</b></p>
        <p>{{ Auth::user()->name }}</p>

      </div>
      <div class="email">
        <p><b>Email:</b></p>
        <p>{{Auth::user()->email}}</p>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <section id="form" style="margin-top:20px;"><!--form-->
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
      <div class="text-center">
        <div class="login-form">
          <h2>Actualizar datos</h2>
          <form id="accountForm" name="accountForm" action="{{ url('/perfil') }}" method="POST">{{ csrf_field() }}
            <div class="">
              <p><b>Cambiar email</b></p>
              <input value="{{ $userDetails->email }}" id="email" name="email" type="text" placeholder="Email"/>
            </div>
            <div class="">
              <p><b>Cambiar nombre</b></p>
              <input value="{{ $userDetails->name }}" id="name" name="name" type="text" placeholder="Nombre"/>
            </div>

            <div class="mb-2 mt-2">
              <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
    </section><!--/form-->
  </div>
</div>

@endsection
