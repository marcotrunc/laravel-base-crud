
@extends('layouts.main')
{{-- Jumbotron --}}
@section('bg-jumbo')
<section class="jumbo"></section>
@endsection

@section('content-main')
<main class="comics">
    @if(session('message'))
        <div class="alert alert-danger" role="alert">
        {{session('message')}}
        </div>
    @endif
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
                    <div class="edit-delete d-flex">
                        <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-sm btn-warning text-white me-1">Edit</a>
                        <form action="{{route('comics.destroy',$comic->id)}}" method="POST" class="delete-form" data-title="{{$comic->title}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger text-white">Delete</button>
                        </form>
                    </div>
                </a>
            </div>
            @empty
            <p>Non risultano fumetti disponibili</p>
            @endforelse
            <div class="text-center"><a href="{{route('comics.create')}}" class="btn btn-primary">Add New Comic Book</a></div>
        </div>
    </div>
</main>
@endsection


@section('additional-script')
<script src="{{asset('js/delete-confirm.js')}}"></script>
@endsection
