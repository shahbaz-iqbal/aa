@extends("layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<div class="row">
					<div class="col-12 col-lg-6 col-xl-6">
					   <div class="row">
					 <div class="col-12 col-lg-6 col-xl-6">
					   <div class="card radius-10 overflow-hidden">
					   <div class="card-body">
						 <p>Website Sessions</p>
						 <h3>652.9K</h3>
						 <p class="mb-0">72% <span class="float-end">500k</span></p>
					   </div>
						<div class="progress-wrapper">
						<div class="progress" style="height: 7px;">
						  <div class="progress-bar" role="progressbar" style="width: 75%"></div>
						</div>
						 </div>
					   </div>
					   <div class="card radius-10">
					   <div class="card-body">
						 <p>Twitter Followers</p>
						 <h3>8,256K</h3>
						 <p class="mb-0">2.5% Increase</p>
					   </div>
					   <div id="twitter-followers"></div>
					   </div>
					 </div>  
					 <div class="col-12 col-lg-6 col-xl-6">
					   <div class="card radius-10">
					   <div class="card-body text-center px-0">
						 <h6 class="text-uppercase">Total Visitors</h6>
						 <div class="chart-container-10 d-flex align-items-center justify-content-center">
						   <div id="total-visitors"></div>
						</div>
					   </div>
						 <div class="card-footer border-0 bg-transparent">
						  <div class="row align-items-center text-center">
						  <div class="col border-end">
						   <h5 class="mb-0">563</h5>
						   <small class="extra-small-font">Last Week</small>
						  </div>
						  <div class="col">
						   <h5 class="mb-0">985</h5>
						   <small class="extra-small-font">Last Month</small>
						  </div>
						  </div>
						</div>
					   </div>
					 </div>
					   </div><!--end row-->
					</div>
			
			
					<div class="col-12 col-lg-6 col-xl-6">
					  <div class="row">
						<div class="col-12 col-lg-6 col-xl-6">
						  <div class="card radius-10">
							 <div class="card-body">
							   <p>Facebook Pageviews</p>
							   <h3>35.7K</h3>
							   <div id="facebook-pageviews"></div>
							 </div>
						   </div>
						</div>
						<div class="col-12 col-lg-6 col-xl-6">
						  <div class="card radius-10">
							 <div class="card-body">
							   <p>Bounce Rate</p>
								<h3>82.3%</h3>
								<div id="bounce-rate"></div>
							 </div>
						   </div>
						</div>
						<div class="col-12 col-lg-12 col-xl-12">
						  <div class="card radius-10">
							 <div class="card-body">
							   <p class="visually-hidden">List Subscribers</p>
							   <div id="list-subscribers"></div>
							 </div>
						   </div>
						</div>
					  </div><!--end row-->
					</div>
			
				  </div><!--end row-->
			
			
				  <div class="row">
					<div class="col-12 col-lg-6 col-xl-6">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Goal Completion by channel</h6>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							</div>
						  <div class="mt-1">
							   <div id="direct"></div>
							</div>
							<div class="mt-1">
							  <div id="organic-search"></div>
							</div>
							<div class="mt-1">
							  <div id="referral"></div>
							</div>
					        <div class="mt-1">
							  <div id="social"></div>
							</div>
						</div>
					  </div>
					</div>
					<div class="col-12 col-lg-6 col-xl-6">
					  <div class="card-group flex-column flex-md-row">
						<div class="card border-end mb-0 radius-10 shadow-none">
					   <div class="card-body text-center">
						 <h6 class="text-uppercase">Newsletter Open Rate</h6>
						 <div class="chart-container-10 d-flex align-items-center justify-content-center">
						   <div id="newsletter-open-rate"></div>
						 </div>
					   </div>
					  </div>
					  <div class="card mb-0 radius-10 shadow-none">
					   <div class="card-body text-center">
						<h6 class="text-uppercase">Click Through Rate</h6>
						<div class="chart-container-10 d-flex align-items-center justify-content-center">
						  <div id="click-through-rate"></div>
						 </div>
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
	<script src="{{ asset('assets/js/dashboard-digital-marketing.js') }}"></script>
	@endsection