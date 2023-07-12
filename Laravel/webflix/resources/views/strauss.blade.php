@extends('layouts/app')


@section('content')

   <h1>Hello Strauss</h1>
   <p> Tu as {{$age}} ans</p>

   @if ($age>= 18)

   <p> Tu es majeur(e).</p>

   @endif

   <p>Ta couleur est : {{$color}}</p>

   @if ($friend)

   <p>Strauss est avec {{$friend}}</p>
       
   @endif

@endsection