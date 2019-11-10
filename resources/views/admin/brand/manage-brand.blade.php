@extends('admin.includes.admin-master')
@section('body')
	<br/>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h3 class="text-center text-success">{{Session::get('message')}}</h3>
					<table class="table table-bordered">
						<tr class="bg-primary text-light">
							<th>Sl</th>
							<th>Brand Name</th>
							<th>Brand Description</th>
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
						@php ($i=1)
						@foreach($brands as $brand)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $brand-> brand_name }}</td>
							<td>{{ $brand-> brand_description }}</td>
							<td>{{ $brand-> publication_status == 1 ? 'published' : 'unpublished' }}</td>
							<td>
								@if($brand ->publication_status == 1)
									<a href="{{Route('unpublished-brand',['id'=>$brand->id])}}" class="btn btn-success btn-xs">
										<span><i class="fas fa-upload"></i></span>
									</a>
							    @else
							    	<a href="{{Route('published-brand',['id'=>$brand->id])}}" class="btn btn-warning btn-xs">
										<span><i class="fas fa-download"></i></span>
									</a>
								@endif
								<a href="{{ Route('brand-edit',['id' => $brand->id]) }}" class="btn btn-info btn-xs">
									<span><i class="fas fa-edit"></i></span>
								</a>
								<a href="{{ Route('brand-delete',['id' => $brand->id]) }}" class="btn btn-danger btn-xs">
									<span><i class="fas fa-trash"></i></span>
								</a>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection