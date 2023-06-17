<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('dashtreme/assets/images/favicon-32x32.png') }}" type="image/.png') }}" />
	<!--plugins-->
	<link href="{{ asset('dashtreme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('dashtreme/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('dashtreme/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('dashtreme/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('dashtreme/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('dashtreme/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('dashtreme/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashtreme/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('dashtreme/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('dashtreme/assets/css/icons.css') }}" rel="stylesheet">
	
	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('dashtreme/assets/images/logo-icon..png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Dashtreme</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="index.html"><i class="bx bx-radio-circle"></i>Default</a>
						</li>
						<li> <a href="dashboard-eCommerce.html"><i class="bx bx-radio-circle"></i>eCommerce</a>
						</li>
						<li> <a href="dashboard-sales.html"><i class="bx bx-radio-circle"></i>Sales</a>
						</li>
						<li> <a href="dashboard-analytics.html"><i class="bx bx-radio-circle"></i>Analytics</a>
						</li>
						<li> <a href="dashboard-alternate.html"><i class="bx bx-radio-circle"></i>Alternate</a>
						</li>
						<li> <a href="dashboard-digital-marketing.html"><i class="bx bx-radio-circle"></i>Digital Marketing</a>
						</li>
						<li> <a href="dashboard-human-resources.html"><i class="bx bx-radio-circle"></i>Human Resources</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Application</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>Email</a>
						</li>
						<li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Chat Box</a>
						</li>
						<li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Widgets</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
						</li>
						<li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
						</li>
						<li> <a href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a>
						</li>
						<li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
						</li>
						<li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
						</li>
						
						<li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
						</li>
						<li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
							<ul>
								<li><a href="auth-basic-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-basic-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-basic-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-basic-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
							<ul>
								<li><a href="auth-cover-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-cover-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-cover-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-cover-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header Footer</a>
							<ul>
								<li><a href="auth-header-footer-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-header-footer-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-header-footer-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-header-footer-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.html">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Coming Soon</a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Blank Page</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
						<div class="parent-icon"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts & Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{{ asset('dashtreme/assets/images/county/02..png') }}" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/01..png') }}" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/02..png') }}" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/03..png') }}" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/04..png') }}" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/05..png') }}" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/06..png') }}" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/07..png') }}" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('dashtreme/assets/images/county/08..png') }}" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/slack..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/behance..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="{{ asset('dashtreme/assets/images/app/google-drive..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/outlook..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/github..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/stack-overflow..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/figma..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/twitter..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/google-calendar..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/spotify..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/google-photos..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/pinterest..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/linkedin..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/dribble..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/youtube..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/google..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/envato..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Envato</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="{{ asset('dashtreme/assets/images/app/safari..png') }}" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('dashtreme/assets/images/avatars/avatar-1..png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('dashtreme/assets/images/avatars/avatar-2..png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="{{ asset('dashtreme/assets/images/app/outlook..png') }}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('dashtreme/assets/images/avatars/avatar-4..png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="{{ asset('dashtreme/assets/images/app/github..png') }}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('dashtreme/assets/images/avatars/avatar-8..png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-light w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/11..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/02..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/03..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/04..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/05..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/06..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/07..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/08..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('dashtreme/assets/images/products/09..png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-light w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset('dashtreme/assets/images/avatars/avatar-2..png') }}" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

					<div class="card radius-10">
					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group g-0">
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">9526</h5>
									<div class="ms-auto">
                                        <i class='bx bx-cart fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:4px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Orders</p>
									<p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">$8323</h5>
									<div class="ms-auto">
                                        <i class='bx bx-dollar fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:4px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Revenue</p>
									<p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">6200</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:4px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Visitors</p>
									<p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">5630</h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:4px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Messages</p>
									<p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
					</div><!--end row-->
				</div>
				
				  <div class="row">
					<div class="col-12 col-lg-8 col-xl-8 d-flex">
					   <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Site Traffic</h5>
								</div>
								<div class="dropdown options ms-auto">
									<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
									  <i class='bx bx-dots-horizontal-rounded'></i>
									</div>
									<ul class="dropdown-menu">
									  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
									  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
									  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
									</ul>
								  </div>
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1 text-white"></i>New Visitor</span>
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1 text-light-1"></i>Old Visitor</span>
							</div>
						   <div class="chart-container-1">
							 <canvas id="chart1"></canvas>
						   </div>
						</div>
						<div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">45.87M</h5>
							  <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
							</div>
						  </div>
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">15:48</h5>
							  <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
							</div>
						  </div>
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">245.65</h5>
							  <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
							</div>
						  </div>
						</div>
					   </div>
					</div>
			   
					<div class="col-12 col-lg-4 col-xl-4 d-flex">
					
					   <div class="card radius-10 overflow-hidden w-100">
						  <div class="card-body">
							<div class="d-flex align-items-center mb-2">
								<div>
									<h5 class="mb-0">Weekly sales</h5>
								</div>
								<div class="dropdown options ms-auto">
									<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
									  <i class='bx bx-dots-horizontal-rounded'></i>
									</div>
									<ul class="dropdown-menu">
									  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
									  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
									  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
									</ul>
								  </div>
							</div>
							<div class="chart-js-container2">
							<div class="piechart-legend">
							  <h3 class="mb-1">95K</h3>
							  <h6 class="mb-0">Total sales</h6>
							 </div>
							  <canvas id="chart2"></canvas>
							 </div>
						  </div>
						  <div class="table-responsive">
							<table class="table align-items-center mb-0">
							  <tbody>
								<tr class="border-top">
								  <td><i class="bx bxs-circle text-white me-2"></i> Direct</td>
								  <td>$5856</td>
								  <td>+55%</td>
								</tr>
								<tr>
								  <td><i class="bx bxs-circle text-light-2 me-2"></i>Affiliate</td>
								  <td>$2602</td>
								  <td>+25%</td>
								</tr>
								<tr>
								  <td><i class="bx bxs-circle text-light-3 me-2"></i>E-mail</td>
								  <td>$1802</td>
								  <td>+15%</td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</div>
					</div>
				   </div><!--End Row-->


				   <div class="row row-cols-1 row-cols-lg-3">
					<div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="w_chart easy-dash-chart1" data-percent="60">
							   <span class="w_percent"></span>
							 </div>
							 <div class="ms-3">
							   <h6 class="mb-0">Facebook Followers</h6>
							   <small class="mb-0">22.14% <i class='bx bxs-up-arrow align-middle me-1'></i>Since Last Week</small>
							 </div>
							 <div class="ms-auto fs-1 text-white"><i class='bx bxl-facebook'></i></div>
						   </div>
						 </div>
					   </div>
					 </div>
					 <div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="w_chart easy-dash-chart2" data-percent="65">
							   <span class="w_percent"></span>
							 </div>
							 <div class="ms-3">
								<h6 class="mb-0">Twitter Tweets</h6>
								<small class="mb-0">32.15% <i class='bx bxs-up-arrow align-middle me-1'></i>Since Last Week</small>
							  </div>
							  <div class="ms-auto fs-1 text-white"><i class='bx bxl-twitter'></i></div>
						   </div>
						 </div>
					   </div>
					 </div>
					 <div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="w_chart easy-dash-chart3" data-percent="75">
							   <span class="w_percent"></span>
							 </div>
							 <div class="ms-3">
								<h6 class="mb-0">Youtube Subscribers</h6>
								<small class="mb-0">58.24% <i class='bx bxs-up-arrow align-middle me-1'></i>Since Last Week</small>
							  </div>
							  <div class="ms-auto fs-1 text-white"><i class='bx bxl-youtube'></i></div>
						   </div>
						 </div>
					   </div>
					 </div>
					</div><!--End Row-->


					<div class="row">
						<div class="col-12 col-lg-12 col-xl-6">
						  <div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<div>
										<h5 class="mb-0">Selling Region</h5>
									</div>
									<div class="dropdown options ms-auto">
										<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
											<i class='bx bx-dots-horizontal-rounded'></i>
										</div>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a></li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
										</ul>
									</div>
								</div>
							 <div id="dashboard-map" style="height: 335px;"></div>
							</div>
							<div class="table-responsive">
							   <table class="table table-hover align-items-center mb-0">
								  <thead class="table-light">
									 <tr>
										 <th>Country</th>
										 <th>Income</th>
										 <th>Trend</th>
									 </tr>
								 </thead>
								 <tbody>
									 <tr>
										 <td><i class="flag-icon flag-icon-ca me-2"></i> USA</td>
										 <td>$4,586</td>
										 <td><span id="trendchart1"></span></td>
									 </tr>
									 <tr>
										 <td><i class="flag-icon flag-icon-us me-2"></i>Canada</td>
										 <td>$2,089</td>
										 <td><span id="trendchart2"></span></td>
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-in me-2"></i>India</td>
										 <td>$3,039</td>
										 <td><span id="trendchart3"></span></td>
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-gb me-2"></i>UK</td>
										 <td>$2,309</td>
										 <td><span id="trendchart4"></span></td>
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-de me-2"></i>Germany</td>
										 <td>$7,209</td>
										 <td><span id="trendchart5"></span></td>
									 </tr>
									 
								 </tbody>
							 </table>
							 </div>
						  </div>
						</div>
						
						<div class="col-12 col-lg-12 col-xl-6">
						   <div class="row">
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10 overflow-hidden">
								<div class="card-body">
								   <p class="mb-2">Page Views</p>
								   <h4 class="mb-0">8,293 <small class="font-13 text-white">5.2% <i class="bx bx-up-arrow-alt"></i></small></h4>
								</div>
								<div class="chart-container-2">
								  <canvas id="chart3"></canvas>
								</div>
							  </div>
							 </div>
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10 overflow-hidden">
								<div class="card-body">
								   <p class="mb-2">Total Clicks</p>
								   <h4 class="mb-0">7,493 <small class="font-13 text-white">1.4% <i class="bx bx-up-arrow-alt"></i></small></h4>
								   
								</div>
								<div class="chart-container-2">
									<canvas id="chart4"></canvas>
								</div>
							  </div>
							 </div>
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10">
								<div class="card-body text-center">
								   <p class="mb-4">Total Downloads</p>
								   <input class="knob" data-width="190" data-height="190" data-readOnly="true" data-thickness=".15" data-angleoffset="90" data-linecap="round" data-bgcolor="rgba(0, 0, 0, 0.08)" data-fgcolor="#fff" data-max="15000" value="8550"/>
								   <hr>
								   <p class="mb-0 small-font text-center">3.4% <i class="zmdi zmdi-long-arrow-up"></i> since yesterday</p>
								</div>
							  </div>
							 </div>
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10">
								<div class="card-body">
								   <p>Device Storage</p>
								   <h4 class="mb-3">42620/50000</h4>
								   <hr>
								   <div class="progress-wrapper mb-4">
									  <p>Documents <span class="float-end">12GB</span></p>
									  <div class="progress" style="height:5px;">
										  <div class="progress-bar bg-white" style="width:80%"></div>
									  </div>
								   </div>
								   
								   <div class="progress-wrapper mb-4">
									  <p>Images <span class="float-end">10GB</span></p>
									  <div class="progress" style="height:5px;">
										  <div class="progress-bar bg-white" style="width:60%"></div>
									  </div>
								   </div>
								   
								   <div class="progress-wrapper mb-4">
									   <p>Mails <span class="float-end">5GB</span></p>
									  <div class="progress" style="height:5px;">
										  <div class="progress-bar bg-white" style="width:40%"></div>
									  </div>
								   </div>
								   
								</div>
							  </div>
							 </div>
						   </div>
						</div>
					 </div><!--End Row-->

					 <div class="row">
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
						  <div class="card radius-10 overflow-hidden w-100">
							 <div class="card-body">
							   <p>Total Earning</p>
							   <h4 class="mb-0">$287,493</h4>
							   <small>1.4% <i class='bx bx-up-arrow-alt'></i> Since Last Month</small>
							   <hr>
							   <p>Total Sales</p>
							   <h4 class="mb-0">$87,493</h4>
							   <small>5.43% <i class='bx bx-up-arrow-alt'></i> Since Last Month</small>
							   <div class="mt-5">
							   <div class="chart-container-4">
								 <canvas id="chart5"></canvas>
								</div>
							  </div>
							 </div>
						  </div>
						</div>
				  
						<div class="col-12 col-lg-6 col-xl-8 d-flex">
						   <div class="card radius-10 w-100">
							   <div class="card-header border-bottom bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Customer Review</h5>
									</div>
									<div class="dropdown options ms-auto">
										<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
										  <i class='bx bx-dots-horizontal-rounded'></i>
										</div>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
										</ul>
									  </div>
								</div>
							</div>
							 <ul class="list-group list-group-flush review-list">
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('dashtreme/assets/images/avatars/avatar-1..png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">iPhone X <small class="ms-4">08.34 AM</small></h6>
									<p class="mb-0 small-font">Sara Jhon : This is svery Nice phone in low budget.</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('dashtreme/assets/images/avatars/avatar-2..png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">Air Pod <small class="ml-4">05.26 PM</small></h6>
									<p class="mb-0 small-font">Danish Josh : The brand apple is original !</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('dashtreme/assets/images/avatars/avatar-3..png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">Mackbook Pro <small class="ml-4">06.45 AM</small></h6>
									<p class="mb-0 small-font">Jhon Doe : Excllent product and awsome quality</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('dashtreme/assets/images/avatars/avatar-4..png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">Air Pod <small class="ml-4">08.34 AM</small></h6>
									<p class="mb-0 small-font">Christine : The brand apple is original !</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
									<div class="d-flex align-items-center">
									  <img src="{{ asset('dashtreme/assets/images/avatars/avatar-9..png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
									<div class="ms-3">
									  <h6 class="mb-0">Air Pod <small class="ml-4">05.26 PM</small></h6>
									  <p class="mb-0 small-font">Danish Josh : The brand apple is original !</p>
									</div>
									<div class="ms-auto star">
									 <i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									</div>
								  </div>
								  </li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('dashtreme/assets/images/avatars/avatar-7..png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">Mackbook <small class="ml-4">08.34 AM</small></h6>
									<p class="mb-0 small-font">Michle : The brand apple is original !</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
									<div class="d-flex align-items-center">
									  <img src="{{ asset('dashtreme/assets/images/avatars/avatar-8..png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
									<div class="ms-3">
									  <h6 class="mb-0">Air Pod <small class="ml-4">05.26 PM</small></h6>
									  <p class="mb-0 small-font">Danish Josh : The brand apple is original !</p>
									</div>
									<div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									</div>
								  </div>
								  </li>
							  </ul>
						   </div>
						</div>
					  </div><!--End Row-->


					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Orders Summary</h5>
								</div>
								<div class="dropdown options ms-auto">
									<div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
									  <i class='bx bx-dots-horizontal-rounded'></i>
									</div>
									<ul class="dropdown-menu">
									  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
									  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
									  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
									</ul>
								  </div>
							</div>
							<hr>
							<div class="table-responsive">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr>
											<th>Order id</th>
											<th>Product</th>
											<th>Customer</th>
											<th>Date</th>
											<th>Price</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#897656</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('dashtreme/assets/images/icons/chair..png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Light Blue Chair</h6>
													</div>
												</div>
											</td>
											<td>Brooklyn Zeo</td>
											<td>12 Jul 2020</td>
											<td>$64.00</td>
											<td>
												<div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#987549</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('dashtreme/assets/images/icons/shoes..png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Green Sport Shoes</h6>
													</div>
												</div>
											</td>
											<td>Martin Hughes</td>
											<td>14 Jul 2020</td>
											<td>$45.00</td>
											<td>
												<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#685749</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('dashtreme/assets/images/icons/headphones..png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Red Headphone 07</h6>
													</div>
												</div>
											</td>
											<td>Shoan Stephen</td>
											<td>15 Jul 2020</td>
											<td>$67.00</td>
											<td>
												<div class="badge rounded-pill bg-light text-white w-100">Cancelled</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#887459</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('dashtreme/assets/images/icons/idea..png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Mini Laptop Device</h6>
													</div>
												</div>
											</td>
											<td>Alister Campel</td>
											<td>18 Jul 2020</td>
											<td>$87.00</td>
											<td>
												<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#335428</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('dashtreme/assets/images/icons/user-interface..png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Purple Mobile Phone</h6>
													</div>
												</div>
											</td>
											<td>Keate Medona</td>
											<td>20 Jul 2020</td>
											<td>$75.00</td>
											<td>
												<div class="badge rounded-pill bg-light text-white w-100">In Progress</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#224578</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('dashtreme/assets/images/icons/watch..png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Smart Hand Watch</h6>
													</div>
												</div>
											</td>
											<td>Winslet Maya</td>
											<td>22 Jul 2020</td>
											<td>$80.00</td>
											<td>
												<div class="badge rounded-pill bg-light text-white w-100">Cancelled</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#447896</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('dashtreme/assets/images/icons/tshirt..png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">T-Shirt Blue</h6>
													</div>
												</div>
											</td>
											<td>Emy Jackson</td>
											<td>28 Jul 2020</td>
											<td>$96.00</td>
											<td>
												<div class="badge rounded-pill bg-light text-white w-100">Completed</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('dashtreme/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('dashtreme/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/chartjs/chart.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('dashtreme/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ asset('dashtreme/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('dashtreme/assets/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('dashtreme/assets/js/app.js') }}"></script>
</body>

</html>