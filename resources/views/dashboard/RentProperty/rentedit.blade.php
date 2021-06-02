@extends('dashboard.layouts.master')
@section('title')
@section('content')
<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Rent Edit Form</h2>
									</header>
									<div class="card-body">
									
										<form action="/Click_Edit" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data" >
                                        @csrf
										
											
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2 " for="inputDefault">Rent Name </label>
												<div class="col-lg-3">
												<input type ="hidden" name="id" value="{{$editdata['id']}}">
													<input type="text" name="Name" value="{{ $editdata['Name']}}" class="form-control" id="inputDefault"  placeholder="Property Name">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Phpne</label>
												<div class="col-lg-3">
													<input type="text" name="Phone" value="{{ $editdata['Phone']}}" class="form-control" id="inputDefault"  placeholder="Property Type">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Email</label>
												<div class="col-lg-3">
													<input type="text" name="Email" value="{{ $editdata['Email']}}"class="form-control" id="inputDefault"  placeholder="Property Price">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">EmgContact</label>
												<div class="col-lg-3">
													<input type="text" name="EmgContact" value="{{ $editdata['EmgContact']}}"class="form-control" id="inputDefault" placeholder="City">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Area</label>
												<div class="col-lg-3">
													<input type="text" name="Area" value="{{ $editdata['Area']}}"class="form-control" id="inputDefault"  placeholder="Area">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Description</label>
												<div class="col-lg-3">
													<input type="text" name="Description" value="{{ $editdata['Description']}}"class="form-control" id="inputDefault"  placeholder="Description">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Image</label>
												<div class="col-lg-3">
													<input type="file" name="Image" value="{{ $editdata['Image']}}"class="form-control" id="inputDefault"  placeholder="Image">
												</div>
											</div>
                                                <div class="col-lg-3 control-label text-lg-right pt-2">

                                                <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
											</div>
										
										</form>
									</div>
								</section>
				
@endsection
