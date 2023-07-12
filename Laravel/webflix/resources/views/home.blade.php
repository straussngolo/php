@extends('layouts/app')


@section('title')

   Accueil - @parent
    
@endsection

@section('content')


    <H1>Notre site : {{ $title}}</H1>


    <ul>

     @foreach ($numbers as $number)

     <li>{{$number}}</li>
         
     @endforeach

    </ul>