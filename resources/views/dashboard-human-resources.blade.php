	@extends("layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<div class="row">
					<div class="col-12 col-lg-12 col-xl-6">
					 <div class="row row-cols-1 row-cols-lg-2">
						 <div class="col">
                            <div class="card radius-10 overflow-hidden">
								<div class="card-body">
								  <div class="text-white font-35"><i class='bx bx-group'></i></div>
								  <h3 class="mb-0 mt-0">928</h3>
								  <p class="mb-0">Employee NPS</p>
								</div>
								<div id="emp-nps"></div>
								</div>
						 </div>
						 <div class="col">
							<div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="text-white font-35"><i class='bx bx-dollar'></i></div>
								  <h3 class="mb-0 mt-0">$20.2K</h3>
								  <p class="mb-0 mt-1">Training Expenses</p>
								</div>
								<div id="training-expenses"></div>
							  </div>
						</div>
					 </div>
			 
					 <div class="row row-cols-1 row-cols-lg-2">
						 <div class="col">
                            <div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="text-white font-35"><i class='bx bx-camera'></i></div>
									<h3 class="mb-0 mt-0">32</h3>
									<p class="mb-0 mt-1">CSR Activities</p>
								</div>
								<div id="csr-activities"></div>
							</div>
						 </div>

						 <div class="col">
							<div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="text-white font-35"><i class='bx bxs-face'></i></div>
									<h3 class="mb-0 mt-0">14</h3>
									<p class="mb-1">Starter This Month</p>
								</div>
								<div id="starter-this-month"></div>
							  </div>
						 </div>
					 </div>
			 
					 <div class="card radius-10 overflow-hidden">
						<div class="card-body">
						 <div class="d-flex align-items-center">
						   <div class="">
							 <h3 class="mb-0">78.49%</h3>
							 <p class="mb-0">Bounce Rate</p>
						   </div>
						   <div class="ms-auto">              
							 <div id="bounce-rate"></div>
						   </div>
						 </div>
						</div>
					  </div>
			 
					</div>
			 
					<div class="col-12 col-lg-12 col-xl-6">
					   <div class="card radius-10">
						  <div class="card-body">
							<div id="submitted-application"></div>
						  </div>
						</div>
						<div class="card radius-10">
						 <div class="card-body">
							 <div id="users-status"></div>
						 </div>
						</div>
					</div>
			 
				  </div><!--end row-->
			   
				   <div class="row">
						<div class="col-12 col-lg-8 col-xl-8">
						  <div class="card radius-10 overflow-hidden">
						   <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Recruitment Costs</h6>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							</div>
							  <div class="chart-container">
								 <div id="recruitment-cost"></div>
							  </div>
						   </div>
						 </div>
						</div>
						<div class="col-12 col-lg-4 col-xl-4">
						  <div class="card radius-10">
						   <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Applications By Source</h6>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							 </div>
							 <div class="chart-container d-flex align-items-center justify-content-center mt-3">
								<div id="application-by-source"></div>
							 </div>
						   </div>
						 </div>
						</div>
					  </div><!--end row-->
			   
				  <div class="row">
					<div class="col-12 col-lg-4 col-xl-4">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
						   <div class="">
							<h3 class="mt-3 mb-0">54</h3>
							  <p class="mb-0">Screening Calls</p>
						   </div>
							 <div class="card-content dash-array-chart-box ms-auto">
							  <div id="screening-calls"></div>
							 </div>
						   </div>
						 </div>
					   </div>
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
						   <div class="">
							<h3 class="mt-3 mb-0">82</h3>
							  <p class="mb-0">Assignments</p>
						   </div>
							 <div class="card-content dash-array-chart-box ms-auto">
							  <div id="assignments"></div>
							 </div>
						   </div>
						 </div>
					   </div>
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
						   <div class="">
							<h3 class="mt-3 mb-0">92</h3>
							  <p class="mb-0">Interviews</p>
						   </div>
							 <div class="card-content dash-array-chart-box ms-auto">
							  <div id="interviews"></div>
							 </div>
						   </div>
						 </div>
					   </div>
					</div>
					<div class="col-12 col-lg-4 col-xl-4">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Vacancies Status</h6>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							 </div>
						   <div class="text-center chart-container-9 d-flex align-items-center justify-content-center">
							<div id="vacancies-status"></div>
						  </div>
						 </div>
						 <div class="card-footer bg-transparent border-top">
						 <div class="row align-items-center text-center">
						   <div class="col border-end">
							<h4 class="mb-0">452</h4>
							<small class="extra-small-font">Filled Vacancies</small>
						 </div>
						   <div class="col">
						  <h4 class="mb-0">680</h4>
						  <small class="extra-small-font">Total Vacancies</small>
						 </div>
						 </div>
						</div>
					  </div>
					</div>
					<div class="col-12 col-lg-4 col-xl-4">
					  <div class="card radius-10">
					   <div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Top Referrers</h6>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						 </div>
						  <div class="">
							<div id="top-referrers"></div>
						  </div>
					   </div>
					 </div>
					</div>
				  </div><!--end row-->

			</div>
		</div>
		<!--end page wrapper -->
		@endsection

	@section("script")
	<script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/js/dashboard-human-resources.js') }}"></script>
	@endsection