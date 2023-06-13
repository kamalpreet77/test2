@extends('layouts.app')
@section('content')
<div class="container">
<h2>Education Details</h2>
<div>
  @if(session()->has('errors'))
    
      @foreach($errors->all() as $e)
      <div class="alert alert-danger" role="alert">
         <p>{{$e}}</p>
      </div>
      @endforeach


  @endif
</div>
<form action="/education" method="POST">
  @csrf
   <input type="text" name='school_name' placeholder="school_name">

   <input type="text" name='school_location' placeholder="school_location">

   <input type="text" name='degree' placeholder="degree">

   <input type="text" name='field_of_study' placeholder="field_of_study">
   <input type="date" name='graduation_start_date' placeholder="graduation_start_date">
   <input type="date" name='graduation_end_date' placeholder="graduation_end_date">

   
   <input type="submit" value="submit">



</form>

</div>


@endsection