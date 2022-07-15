@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">

		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Contact</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Add New Contact</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Add New Contact</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-10">
							<div class="border border-3 p-4 rounded">
                            <form action="{{url('/admin/contact_update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$value->id}}">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Country Name</label>
										<input type="text" class="form-control" name="name" id="inputProductTitle" placeholder="Enter Country Name" value="{{$value->name}}">
									</div>
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Complete Address</label>
										<input type="text" class="form-control" name="address" id="inputProductTitle" placeholder="Enter Complete Address" value="{{$value->address}}">
									</div>

									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Nearest Tube/Station</label>
										<input type="text" class="form-control" name="station" id="inputProductTitle" placeholder="Enter Nearest Tube/Station" value="{{$value->station}}">
									</div>

									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Telephone</label>
										<input type="text" class="form-control" name="telephone" id="inputProductTitle" placeholder="Enter Telephone" value="{{$value->telephone}}">
									</div>

									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Fax</label>
										<input type="text" class="form-control" name="fax" id="inputProductTitle" placeholder="Enter Fax" value="{{$value->fax}}">
									</div>
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Email</label>
										<input type="email" class="form-control" name="email" id="inputProductTitle" placeholder="Enter Email" value="{{$value->email}}">
									</div>


									<div class="col-12">
										<div class="d-grid">
											<button type="submit" class="btn btn-light">Save </button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
					<!--end row-->
				</div>
			</div>
		</div>

	</div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
<script src="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#image-uploadify').imageuploadify();
	})
</script>
@endsection