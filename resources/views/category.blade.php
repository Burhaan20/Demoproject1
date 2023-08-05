@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
            <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                        <h6 class="mb-6">Search By Category Name :-</h6>
                        <form class="d-none d-md-flex ms-4" action="/searchc" method="post" >
                            @csrf
                            <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="scname">
                                    <!-- <option selected>Select Category</option> -->
										@foreach ($data as $c)
									<option value="{{$c->cname}}">{{$c->cname}}</option>
										@endforeach
                            </select>
                    <!-- <input class="form-control border-0" type="search" placeholder="Search By Category Name" name="scname"> -->
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
                </nav>
                <br>
                            <h5 class="mb-4">Category Table</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Category ID</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Discription</th>
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
                                             @foreach($data as $c)
                                        <tr>
                                            <th scope="row">{{$c->id}}</th>
                                            <td>{{$c->cname}}</td>
                                            <td>{{$c->disc}}</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                            <form action="\category\{{$c->id}}" method="post"> 
                                             @csrf
                                             @method('delete')  
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                                  <button type="button" class="btn btn-warning"><a href="category\{{$c->id}}\edit" style="color: white;">Edit</a></button>
                                            </div>
                                            </td>  
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-success"><a href="addcategory" style="color: white;">Add</a></button>
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