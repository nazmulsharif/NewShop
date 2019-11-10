@extends('admin.includes.admin-master')
@section('body')
<div class="add" style="width: 50%;margin:auto">
	<div class="row">
		<div class="card">
			<div class="card-header">
				<h4 class="text-center text-success">Add Brand Form</h4>
			</div>
			<div class="card-body">
				<h2 class="text-center text-success">{{Session::get('message')}}</h2>
				{{ Form::open(['route'=>'save-brand','method'=>'post']) }}
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Brand name</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="brand_name" class="form-control">
								<span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ''}}</span>
							</div>
				
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control" >Brand Description</label>
							</div>
							<div class="col-md-8">
								<textarea class="form-control"name="brand_description"></textarea>
								<span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description'):''}}</span>
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
								<label><input type="radio" name="publication_status" value="0">Unpublished</label><br>
								<span class="text-danger">{{ $errors->has('publication_status')? $errors->first('publication_status'):''}}</span>
							</div>
				
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<input type="submit"  class="btn btn-success" value="save brand info">
							</div>
						</div>
						
						
					</div>
				{{ form::close() }}
				
			</div>
			
		</div>
	</div>
</div>
@endsection