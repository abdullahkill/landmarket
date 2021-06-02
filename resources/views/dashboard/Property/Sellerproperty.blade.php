@extends('dashboard.layouts.master')
@section('title')
@section('content')

<div class="row">
							<div class="col-lg-16">
								<section class="card">
									@if(Session::has("Message"))
									<div class="alert alert-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
									   {{Session::get("Message")}}
									</div>
								  @endif
							  
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">List Of Property</h2>
									</header>
									<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<a href="{{('/sellerform')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a>
											
											<!-- <button id="addToTable" href="{{('/customerform')}}" class="btn btn-primary" >Add <i class="fas fa-plus"></i></button> -->
										</div>
									</div>
								</div>
										<table id="datatable" class="table table-responsive-md mb-0">
											<thead>
												<tr>
													<th>Property Tittle</th>
													<th>Property Address</th>
													<th> Property type</th>
													<th>Price</th>
                                                    <th>City</th>
                                                    <th>Area</th>  
													<th>Description</th>
													<th>contact</th>
													<th>Status</th>
													<th>Auction</th>
													<th>Image</th>                                                                              
													<!-- <th>Actions</th> -->


												</tr>
											</thead>
											<tbody>
											@foreach($data as $list)
											<form action="/" method="">
                <tr>
					<td>{{ $list->PropertyTittle}}</td>
                    <td>{{ $list->Propertyaddress}}</td>
					<td>{{ $list->Propertytype}}</td>
					<td>{{ $list->Propertyprice}}</td>
					<td>{{ $list->City}}</td>
					<td>{{ $list->Area}}</td>
					<td>{{ $list->Description}}</td>
					<td>{{ $list->contact}}</td>
					<td>{{ $list->Status}}</td>
					{{-- <td><input class="MyButton" type="button" value="Auction" onclick="window.location.href='/AuctionForm'" /></td> --}}
					<td><a href="{{"AuctionForm/".$list['id']}}> "class="on-default edit-row" ><i class="fas fa-list-alt"></i></a></td>
					{{-- <td><a href={{"/AuctionForm".$list['id']}}><input type="submit" class="button_active" value="Auction"></a></td> --}}
					<td> <img src="image/{{$list->Image}}" alt=" image" style="height:100px; width:100px;">  </td>
                   
                    <!-- <td class="actions">
                      
                        <a href="{{"click_edit/".$list['id']}}> "class="on-default edit-row" ><i class="fas fa-pencil-alt"></i></a>
                        
						<a href={{"click_delete/".$list['id']}}><i class="far fa-trash-alt" ></i> </a>
                        
						<a href={{"click_status/".$list['id']}}><i class="fa fa-check" aria-hidden="true"></i> </a>
						<a href={{"click_cancellation/".$list['id']}}><i class="fa fa-ban" aria-hidden="true"></i></i> </a>
                        <td>
                        
</td> -->
                            @csrf
                            @method('delete')
                            
                        
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
                        