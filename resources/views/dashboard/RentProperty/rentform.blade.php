@extends('dashboard.layouts.master')
@section('title')
@section('content')
<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Rent Property Form</h2>
									</header>
									<div class="card-body">
										<form action="rentaddData" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" >
                                        @csrf
											
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2 " for="inputDefault">Rent Property Name </label>
												<div class="col-lg-3">
													<input type="text" name="Name" class="form-control" id="inputDefault"  placeholder="Property Name">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault"> Phone </label>
												<div class="col-lg-3">
													<input type="text" name="Phone"  class="form-control" id="inputDefault"  placeholder="Phone Number">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Email</label>
												<div class="col-lg-3">
													<input type="text" name="Email" class="form-control" id="inputDefault"  placeholder="Email ">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">EmgContact</label>
												<div class="col-lg-3">
													<input type="text" name="EmgContact" class="form-control" id="inputDefault" placeholder="EmgergencyContact">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Area</label>
												<div class="col-lg-3">
													<input type="text" name="Area" class="form-control" id="inputDefault"  placeholder="Area">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Description</label>
												<div class="col-lg-3">
													<input type="text" name="Description" class="form-control" id="inputDefault"  placeholder="Description">
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Price</label>
												<div class="col-lg-3">
													<input type="text" name="price" class="form-control" id="inputDefault"  placeholder="Price">
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

                                                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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