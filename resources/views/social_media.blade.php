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
			<div class="breadcrumb-title pe-3">Social Media</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Social Media</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Social Media</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-10">
							<div class="border border-3 p-4 rounded">
								<form action="">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Facebook</label>
										<input type="text" class="form-control" id="inputProductTitle" placeholder="Enter url">
									</div>
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Linkdin</label>
										<input type="text" class="form-control" id="inputProductTitle" placeholder="Enter url">
									</div>
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Twitter</label>
										<input type="text" class="form-control" id="inputProductTitle" placeholder="Enter url">
									</div>
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Trustpilot</label>
										<input type="text" class="form-control" id="inputProductTitle" placeholder="Enter url">
									</div>
									<div class="col-12">
										<div class="d-grid">
											<button type="submit" class="btn btn-light">Save</button>
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
<script src="{{ asset('assets/js/tinymce.min.js') }}"></script>
<script>
	tinymce.init({
		selector: '#mytextarea'
	});
</script>
@endsection