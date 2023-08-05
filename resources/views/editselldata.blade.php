@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
				<form action="\selldata\{{$s->id}}" method="post" enctype="multipart/form-data">
						@csrf
                        @method('put')
						<div class="row">
							<h4 class="mb-2">Edit Product Form</h4>
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Your Name" name="sname" value="{{$s->sname}}">
							</div>
							
							<div class="form-floating mb-3">
							<select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="tid" value="{{$s->tid}}">
                                    <!-- <option selected>Select Category</option> -->	
                                    @foreach ($data as $c)
									<option value="{{$c->id}}">{{$c->cname}}</option>
										@endforeach
									
                                </select>
                            </div>
							<div class="input-group mb-3">
                                <span class="input-group-text">₹</span>
                                <input type="text" class="form-control" name="price" placeholder="Enter the Price" aria-label="Amount (to the nearest Ruppe)" value="{{$s->price}}">
                                <span class="input-group-text">.00</span>
                            </div>
							<div class="col-12 mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Your Product Images</label>
                                <input class="form-control" type="file" name="img" id="formFileMultiple" multiple value="{{$s->img}}">
                            </div>
							<div class="col-12 mb-3">
								<textarea name="disc" id="" cols="30" rows="4" class="form-control" placeholder="Discription" value="{{$s->disc}}">{{$s->disc}}</textarea>
							</div>

							<div class="col-12">
								<input type="submit" value="submit" class="btn btn-primary">
							</div>
						</div>
					</form>

				</div>                        
       </div>

@endsection