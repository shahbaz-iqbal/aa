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
			<div class="breadcrumb-title pe-3">Site Info</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Site Info</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Site Info</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-10">
							<div class="border border-3 p-4 rounded">
								<form action="{{url('/admin/setting_update')}}" method="POST" enctype="multipart/form-data">
									@csrf
									<!-- <div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Title</label>
										<input type="text" class="form-control" name="title" id="inputProductTitle" placeholder="Enter title" value="{{$setting->title}}">
									</div>
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label"> Subtitle</label>
										<input type="text" class="form-control" name="sub_title" id="inputProductTitle" placeholder="Enter Subtitle" value="{{$setting->sub_title}}">
									</div> -->
									<div class="input-group mb-3">
										<input type="file" name="file" class="form-control" id="inputGroupFile02">
										<input type="hidden" name="old_image" value="{{$setting->image}}">
										<label class="input-group-text" for="inputGroupFile02">Header Logo</label>
									</div>
									<div class="input-group mb-3">
										<input type="file" name="file1" class="form-control" id="inputGroupFile02">
										<input type="hidden" name="old_image1" value="{{$setting->footer_image}}">
										<label class="input-group-text" for="inputGroupFile02">Footer Logo</label>
									</div>
							</div>
						</div>

					</div>
					<!--end row-->
				</div>
			</div>
		</div>


		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Social Media</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-10">
							<div class="border border-3 p-4 rounded">
								<div class="mb-3">
									<label for="inputProductTitle" class="form-label"> Facebook</label>
									<input type="text" class="form-control" name="facebook" value="{{$setting->facebook}}" id="inputProductTitle" placeholder="Enter url">
								</div>
								<div class="mb-3">
									<label for="inputProductTitle" class="form-label"> Linkdin</label>
									<input type="text" class="form-control" name="linkdin" value="{{$setting->linkdin}}" id="inputProductTitle" placeholder="Enter url">
								</div>
								<div class="mb-3">
									<label for="inputProductTitle" class="form-label"> Twitter</label>
									<input type="text" class="form-control" name="twitter" value="{{$setting->twitter}}" id="inputProductTitle" placeholder="Enter url">
								</div>
								<div class="mb-3">
									<label for="inputProductTitle" class="form-label"> Trustpilot</label>
									<input type="text" class="form-control" name="trustpilot" value="{{$setting->trustpilot}}" id="inputProductTitle" placeholder="Enter url">
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