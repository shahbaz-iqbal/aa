@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Home</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Team</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto"><a href="{{url('/admin/team_add')}}" class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Team</a></div>

		</div>
		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
			<strong>{{ $message }}</strong>
		</div>
		@endif @if ($message = Session::get('error'))
		<div class="alert alert-danger alert-block">
			<!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
			<strong>{{ $message }}</strong>
		</div>
		@endif
		<!--end breadcrumb-->
		<h6 class="mb-0 text-uppercase">Team</h6>

		<hr />
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Designation</th>
								<!-- <th>Description</th> -->
								<th>Image</th>
								<th>Upload Cv</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if($team)
							@foreach($team as $value)
							<tr>
								<td>{{$value['id']}}</td>
								<td>{{$value['title']}}</td>
								<td>{{$value['designation']}}</td>
								<!-- <td>{{$value['description']}}</td> -->
								<td>
									@if($value['image'])
									<img src="{{ asset('/public/images') . '/' .  $value['image']; }}" alt="user avatar" class="rounded-circle" width="55" height="55">
									@else
									<img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
									@endif
								</td>
								<td>
									<div class="d-flex order-actions">
										<a href="{{url('/admin/upload_cv') .'/'. $value['id']; }}" class=""><i class='bx bxs-paper-plane'></i></a>
											</div>
								</td>
								<td>
									<div class="d-flex order-actions">
										<a href="{{url('/admin/cv') .'/'. $value['id']; }}" class=""><i class='bx bxs-paper-plane'></i></a>
										<a href="{{url('/admin/team_edit') .'/'. $value['id']; }}" class="ms-1"><i class='bx bxs-edit'></i></a>
										<a href="{{url('/admin/team_delete') .'/'. $value['id']; }}" class="ms-1"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
							</tr>
							@endforeach
							@endif
						</tbody>
						<tfoot>
							<tr>
							<th>ID</th>
								<th>Title</th>
								<th>Designation</th>
								<!-- <th>Description</th> -->
								<th>Image</th>
								<th>Upload Cv</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable({
			lengthChange: false,
			buttons: ['copy', 'excel', 'pdf', 'print']
		});

		table.buttons().container()
			.appendTo('#example2_wrapper .col-md-6:eq(0)');
	});
</script>
@endsection