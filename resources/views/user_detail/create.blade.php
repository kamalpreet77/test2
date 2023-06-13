@extends('layouts.app')
@section('content')
<div class="container">
<h2>Tell Us About Yourself</h2>
<div>
  @if(session()->has('errors'))
    
      @foreach($errors->all() as $e)
      <div class="alert alert-danger" role="alert">
         <p>{{$e}}</p>
      </div>
      @endforeach


  @endif
</div>
<form action="/user-detail" method="POST">
  @csrf
   <input type="text" name='fullname' placeholder="fullname">

   <input type="text" name='email' placeholder="email">

   <input type="text" name='phone' placeholder="phone">

   <input type="text" name='address' placeholder="address">
   
   <input type="submit" value="submit">



</form>

</div>


@endsection