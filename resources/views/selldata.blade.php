@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4"> 
                
            <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <h6 class="mb-6">Short By Price</h6>
            </nav>
                        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                        <form class="d-none d-md-flex ms-4" action="/search" method="post" >
                        @csrf
                            <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="sprice">
										@foreach ($data as $s)
									<option value="{{$s->price}}">{{$s->price}}</option>
										@endforeach
                            </select>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
                </nav>
                    <!-- <input class="form-control border-0" type="search" placeholder="Search By Location" name="sename">     -->
                <br>
                            <h5 class="mb-4">Product Data Table</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product ID</th>
                                            <th scope="col">Owner Name</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Images</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Oprations</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        @if(sizeof($data)<=0)
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Data Not Found!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                                        @else
                                             @foreach($data as $s)
                                        <tr>
                                            <th scope="row">{{$s->id}}</th>
                                            <td>{{$s->sname}}</td>
                                            <td>{{$s->name}}</td>
                                            <td>{{$s->price}}</td>
                                            <td><img src="/storage/{{$s->img}}" height="40px" width="50px" ></td>
                                            <td>{{$s->disc}}</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                                  <button type="submit" class="btn btn-danger"><a href="{{url('deleteuser/'.$s->id)}}" style="color: white;">Delete</a></button>
                                                  <button type="button" class="btn btn-warning"><a href="selldata\{{$s->id}}\edit" style="color: white;">Edit</a></button>
                                            </div>
                                            </td>  
                                            
                                        </tr>
                                        @endforeach
                                        @endif
                                       </tbody> 
                                </table>
                                <button type="button" class="btn btn-success"><a href="addselldata" style="color: white;">Add</a></button>
                                <br><br><br>
                                <div class="raw">
                                    {{$data->links()}}
                                </div>
                                    <style>
                                            .w-5{
                                                display:none;
                                            }
                                    </style>
                            </div>
                        </div>
                    </div>
</div>

@endsection