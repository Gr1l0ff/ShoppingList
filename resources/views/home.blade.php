  
@extends('layouts.layout')
@section('content')

<main class="main-front">
  <h2> Dobrodošli na naši spletni strani </h2>
  <img src="{{ asset('img/shopcart.png') }}" alt="shoppingcart">
</main>

<section class="features">
  <div>
    <h3>Prodaja vseh izdelkov</h3>
    <i class="fa fa-address-card-o"></i>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores, possimus reprehenderit quas ipsum quaerat explicabo omnis, vitae voluptas natus fugiat corporis, inventore itaque ullam a necessitatibus maxime consequuntur fuga.</p>
  </div>
  <div>
    <h3>Obveševanje akcij</h3>
    <i class="fa fa-bell-o"></i>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores, possimus reprehenderit quas ipsum quaerat explicabo omnis, vitae voluptas natus fugiat corporis, inventore itaque ullam a necessitatibus maxime consequuntur fuga.</p>
  </div>
  <div>
    <h3>Prihranite na času</h3>
    <i class="fa fa-hourglass-half"></i>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores, possimus reprehenderit quas ipsum quaerat explicabo omnis, vitae voluptas natus fugiat corporis, inventore itaque ullam a necessitatibus maxime consequuntur fuga.</p>
  </div>
  <div>
    <h3>Osebni profil</h3>
    <i class="fa fa-user-circle-o"></i>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolores, possimus reprehenderit quas ipsum quaerat explicabo omnis, vitae voluptas natus fugiat corporis, inventore itaque ullam a necessitatibus maxime consequuntur fuga.</p>
  </div>

</section>


@endsection