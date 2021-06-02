@extends('dashboard.layouts.master')
@section('title')
@section('content')


<section class="card">
	                                    

									<header class="card-header" >
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
										<h2 class="card-title">Property Form</h2>	
									</header>
									<div class="card-body" >
										<form action="/property_list_add" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" >
                                        @csrf
										<div class="form-group row">
											<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Property Tittle</label>
											<div class="col-lg-3">
												<input type="text" name="PropertyTittle"  class="form-control" id="inputDefault"  placeholder="Propety Tittle" required>
											</div>
										</div>
										
										
											
												<input type="hidden" name="user_id"  class="form-control" id="inputDefault" value="{{Auth::user()->id}}" placeholder="id">
											
										
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2 " for="inputDefault">Property Address </label>
												<div class="col-lg-3">
													<textarea  name="Propertyaddress" class="form-control" minlength="20" maxlength="30"  placeholder="Property Address" required> </textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Property Type</label>
												<div class="col-lg-3">
													<select name = "Propertytype" class="form-control">
													<option value = "Rent">Rent</option>
													<option value = "Sale">Sale</option>
													<option value = "Wanted">Wanted </option>
													<option value = "PlotRent">PlotRent </option>
													<option value = "others">others </option>
												 </select>
												</div>
												
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Price</label>
												<div class="col-lg-3">
													<input type="text" name="Propertyprice" class="form-control" id="inputDefault" required  placeholder="Property Price">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">City</label>
												<div class="col-lg-3">
													<input type="text" name="City" class="form-control" id="inputDefault" required placeholder="City">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Area</label>
												<div class="col-lg-3">
		
														<select name = "Area" class="form-control">
														<option value = "Marla">Marla</option>
														<option value = "Acre">Acre</option>
														<option value = "kanal">kanal </option>
														<option value = "Muraba">Muraba </option>
														<option value = "others">others </option>
													 </select>
													</div>
												</div>
										
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Description</label>
												<div class="col-lg-3">
													<textarea  name="Description" class="form-control" id="inputDefault"  placeholder="Description" required> </textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">contact</label>
												<div class="col-lg-3">
													<input type="text" name="contact" class="form-control" id="inputDefault" required placeholder="Contact">
												</div>
											</div>
											<div class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-3">Upload Image</label>
				<div class="col-md-8">
					<div class="row">
						<div id="coba"></div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3"></label>
				
			</div>
		</div>	
	</div>					
											
                                                <div class="col-lg-3 control-label text-lg-right pt-2">

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
											</div>
											
										</form>
									</div>
								</section>

								@endsection


								@section('limit')

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{asset('dist/js/spartan-multi-image-picker.js')}}"></script>
   	<script type="text/javascript">
		$(function(){

			$("#coba").spartanMultiImagePicker({
				fieldName:        'fileUpload[]',
				minCount:         4,
				maxCount:         4,
				rowHeight:        '200px',
				groupClassName:   'col-md-4 col-sm-4 col-xs-6',
				maxFileSize:      '',
				placeholderImage: {
				    image: '{{asset('placeholder.png')}}',
                	width : '100%'
				},
				dropFileLabel : "Drop Here",
				onAddRow:       function(index){
					console.log(index);
					console.log('add new row');
				},
				onRenderedPreview : function(index){
					console.log(index);
					console.log('preview rendered');
				},
				onRemoveRow : function(index){
					console.log(index);
				},
				onExtensionErr : function(index, file){
					console.log(index, file,  'extension err');
					alert('Please only input png or jpg type file')
				},
				onSizeErr : function(index, file){
					console.log(index, file,  'file size too big');
					alert('File size too big');
				}
			});
		});
	</script>
        


@endsection