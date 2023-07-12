@extends('layouts/app')

@section('content')

<h1>A propos de Webflix de {{$name}}</h1>

<ul>

    @foreach ($team as $member)

    <li>
     
        <a href="/a-propos/{{$member['name']}}"></a>

    </li>
    <li>

    {{$member['name']}}

    </li>
        
    @endforeach
</ul>
    
@endsection