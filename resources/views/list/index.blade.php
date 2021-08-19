  
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
    <h2>Vaš List za nakupovanje</h2>
    
    <div class="form-control">
      <label for="name">Ime izdelka:</label>
    </div>
    <div class="form-control">
      <input type="search" name="name" id="name" class="search-bar">
    </div>
    <div class="search-list">
      

    </div>

   
    <div class="shopping-list">
      <h3>Vaš nakupovalni list</h3>

      <ul class="Items-list">
          @foreach ($data as $item )
            
          @if ($item->completed == false)
          <li>
            <p>{{ $item->name }}</p> 
            <p> {{ $item->price }} €</p> 
            <p><a href="{{ route('update_list', $item->id) }}"" onclick="return confirm('Ali ste kupili izdelek?')"><i class="fa fa-check-square"></i></a></p> 
            <p><a href="{{ route('delete_list', $item->id) }}" onclick="return confirm('Ali hočete izbrisati izdelek?')"><i class="fa fa-close"></i></a></p>
          </li>

          @else
          <li class="unfinished">
            <p>{{ $item->name }}</p> 
            <p> {{ $item->price }} €</p>  
            <p><a href="{{ route('delete_list', $item->id) }}" onclick="return confirm('Ali hočete izbrisati izdelek?')"><i class="fa fa-close"></i></a></p>
          </li>
          @endif
      
          @endforeach
          
       
        
      </ul>
      
    </div>
    
   
  </div>
</main>

</section>


@endsection