@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
       
            <div class="card">
            
                
                <form action="{{ route('category.update', [$category->id])}}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card">
                        
                        <div class="card-header">update food category</div>
                        <div class="card-body">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                        
                    </div>
                    
                        <div class="form-group mt-2">
                        <button class="btn btn-outline-primary">Update</button>
                    </div>
                    <br>
                </form>    
            </div>
        </div>
    </div>
                
        </div>
    </div>
</div>
@endsection
