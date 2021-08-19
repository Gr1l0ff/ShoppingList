  
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
    <h2>Dodajte izdelek</h2>
    <form method="POST" action="{{ route('items') }}">
      @csrf
      <div class="form-control">
        <label for="name">Ime:</label>
      </div>
      <div class="form-control">
        <input type="text" name="name" id="name">
      </div>
      <div class="form-control">
        <label for="type">Tip:</label>
      </div>
      <div class="form-control">
        <select name="type" id="type" class="type-select">
          <option value="alcohol">Alkoholna pijača</option>
          <option value="non-alcoholic">Brez alkoholna</option>
          <option value="food">Hrana</option>
          <option value="clothes">Obleka</option>
        </select>
      </div>
      <div class="form-control">
        <label for="price">Cena:</label>
      </div>
      <div class="form-control">
        <input type="number" name="price" id="price">
      </div>
      
    
     
      <br>
      <div class="btn-login">
        <button type="submit">Vnesi izdelek</button>
      </div>
    </form>

  </div>
</main>

</section>


@endsection