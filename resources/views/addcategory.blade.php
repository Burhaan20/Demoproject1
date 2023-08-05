@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           

        <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Add Category</h4>
                            <form action="category" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="cname">
                                </div>
                                @error('cname')
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
                                <div class="mb-3">
                                <label class="form-label">Add Discription</label>
                                <textarea class="form-control" placeholder="Add Discription" style="height: 100px;" name="disc"></textarea>
                            </div>
                            @error('disc')
							<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
            </div>
@endsection