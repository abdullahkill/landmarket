@extends('dashboard.layouts.master')
@section('title')
@section('content')
@can('customer')

<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Customer Name</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li><span>Home</span></li>
								<li><span>eCommerce</span></li>
								<li><span>Customers</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="/addCustomer" method="POST">
					@csrf
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-dollar-circle"></i>
												<h2 class="card-big-info-title">Billing Info</h2>
												<p class="card-big-info-desc">Add here the customer billing info with all details and necessary information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"> Name</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="CustomerName" value="" required  placeholder="Customer Name"/>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Email</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="Email" value="" required  placeholder="Customer Email" />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Gender</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="Gender" value="" placeholder="Gender" />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Age</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="CustomerAge" value="" required placeholder="Customer Age" />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Address </label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="CustomerAddress" value="" placeholder="Customer Address" />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">City</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="CustomerCity" value="" required  placeholder="City"/>
													</div>
													
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Postcode / ZIP</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="CustomerPostCode" value="" required  placeholder="PostCode"/>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Country / Region</label>
													<div class="col-lg-7 col-xl-6">
														<select class="form-control form-control-modern" name="CustomerCountry">
															<option value="">Select a country / region</option>
															<option value="country1">Country 1</option>
															<option value="country2">Country 2</option>
															<option value="country3">Country 3</option>
															<option value="country4">Country 4</option>
														</select>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">State / Country</label>
													<div class="col-lg-7 col-xl-6">
														<select class="form-control form-control-modern" name="CustomerState">
															<option value="">Select a State</option>
															<option value="state1">State 1</option>
															<option value="state2">State 2</option>
															<option value="state3">State 3</option>
															<option value="state4">State 4</option>
														</select>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Phone</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="CustomerPhone" value="" placeholder="Customer Phone-No"/>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-mail-send"></i>
												<h2 class="card-big-info-title">Agent Info</h2>
												<p class="card-big-info-desc">Add here the customer Agent info with all details and necessary information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Same as billing</label>
													<div class="col-lg-7 col-xl-6">
														<div class="checkbox">
															<label class="my-2">
																<input name="customerShippingSameAsBilling" type="checkbox" value="" data-toggle="collapse" data-target=".shipping-fields-wrapper">
																Check this box to use same information as billing for Agent.
															</label>
														</div>
													</div>
												</div>
												<div class="shipping-fields-wrapper collapse show">
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">First Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="AgentFirstName" value="" required placeholder="Enter Your First	 Name"/>
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Last Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="AgentLastName" value="" required placeholder="Enter Your Last Name" />
														</div>
													</div>
													
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Gender</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="AgentGender" value="" required placeholder="Customer Email"/>
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Address Line </label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="AgentAddress" value="" placeholder="Address"/>
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">City</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="AgentCity" value="" required placeholder="City"/>
														</div>
													</div>
													
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Country / Region</label>
														<div class="col-lg-7 col-xl-6">
															<select class="form-control form-control-modern" name="AgentCountry">
																<option value="">Select a country / region</option>
																<option value="country1">Country 1</option>
																<option value="country2">Country 2</option>
																<option value="country3">Country 3</option>
																<option value="country4">Country 4</option>
															</select>
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">State / Country</label>
														<div class="col-lg-7 col-xl-6">
															<select class="form-control form-control-modern" name="AgentState">
																<option value="">Select a State</option>
																<option value="state1">State 1</option>
																<option value="state2">State 2</option>
																<option value="state3">State 3</option>
																<option value="state4">State 4</option>
															</select>
														</div>
													</div>
													<div class="form-group row align-items-center">
														<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Phone</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="AgentPhone" value="" placeholder="Agent Phone"/>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-user-circle"></i>
												<h2 class="card-big-info-title">Account Info</h2>
												<p class="card-big-info-desc">Add here the customer account info with all details and necessary information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Email / Username</label>
													<div class="col-lg-7 col-xl-6">
														<input type="email" class="form-control form-control-modern" name="customerEmailUsername" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Password</label>
													<div class="col-lg-7 col-xl-6">
														<input type="password" class="form-control form-control-modern" name="customerPassword" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Password Confirm</label>
													<div class="col-lg-7 col-xl-6">
														<input type="password" class="form-control form-control-modern" name="customerPasswordConfirm" value="" placeholder="Password Confirm"/>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row action-buttons">
							<div class="col-12 col-md-auto">
								<button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 mr-2"></i> Save Customer
								</button>
							</div>
							<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
								<a href="ecommerce-customers-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
							</div>
							<div class="col-12 col-md-auto ml-md-auto mt-3 mt-md-0">
								<a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
									<i class="bx bx-trash text-4 mr-2"></i> Delete Customer
								</a>
							</div>
						</div>
					</form>
				
			@endcan		
					
@endsection