@extends('layouts.main')

@section('title-section','edit')

@section('content-main')
<main class="p-5">
    {{-- Errors --}}
    @include('includes.errors')
    <form action="{{route('comics.update',$comic->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3"> 
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3"> 
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3"> 
                    <label for="type" class="form-label">Type</label> <br />
                    <select name="type" id="type" class=" w-100 py-2">
                        <option value="comic book" selected>comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3"> 
                    <label for="thumb" class="form-label">Link Image</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3"> 
                    <label for="price" class="form-label">Price</label>
                    <input type="price" class="form-control" id="price" name="price" value="{{$comic->price}}">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3"> 
                    <label for="sale-date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="sale-date" name="sale_date" value="{{$comic->sale_date}}">
                </div>
            </div>
            <div class="offset-1 col-10">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a description here" id="description" name="description" rows="100">{{$comic->description}}</textarea>
                    <label for="description" class="text-muted">Description</label>
                </div>
            </div>
            <div class="d-flex justify-content-center p-3">
                <button type="reset" class="btn btn-danger me-2">Cancel</button>
                <button type="submit" class="btn btn-warning text-white">Edit</button></div>
            </div>
    </form>
</main>
@endsection