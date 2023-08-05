@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
        <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Add Category</h4>
                            <form action="\category\{{$c->id}}" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="cname" value="{{$c->cname}}">
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Add Discription</label>
                                <textarea class="form-control" placeholder="Add Discription" style="height: 100px;" name="disc" value="{{$c->disc}}">{{$c->disc}}</textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div> 
                </div>

@endsection