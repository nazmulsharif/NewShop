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
							<th>Sl no</th>
							<th>Category Name</th>
							<th>Category Description</th>
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
						@php ($i=1)
						@foreach($categories as $category)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$category->category_name}}</td>
							<td>{{$category->category_description}}</td>
							<td>{{$category->publication_status==1?'published':'unpublished'}}</td>
							<td>
								@if($category->publication_status==1)
									<a href="{{Route('unpublished-category',['id'=>$category->id])}}" class="btn btn-primary btn-xs">
										<span class="">
											<i class="fas fa-upload"></i>
										</span>
									</a>
								@else
									<a href="{{Route('published-category',['id'=>$category->id])}}" class="btn btn-warning btn-xs">
										<span class="">
											<i class="fas fa-download"></i>
										</span>
									</a>
								@endif
								<a href="{{Route('edit-category',['id'=>$category->id])}}" class="btn btn-info btn-xs">
									<span class="">
										<i class="fas fa-edit"></i>
									</span>
								</a>
								<a href="{{Route('delete-category',['id'=>$category->id])}}" class="btn btn-danger btn-xs">
									<span class="">
										<i class="fas fa-trash"></i>
									</span>
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