@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @section('content')
            @if(Session::has('message'))
            <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
                <form action="{{ route('food.update',[$food->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field ('PUT') }}
                    <div class="card">
                        <div class="card-header">update food</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $food->name }}">
                            @error('name')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $food->description }}"> 
                            @error('description')
                            <strong>{{ $message }}</strong>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $food->price }}">
                            @error('price')
                            <strong>{{ $message }}</strong>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
           
                            <select name="category" class="form-control @error('category') is-invalid @enderror">
                                @error('category')
                                <strong>{{ $message }}</strong>
                            @enderror
                                <option value="">pilih kategori</option>
                                @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                            <strong>{{ $message }}</strong>
                        @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-outline-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    @endsection