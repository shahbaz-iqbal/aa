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
			<div class="breadcrumb-title pe-3">Expertise</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Update Expertise</li>
					</ol>
				</nav>
			</div>
			<!-- <div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div> -->
		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Update Expertise</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-10">
							<div class="border border-3 p-4 rounded">
							<form action="{{url('/admin/expertise_update')}}" method="POST" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" name="id" value="{{$expertise->id}}">
									<div class="mb-3">
										<label for="inputProductTitle" class="form-label">Title</label>
										<input type="text" name="title" class="form-control" id="inputProductTitle" placeholder="Enter title" value="{{$expertise->title}}">
									</div>
									<div class="mb-3">
										<label for="inputProductDescription" class="form-label">Short Description</label>
										<textarea class="form-control" name="short_description" id="inputProductDescription" rows="3" placeholder="Enter Description">{{$expertise->short_description}}</textarea>
									</div>
									<div class="card">
										<div class="card-body">
											<label for="mytextarea">Long Description</label> <br><br>
											<textarea id="mytextarea"  name="discription">{{$expertise->discription}}</textarea>

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