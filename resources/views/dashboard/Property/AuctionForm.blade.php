@extends('dashboard.layouts.master')
@section('title')
@section('content')
<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Auction Form</h2>
									</header>
									<div class="card-body">
									
										<form action="/Auctionlist" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data" >
                                        @csrf
										
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Property Tittle</label>
											<div class="col-lg-3">
												{{-- <input type ="hidden" name="id" > --}}
												<input type ="hidden" name="id" value="{{$editdata['id']}}">
												<input type="text" name="PropertyTittle" value="{{ $editdata['PropertyTittle']}}"  class="form-control" id="inputDefault"  placeholder=" Property Tittle">
											</div>
										</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2 " for="inputDefault">Property Address </label>
												<div class="col-lg-3">
												
													<input type="text" name="Propertyaddress" value="{{ $editdata['Propertyaddress']}}"   class="form-control" id="inputDefault"  placeholder="Property Name">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Property Type</label>
												<div class="col-lg-3">
													<input type="text" name="Propertytype" value="{{ $editdata['Propertytype']}}" class="form-control" id="inputDefault"  placeholder="Property Type">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Price</label>
												<div class="col-lg-3">
													<input type="text" name="Propertyprice" value="{{ $editdata['Propertyprice']}}" class="form-control" id="inputDefault"  placeholder="Property Price">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">City</label>
												<div class="col-lg-3">
													<input type="text" name="City" value="{{ $editdata['City']}}" class="form-control" id="inputDefault" placeholder="City">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Area</label>
												<div class="col-lg-3">
													<input type="text" name="Area" value="{{ $editdata['Area']}}" class="form-control" id="inputDefault"  placeholder="Area">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Description</label>
												<div class="col-lg-3">
													<input type="text" name="Description" value="{{ $editdata['Description']}}" class="form-control" id="inputDefault"  placeholder="Description">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">contact</label>
												<div class="col-lg-3">
													<input type="text" name="contact" value="{{ $editdata['contact']}}"class="form-control" id="inputDefault"  placeholder="Contact">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Timer</label>
												<div class="col-lg-3">
													<input type="text" name="Timer" value="{{ $editdata['Timer']}}"class="form-control" id="inputDefault"  placeholder="Contact">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Starting bid Amount</label>
												<div class="col-lg-3">
													<input type="text" name="bidamount" value="{{ $editdata['bidamount']}}"class="form-control" id="inputDefault"  placeholder="Contact">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">mage</label>
												<div class="col-lg-3">
													<input type="file" name="Image" value="{{ $editdata['Image']}}" class="form-control" id="inputDefault"  placeholder="Image">
												</div>
											</div>
                                                <div class="col-lg-3 control-label text-lg-right pt-2">

                                                <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
											</div>
										
										</form>
									</div>
								</section>
				
@endsection
