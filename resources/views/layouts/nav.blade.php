<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text">LLORDS PR</h4>

		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
		</div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
			<a href="{{ url('admin/index') }}">
				<div class="parent-icon"><i class='bx bx-category'></i>
				</div>
				<div class="menu-title">Dashboard</div>
			</a>

		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-home-circle'></i>
				</div>
				<div class="menu-title">Slider</div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/slider') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
				<li> <a href="{{ url('admin/add_new_slider') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-badge-check'></i>
				</div>
				<div class="menu-title">Expertise</div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/expertise') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
				<li> <a href="{{ url('admin/add_new_expertise') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-user-pin'></i>
				</div>
				<div class="menu-title">About </div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/about_us') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-user-check'></i>
				</div>
				<div class="menu-title">Team</div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/index') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
				<li> <a href="{{ url('admin/add_new_slider') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-dollar-circle'></i>
				</div>
				<div class="menu-title">Funding</div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/funding') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
				<li> <a href="{{ url('admin/add_new_funding') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-briefcase'></i>
				</div>
				<div class="menu-title">Career</div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/career') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
				<li> <a href="{{ url('admin/add_new_career') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-edit'></i>
				</div>
				<div class="menu-title">Blog</div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/blog') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
				<li> <a href="{{ url('admin/add_new_post') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
				</li>

				<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Category</a>
					<ul>
						<li> <a href="{{ url('admin/category') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
						</li>
						<li> <a href="{{ url('admin/add_new_category') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
						</li>
					</ul>
				</li>


			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-mobile'></i>
				</div>
				<div class="menu-title">Contact</div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/contact') }}"><i class="bx bx-right-arrow-alt"></i>View</a>
				</li>
				<li> <a href="{{ url('admin/add_new_contact') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
				</li>


			</ul>
		</li>

		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i type="solid" class='bx bx-wrench'></i>
				</div>
				<div class="menu-title">Site Configuration </div>
			</a>
			<ul>
				<li> <a href="{{ url('admin/complaint_procedure') }}"><i class="bx bx-right-arrow-alt"></i>Complaint Procedure</a>
				</li>
				<li> <a href="{{ url('admin/terms') }}"><i class="bx bx-right-arrow-alt"></i>Terms of Use</a>
				</li>
				<li> <a href="{{ url('admin/privacy') }}"><i class="bx bx-right-arrow-alt"></i>Privacy Policy</a>
				</li>
				<li> <a href="{{ url('admin/cookie_policy') }}"><i class="bx bx-right-arrow-alt"></i>Cookie Policy</a>
				</li>
				<li> <a href="{{ url('admin/accessibility') }}"><i class="bx bx-right-arrow-alt"></i>Accessibility</a>
				</li>
				<li> <a href="{{ url('admin/legal_notice') }}"><i class="bx bx-right-arrow-alt"></i>Legal Notice</a>
				</li>
				<li> <a href="{{ url('admin/eu_dispute') }}"><i class="bx bx-right-arrow-alt"></i>EU Dispute Res.</a>
				</li>
				<li> <a href="{{ url('admin/disclaimer') }}"><i class="bx bx-right-arrow-alt"></i>Disclaimer</a>
				</li>
				<li> <a href="{{ url('admin/setting') }}"><i class="bx bx-right-arrow-alt"></i>Site Info</a>
				</li>


			</ul>
		</li>


	</ul>
	<!--end navigation-->
</div>
<!--end sidebar wrapper -->