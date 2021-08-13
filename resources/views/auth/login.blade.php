  
@extends('layouts.layout')
@section('content')

<main class="main-login">
  <div class="login">
    <h2>Prijava za naše Uporabnike</h2>
    <form>
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
        <small class="reg-text">Nimate še uporabniškega računa? <a href="{{ route('register') }}">Registrirajte se tu</a></small>
      </div>
      <div class="btn-login">
        <button type="submit">Prijava</button>
      </div>
    </form>

  </div>
</main>

</section>


@endsection