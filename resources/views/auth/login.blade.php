  
@extends('layouts.layout')
@section('content')

<main class="main-login">
  @if ($errors->any())
  @foreach ($errors->all() as $error)
      <div class="reg-error">
         <p class="m">{{ $error }}</p>
         <i class="fa fa-remove err-close"></i>
      </div>
  @endforeach 
  @endif
  <div class="login">
    <h2>Prijava za naše Uporabnike</h2>
    <form action="login" method="POST">
      @csrf
      <div class="form-control">
        <label for="email">Email:</label>
      </div>
      <div class="form-control">
        <input type="email" name="email" value="{{ old('email') }}" id="email">
      </div>
      <div class="form-control">
        <label for="password">Geslo:</label>
      </div>
      <div class="form-control">
        <input type="password" name="password" id="password">
      </div>
      <div class="form-control">
        <small class="reg-text">Nimate še uporabniškega računa? <a href="{{ route('register') }}">Registrirajte se tu</a></small>
      </div>
      <div class="form-check">
        <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Zapovni se me</label>
      </div>
      <div class="btn-login">
        <button type="submit">Prijava</button>
      </div>
    </form>

  </div>
</main>

</section>


@endsection