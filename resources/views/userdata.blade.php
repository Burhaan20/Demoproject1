@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
            <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                        <form class="d-none d-md-flex ms-4" action="/searchu" method="post" >
                            @csrf
                    <input class="form-control border-0" type="search" placeholder="Search By Email" name="uemail">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
                </nav>
                <br>
                            <h5 class="mb-4">User Table</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">User ID</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Email</th>
                                            <!-- <th scope="col">Password</th> -->
                                            <th scope="col">Oprations</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                     @if(sizeof($userdata)<=0)
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Data Not Found!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                                        @else
                                     @foreach($userdata as $u)
                                        <tr>
                                            <th scope="row">{{$u->id}}</th>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <!-- <td>{{$u->password}}</td> -->
                                            <td>
                                            <div class="btn-group" role="group">
                                     <form action="\userdata\{{$u->id}}" method="post"> 
                                             @csrf
                                             @method('delete')  
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                                  <button type="button" class="btn btn-warning"><a href="/edituser/{{$u->id}}" style="color: white;">Edit</a></button>
                                            </div>
                                            </td>  
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                               
                
                                <br><br><br>
                                <div class="raw">
                                    {{$userdata->links()}}
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