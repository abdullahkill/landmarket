@extends('dashboard.layouts.master')
@section('title')
@section('content')

<div class="row">
							<div class="col-lg-18">
								<section class="card">
									@if(Session::has("Message"))
									<div class="alert alert-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
									   {{Session::get("Message")}}
									</div>
								  @endif
							  
									<header class="card-header">
										<div class="card-actions">
										</div>
						
										<h2 class="card-title">Property Image</h2>
									</header>
									<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<!-- <a href="{{('/sellerform')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a> -->
											
											<!-- <button id="addToTable" href="{{('/customerform')}}" class="btn btn-primary" >Add <i class="fas fa-plus"></i></button> -->
										</div>
									</div>
								</div>

										<table id="datatable" class="table table-responsive-md mb-0">
										@if(Session::get('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}

</div>
@endif
											<thead>
												<tr>
													<th>No</th>
													<th>Property Tittle </th>
													<th> Property image</th>
													<th>change Image</th>
													<th> update</th>
                                                    
                                                   


												</tr>
											</thead>
											<tbody>
<?php $i=1; ?>
											@foreach($data as $list)
											
                <tr>
				
				<td>{{ $i++}}</td>
					<td>{{ $list->property->PropertyTittle }}</td>
					<td><img src="{{asset('storage/property_image/'.$list->image)}}" style="height:90px; width:130px"></td>
					<td>
		<form action="{{route('property_image')}}" method="POST" enctype="multipart/form-data" >
		@csrf
		<input type="file" name="image" required>
		<input type="hidden" name="id" value="{{$list->id}}">
		
		</td>
		<td>
		<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success" value="Update image">
		</div>
		</form>
		</td>
                        
                </tr>
				</form>
                @endforeach

												
											
                                                
											</tbody>
                                            
										</table>
									</div>
								</section>
							</div>
							
						
									
								</section>
							</div>
						
						
                        @endsection
                        
                        <script>
                        	$(document).ready( function () {
                            $('#datatable').DataTable();
                              });
                        </script>
                        