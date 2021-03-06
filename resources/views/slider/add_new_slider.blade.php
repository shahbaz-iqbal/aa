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
			<div class="breadcrumb-title pe-3">Slider</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Add New Slide</li>
					</ol>
				</nav>
			</div>
		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Add New Slide</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-10">
							<div class="border border-3 p-4 rounded">
								<form action="{{url('/admin/slider_insert')}}" method="POST" enctype="multipart/form-data">
									@csrf
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Title</label>
										<input type="text" class="form-control" name="title" id="inputProductTitle" placeholder="Enter title">
									</div>
									<div class="mb-3">
										<label for="inputProductDescription" class="form-label">Subtitle</label>
										<textarea class="form-control" name="sub_title" id="inputProductDescription" rows="3" placeholder="Enter Subtitle"></textarea>
									</div>
									<div class="input-group mb-3">
										<input type="file" class="form-control" name="file" id="inputGroupFile02">
										<label class="input-group-text" for="inputGroupFile02">Upload</label>
									</div>

									<div class="col-12">
										<div class="d-grid">
											<button type="submit" class="btn btn-light">Save Slide</button>
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