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
			<div class="breadcrumb-title pe-3">Terms of Use </div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Terms of Use</li>
					</ol>
				</nav>
			</div>
					</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Terms of Use</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-10">
							<div class="border border-3 p-4 rounded">
							<form action="{{url('/admin/term_of_use_update')}}" method="POST" enctype="multipart/form-data">
									@csrf
									<div class="card">
										<div class="card-body">
											<label for="mytextarea">Terms of Use</label> <br><br>
											<textarea id="mytextarea" name="description" name="mytextarea">{{$terms->description}}</textarea>

										</div>
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