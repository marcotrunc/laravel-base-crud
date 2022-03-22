@extends('layouts.main')
@section('content-main')
<div class="card">
    <div class="row">
        <div class="offset-1 col-10 text-center">
            <figure class="py-3 w-100">
                <img src="{{$comic->thumb}}" class="card-img-top"  style="width: 18rem;" alt=">{{$comic->title}}" class="img-fluid">
            </figure>
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->description}}</p>
              <div class="d-flex flex-column">
                  <strong>Price: </strong><span> {{$comic->price}} </span>
                  <strong>Series: </strong><span> {{$comic->series}} </span>
                  <strong>Sale_date: </strong><span> {{$comic->sale_date}} </span>
                  <strong>Type: </strong><span> {{$comic->type}} </span>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection