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
							<li class="breadcrumb-item active" aria-current="page">Slider</li>
						</ol>
					</nav>
				</div>
				<div class="ms-auto"><a href="{{url('/admin/add_new_slider')}}" class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Slide</a></div>

			</div>
			<!--end breadcrumb-->
			<h6 class="mb-0 text-uppercase">Slider</h6>

			<hr/>
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
							     	<th>ID</th>
									<th>Title</th>
									<th>Subtitle</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>61</td>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td><img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55"></td>
									<td>
									<div class="d-flex order-actions">
										<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
										<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
								</tr>
								<tr>
									<td>63</td>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td><img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55"></td>
									<td>
									<div class="d-flex order-actions">
										<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
										<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
								</tr>
								<tr>
									<td>66</td>
									<td>Ashton Cox</td>
									<td>Junior Technical Author</td>
									<td><img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55"></td>
									<td>
									<div class="d-flex order-actions">
										<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
										<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Cedric Kelly</td>
									<td>Senior Javascript Developer</td>
									<td><img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55"></td>
									<td>
									<div class="d-flex order-actions">
										<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
										<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
								</tr>

							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Subtitle</th>
									<th>Image</th>
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
	  } );
</script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'excel', 'pdf', 'print']
		} );

		table.buttons().container()
			.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
	} );
</script>
@endsection