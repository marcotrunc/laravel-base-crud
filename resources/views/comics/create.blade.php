@extends('layouts.main')
@section('content-main')
<div class="container py-5">
<h2>Add a new comic</h2>
{{-- Errors --}}
@include('includes.errors')
{{-- Form --}}
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="mb-3"> 
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3"> 
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
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
                <input type="url" class="form-control" id="thumb" name="thumb">
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3"> 
                <label for="price" class="form-label">Price</label>
                <input type="price" class="form-control" id="price" name="price">
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3"> 
                <label for="sale-date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale-date" name="sale_date">
            </div>
        </div>
        <div class="offset-1 col-10">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a description here" id="description" name="description" rows="100"></textarea>
                <label for="description" class="text-muted">Description</label>
            </div>
        </div>
        <div class="d-flex justify-content-center p-3">
            <button type="reset" class="btn btn-danger me-2">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button></div>
        </div>
</form>
</div>
@endsection