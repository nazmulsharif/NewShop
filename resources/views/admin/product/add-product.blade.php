@extends('admin.includes.admin-master')
@section('body')
<div class="add" style="width: 50%;margin:auto">
	<div class="row">
		<div class="card">
			<div class="card-header">
				<h4 class="text-center text-success">Add Product Form</h4>
			</div>
			<div class="card-body">
				<h2 class="text-center text-success">{{Session::get('message')}}</h2>
				{{Form::open(['route'=>'save-product','method'=>'POST','enctype'=>'multipart/form-data'])}}
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Category name</label>
							</div>
							<div class="col-md-8">
								<select name="category-name"  class="form-control">
									<option>--select category name--</option>
									@foreach($categories as $category)
									<option value={{$category->id}}>{{$category->category_name}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Brand name</label>
							</div>
							<div class="col-md-8">
								<select name="brand-name" value="brand_id" class="form-control">
									<option>--select Brand name---</option>
									@foreach($brands as $brand)
									<option value="{{$brand->id}}">{{$brand->brand_name}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Product name</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="product_name" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Product price</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="product_price" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Product image</label>
							</div>
							<div class="col-md-8">
								<input type="file" name="product_image" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control" >Short Description</label>
							</div>
							<div class="col-md-8">
								<textarea class="form-control"name="short_description"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control" >Short Description</label>
							</div>
							<div class="col-md-8">
								<textarea class="form-control"name="short_description"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Publication Status</label>
							</div>
							<div class="col-md-8">
								<label><input type="radio" name="publication_status" value="1">Published</label>
								<label><input type="radio" name="publication_status" value="0">Unpublished</label>
							</div>
				
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<input type="submit"  class="btn btn-success" value="save product info">
							</div>
						</div>
						
						
					</div>
				{{ form::close() }}
				
			</div>
			
		</div>
	</div>
</div>
@endsection