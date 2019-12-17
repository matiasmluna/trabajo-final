
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
          <input type="button" name="" value="Cambiar avatar">
        </div>
        <div class="nombre">
          <p>{{ Auth::user()->name }}</p>
          <input type="button" name="" value="Cambiar nombre">
          </div>
          <div class="email">
            <p>{{Auth::user()->email}}</p>
            <input type="button" name="" value="Cambiar email">
          </div>
      </div>
    </div>
    <div class="image center col-lg-6 col-sm-12">
      <div class="box-banner">
        <a>
          <img width="70%" height="70%" alt="nosotros" src="images/logo0.png" complete="complete"></a>
      </div>
    </div>
  </div>
</div>

@endsection
