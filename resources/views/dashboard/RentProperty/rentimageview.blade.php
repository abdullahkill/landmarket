















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
								</div>
						
								<h2 class="card-title">Image</h2>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
										<!-- <a href="{{('/rentform')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a> -->
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
										<th>#</th>
											<th> Image </th> 
											<th>Property_name</th> 
											<th>Change</th>
											<th>Update Image </th>
										</tr>
									</thead>
									<tbody>
								
<?php $i=1;?>
                                    @foreach($show as $shows)
									<tr>
					<td>{{ $i++}}</td>
                    <td><img src="{{asset('storage/rent_image/'.$shows->image)}}" style="height:90px; width:130px"></td>
					<td>
 
                    {{$shows->rentproperty->Name}}</td>
        <td>
		<form action="{{route('update/image')}}" method="POST" enctype="multipart/form-data" >
		@csrf
		<input type="file" name="image">
		<input type="hidden" name="id" value="{{$shows->id}}">
		
		</td>
		<td>
		<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success" value="Update image">
		</div>
		</form>
		</td>
					
                    <!-- {{-- <td class="actions"> --}}
                      
                        {{-- <a href="{{"Click_Edit/".$shows['id']}}>  "class="on-default edit-row" ><i class="fas fa-pencil-alt"></i></a> --}}
                        
						 {{-- <a href={{"Click_Delete/".$shows['id']}}><i class="far fa-trash-alt" ></i> </a> --}}
{{-- </td> --}}
					 -->
                            
                        
                </tr>
                @endforeach
									</tbody>
								</table>
							</div>
						</section>
						@endsection