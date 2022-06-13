@extends("layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Alerts</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col col-lg-9 mx-auto">
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Icon Alert Examples</h5>
								<hr/>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bookmark-heart'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Primary Alerts</h6>
											<div class="text-white">A simple primary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-tag-alt'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Secondary Alerts</h6>
											<div class="text-white">A simple secondary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Success Alerts</h6>
											<div class="text-white">A simple success alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Danger Alerts</h6>
											<div class="text-white">A simple danger alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Warning Alerts</h6>
											<div class="text-white">A simple Warning alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-square'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Info Alerts</h6>
											<div class="text-white">A simple info alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bell'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Dark Alerts</h6>
											<div class="text-white">A simple dark alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Text Examples Without Icons</h5>
								<hr/>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple primary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple secondary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple success alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple danger alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple Warning alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple info alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 alert-dismissible fade show">
									<div class="text-white">A simple dark alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row">
					<div class="col col-lg-9 mx-auto">
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Border Examples</h5>
								<hr/>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bookmark-heart'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Primary Alerts</h6>
											<div>A simple primary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-tag-alt'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0">Secondary Alerts</h6>
											<div>A simple secondary alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Success Alerts</h6>
											<div>A simple success alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Danger Alerts</h6>
											<div>A simple danger alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-circle'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Warning Alerts</h6>
											<div>A simple danger alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-info-square'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-white">Info Alerts</h6>
											<div>A simple info alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><i class='bx bx-bell'></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0">Dark Alerts</h6>
											<div>A simple dark alert—check it out!</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
						<div class="card bg-transparent shadow-none">
							<div class="card-body">
								<h5 class="card-title">Border Examples Without Icons</h5>
								<hr/>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple primary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple secondary alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple success alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert  border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple danger alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple danger alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div>A simple info alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<div class="alert border-0 border-start border-5 border-white alert-dismissible fade show">
									<div class="text-white">A simple dark alert—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	