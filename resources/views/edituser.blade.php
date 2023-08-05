@extends('adminmaster')
@section('main')
  
	<div class="container-fluid pt-4 px-4">           
    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
		<form action="edituser/{{$u->id}}" method="post">
					@csrf
                   @method('put')
							<div class="row">
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Your Name" name="name" value="{{$u->name}}">
							</div>
							<div class="col-6 mb-3">
								<input type="email" class="form-control" placeholder="Your Email"  name="email" value="{{$u->email}}">
							</div>
							<div class="col-6 mb-3">
								<input type="password" class="form-control" placeholder="Password"  name="password" value="{{$u->password}}">
							</div>
							<div class="col-12">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>           
            </div>
@endsection