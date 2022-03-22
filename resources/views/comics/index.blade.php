
@extends('layouts.main')
{{-- Jumbotron --}}
@section('bg-jumbo')
<section class="jumbo"></section>
@endsection

@section('content-main')
<main class="comics">
     <div class="container py-5">
        {{-- Titolo --}}
        <div class="title-curr-ser">
            <a href="#" class="text-uppercase">Current Series</a>
        </div>
        {{-- Card --}}
        <div class="row">
            @forelse ($comics as $comic)
            <div class="col-2">
                <a href=" {{route('comics.show',$comic->id)}} ">
                    <div class="card" role="button">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body">
                          <h6 class="card-title text-uppercase">{{$comic->series}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <p>Non risultano fumetti disponibili</p>
            @endforelse
        </div>
    </div>
</main>
@endsection