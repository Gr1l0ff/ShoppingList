  
@extends('layouts.layout')
@section('content')

<main class="main-register">
  @if ($errors->any())
  @foreach ($errors->all() as $error)
      <div class="reg-error">
         <p class="m">{{ $error }}</p>
         <i class="fa fa-remove err-close"></i>
      </div>
  @endforeach 
  @endif
  <div class="register">
    <h2>Registrirajte se</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-control">
        <label for="name">Ime:</label>
      </div>
      <div class="form-control">
        <input type="text" name="name" id="name">
      </div>
      <div class="form-control">
        <label for="surrname">Priimek:</label>
      </div>
      <div class="form-control">
        <input type="text" name="surrname" id="surrname">
      </div>
      <div class="form-control">
        <label for="email">Email:</label>
      </div>
      <div class="form-control">
        <input type="email" name="email" id="email">
      </div>
      <div class="form-control">
        <label for="password">Geslo:</label>
      </div>
      <div class="form-control">
        <input type="password" name="password" id="password">
      </div>
      <div class="form-control">
        <label for="password_confirmation">Ponovi Geslo:</label>
      </div>
      <div class="form-control">
        <input type="password" name="password_confirmation" id="password_confirmation">
      </div>
      <br>
      <div class="btn-login">
        <button type="submit">Registracija</button>
      </div>
    </form>

  </div>
</main>

</section>


@endsection