	@extends("layouts.app")

	@section("style")
	<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	@endsection

	@section("wrapper")
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col">
					<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0">Total Posts</p>
									<h4 class="my-1">{{$post}}</h4>
								</div>
								<div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
								</div>
							</div>
							<div id="chart1"></div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0">Total Users</p>
									<h4 class="my-1">{{$user}}</h4>
								</div>
								<div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
								</div>
							</div>
							<div id="chart2"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0">Total Slider</p>
									<h4 class="my-1">{{$slider}}</h4>
								</div>
								<div class="widgets-icons ms-auto"><i class='bx bxs-binoculars'></i>
								</div>
							</div>
							<div id="chart3"></div>
						</div>
					</div>
				</div>
			</div>
			<!--end row-->

			<!--end row-->

		</div>
	</div>
	<!--end page wrapper -->
	@endsection

	@section("script")
	<script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [
					[6, 10, 20, -1],
					[6, 10, 20, 'Todos']
				]
			});
		});
	</script>
	<script src="{{ asset('assets/js/dashboard-eCommerce.js') }}"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
	@endsection