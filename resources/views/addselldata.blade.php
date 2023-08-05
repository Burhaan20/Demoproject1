@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
				<form action="selldata" method="post" enctype="multipart/form-data">
				@csrf
						<div class="row">
							<h4 class="mb-2">Add Product Form</h4>
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Product Name" name="sname">
							</div>
							@error('sname')
							<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							
							<div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="tid">
                                    <!-- <option selected>Select Category</option> -->
										@foreach ($data as $c)
									<option value="{{$c->id}}">{{$c->cname}}</option>
										@endforeach
									<!-- <option value="1">Flat</option>
                                    <option value="2">Bounglow</option>
                                    <option value="3">Apartment</option>
                                    <option value="3">Small House</option> -->
                                </select>
                            </div>
					
							<div class="input-group mb-3">
                                <span class="input-group-text">₹</span>
                                <input type="text" class="form-control" name="price" placeholder="Enter the Price" aria-label="Amount (to the nearest Ruppe)">
								<span class="input-group-text">.00</span>
                            </div>
							@error('price')
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							<div class="col-12 mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Your Product Images</label>
                                <input class="form-control" type="file" name="img" id="formFileMultiple" multiple>
                            </div>
							@error('img')
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							<div class="col-12 mb-3">
								<textarea name="disc" id="" cols="30" rows="4" class="form-control" placeholder="Discription"></textarea>
							</div>
							@error('disc')
							<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							<div class="col-12">
								<input type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>                        
       </div>

@endsection