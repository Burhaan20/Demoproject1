@extends('adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
					<form action="feedback" method="post">
						@csrf
						<div class="row">
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Your Name" name="fname">
							</div>
							@error('fname')
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							<div class="col-6 mb-3">
								<input type="email" class="form-control" placeholder="Your Email"  name="femail">
							</div>
							@error('femail')
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							<div class="col-12 mb-3">
								<input type="text" class="form-control" placeholder="Subject"  name="sub">
							</div>
							@error('sub')
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							<div class="col-12 mb-3">
								<textarea name="meg" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
							</div>
							@error('meg')
							<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
							@enderror
							<div class="col-12">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>                           
            </div>

@endsection