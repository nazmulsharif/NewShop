@extends('admin.includes.admin-master')
@section('body')
<div class="add" style="width: 50%;margin:auto">
	<div class="row">
		<div class="card">
			<div class="card-header">
				<h4 class="text-center text-success">edit Brand Form</h4>
			</div>
			<div class="card-body">
				<h2 class="text-center text-success">{{Session::get('message')}}</h2>
				<form action="{{Route('brand-update')}}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">brand name</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="brand_name" value="{{ $brand->brand_name}}"class="form-control">
								<input type="hidden" name="brand_id" value="{{ $brand->id}}"class="form-control">
							</div>
				
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control" >Brand Description</label>
							</div>
							<div class="col-md-8">
								<textarea class="form-control"name="brand_description">{{ $brand->brand_description}}</textarea>
							</div>
				
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label class="label-control">Publication Status</label>
							</div>
							<div class="col-md-8">
								<label><input type="radio" name="publication_status" {{ $brand->publication_status==1? 'checked':''}} value="1">published</label>
								<label><input type="radio" name="publication_status" {{ $brand->publication_status==0? 'checked':''}} value="0">Unpublished</label>
							</div>
				
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<input type="submit"  class="btn btn-success" value="update brand info">
							</div>
						</div>
						
						
					</div>
				</form>
				
			</div>
			
		</div>
	</div>
</div>
@endsection