<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.main')
    @section('content-main')
    <ul>
        @forelse ($comics as $comic)
            <li>
                <h2>{{$comic->title}}</h2>
            </li>
            <li>
                <p>
                {{$comic->description}}
                </p>
            </li>
            <li>
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </li>
            <li>
                <strong>Price: </strong><span> {{$comic->price}} </span>
            </li>
            <li><strong>Series: </strong><span> {{$comic->series}} </span></li>
            <li><strong>Sale_date: </strong><span> {{$comic->sale_date}} </span></li>
            <li><strong>Type: </strong><span> {{$comic->type}} </span></li>
            <li class="py-3"><a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary">Scopri di più</a></li>
        @empty
            <h3>Non risultano fumetti</h3>
        @endforelse
    </ul>
    @endsection
</body>
</html>