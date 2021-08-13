  
@extends('layouts.layout')
@section('content')

<main class="main-register">
  <div class="register">
    <h2>Registrirajte se</h2>
    <form>
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
        <label for="password_confirmed">Ponovi Geslo:</label>
      </div>
      <div class="form-control">
        <input type="password_confirmed" name="password_confirmed" id="password_confirmed">
      </div>
      <div class="btn-login">
        <button type="submit">Registracija</button>
      </div>
    </form>

  </div>
</main>

</section>


@endsection