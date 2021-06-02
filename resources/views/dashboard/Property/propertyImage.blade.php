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
						
										<h2 class="card-title">List Of Property</h2>
									</header>
									<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											
											
											<!-- <button id="addToTable" href="{{('/customerform')}}" class="btn btn-primary" >Add <i class="fas fa-plus"></i></button> -->
										</div>
									</div>
								</div>
										<table id="datatable" class="table table-responsive-md mb-0">
											<thead>
												<tr>
													<th>Property Tittle</th>
													<th>Property Address</th>                                                                              
													<th>Actions</th>


												</tr>
											</thead>
											<tbody>
											@foreach($data as $list)
											<form action="/" method="">
                <tr>
					<td>{{ $list->image}}</td>
                    <td>{{ $list->property_id }}</td>
					
	
                            
                        
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
                        