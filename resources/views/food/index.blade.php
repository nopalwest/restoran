@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            
            <div class="card">
                <div class="card-header">all food</div>

                <div class="card-body">
                    {{-- @foreach ($categories as $category)
                <p>{{ $category->name }}</p>
                
                @endforeach --}}
                <table class="table">
                    <thead class="table-dark">
                        

                      <th scope="col">image</th>
                      <th scope="col">name</th>
                      <th scope="col">description</th>
                      <th scope="col">price</th>
                      <th scope="col">category</th>
                      
                      <th scope="col">edit</th>
                      <th scope="col">delete</th>
                    </thead>
                    <tbody>

                        @if (count($foods)>0)
                        @foreach ($foods as $key=>$food)
                       
                        
                        
                        <tr class="table-active">
                            <td><img src="{{ asset('image')}}/{{ $food->image }}" width="100"></td>
                            <td>{{ $food->name }}</td>
                            <td>{{ $food->description }}</td>
                            <td>{{ $food->price }}</td>
                            <td>{{ $food->category->name}}</td>

                            
                       
                            <td><a href="{{route('food.edit', [$food->id])}}"><button type="button" class="btn btn-outline-dark">edit</button></a></td>
                            
                            <td>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    delete
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <a href="">
                                    <form action="{{ route('food.destroy',[$food->id]) }}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                         apa anda yakin?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-outline-danger">delete</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </td>
                            {{-- modal --}}
                            <!-- Button trigger modal -->

                        </form>        
                                
                            </a>
                                
                    </td>
                </tr>
            </form>
            @endforeach
            @else
                <td>
                    data tidak  ada yang dapat ditampilkan
                </td>
                @endif
            </tbody>
                      
        </table>
        
               </div>

                    
                </div>
                {{ $foods->links() }}
            </div>
           
        
        </div>
    </div>
</div>
@endsection
