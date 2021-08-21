<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
    <title>Document</title>
</head>

<body>
    <header class="main-header">
      <h2>Shopping List</h2>
    </header>
    <nav class="main-nav">
      <ul>
        <li><a href="{{ route('/') }}">Domov</a></li>
        <li><a href="{{ route('about') }}">O nas</a></li>
        @guest
          <li><a href="{{ route('login') }}">Prijava</a></li>
        @endguest
        @auth
        <li><a href="{{ route('list') }}">Vaš list</a></li>
        @if(auth()->user()->email == 'andraz.gril@gmail.com')
          <li><a href="{{ route('items') }}">Dodaj Izdelek</a></li>
        @endif
        <li><form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="submit">Odjava</button>
        </form>
        @endauth</li>
       
      </ul>
    </nav>

    @yield('content')


    <footer class="main-footer">
      <p>Copyright &copy; all rights reserved Grily</p>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
