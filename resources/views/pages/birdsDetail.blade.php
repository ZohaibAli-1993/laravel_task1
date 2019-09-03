@extends('layouts.main') 
@section('content') 
  
    <h1><strong>Detail</strong></h1>
    <div class="column is-half is-offset-one-quarter"> 
         <!--Ul list of a single bird details --> 
        <h1><strong>Bird Name:</strong></h1>
        <ul>  
            <li>{{$bird->name}}</li>
            <li><strong>Bird Id : </strong>{{$bird->id}}</li> 
            <li><strong>Color : </strong>{{$bird->color}}</li> 
            <li><strong>Family : </strong>{{$bird->family}}</li> 
            <li><strong>Speed : </strong>{{$bird->speed}}</li> 
            <li><strong>Can Fly : </strong>{{$bird->can_fly}}</li>
        </ul>    
    </div> <!--// end of div -->

@endsection