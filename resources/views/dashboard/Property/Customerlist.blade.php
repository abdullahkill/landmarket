@extends('dashboard.layouts.master')
@section('title')
@section('content')
<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
						
								<h2 class="card-title">Default</h2>
							</header>
							<body>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6" class="col-lg-8">
										<div class="mb-3">
											<a href="{{('/customerform')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a>
											
											
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
											<th>CustName</th>
											<th>Email</th>
											<th>Address</th>
											<!-- <th>Address</th> -->
											 <!-- <th>Age</th>
											 <th>Address</th> 
											 <th>City</th>
											<th>PostCode</th> 
											<th>Country</th>
											<th>state</th>  -->
											 <!-- <th>CusPhone</th> 
											<th>AgentName</th>
											<th>lastName</th>
											<th>Gender</th> 
											<th>Address</th>
											<th>AgentPhone</th>
											 <th>Country</th>
											<th>state</th>  
											<th>phone</th> -->
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										
									@foreach($customer as $cust)
										<!-- <tr data-item-id="1"> -->
										<td>{{ $cust->CustomerName}}</td>
										<td>{{ $cust->Email}}</td>
										<td>{{ $cust->Gender}}</td>
										<!-- <td>{{ $cust->CustomerAge}}</td> -->
										<!-- <td>{{ $cust->CustomerAddress}}</td>
										<td>{{ $cust->CustomerCity}}</td>	
										<td>{{ $cust->CustomerPostCode}}</td>
										<td>{{ $cust->CustomerCountry}}</td>
										<td>{{ $cust->CustomerState}}</td>
										<td>{{ $cust->CustomerCity}}</td> -->
										<!-- <td>{{ $cust->CustomerPhone}}</td>
										<td>{{ $cust->AgentFirstName}}</td>
										<td>{{ $cust->AgentLastName}}</td>
										<td>{{ $cust->AgentGender}}</td>
										<td>{{ $cust->AgentAddress}}</td>
										<td>{{ $cust->AgentCountry}}</td>
										<td>{{ $cust->AgentState}}</td>
										<td>{{ $cust->AgentPhone}}</td> -->
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										@endforeach	
									
									</tbody>
								</table>
							</div>
							</body>
						</section>
@endsection