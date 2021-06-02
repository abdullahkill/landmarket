@extends('dashboard.layouts.master')
@section('title')
@section('content')
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
						
								<h2 class="card-title">Default</h2>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
										<a href="{{('/rentform')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
										<th>price</th>
											<th> Phone </th> 
											<th>Area</th> 
											<th>Image</th>
										</tr>
									</thead>
									<tbody>
									@foreach($data as $list)
									<tr>
					<td>{{ $list->price}}</td>
                    <td>{{ $list->Phone}}</td>
					<td>{{ $list->Area}}</td>
					<td> <a href="/view_image/{{$list->id}}" class="btn btn-info">view image</a></td>
					
					
					
                    <!-- {{-- <td class="actions"> --}}
                      
                        {{-- <a href="{{"Click_Edit/".$list['id']}}>  "class="on-default edit-row" ><i class="fas fa-pencil-alt"></i></a> --}}
                        
						 {{-- <a href={{"Click_Delete/".$list['id']}}><i class="far fa-trash-alt" ></i> </a> --}}
{{-- </td> --}}
					 -->
                            @csrf
                            @method('delete')
                            
                        
                </tr>
                @endforeach
									</tbody>
								</table>
							</div>
						</section>
						@endsection