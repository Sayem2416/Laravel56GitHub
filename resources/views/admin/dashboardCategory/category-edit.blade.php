@extends('admin.master')

@section('title',"Custom SB Admin 2 - Bootstrap Admin Theme")

@section('dashboardContentTitle')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><!-- Edit --></h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

@section('dashboardCategoryEdit')
<!-- OLD EDIT FORM START HERE -->
		<!-- <h2 style="color: green;">{{ Session::get('message') }}</h2>
		<h2 style="color: blue;">Update Category</h2>

		{{ $categoryById->categoryName }}
			{!! Form::open(['url'=>'dashboard/update','method'=>'post','name'=>'edit-form']) !!}
			
				Name:<input style="color: green;" type="text" name="catName" value="{{ $categoryById->categoryName }}" ><br>
				Description:<textarea name="catDescription">{{ $categoryById->categoryDescription }}</textarea><br>
				Publication Status:
				<select name="pstatus">
						<option value="1">Published</option>
						<option value="2">Unpublished</option>
				</select><br>
				<input type="hidden" value="{{ $categoryById->id }}" name="catId" >
				<input type="submit" name="Submit" value="Submit">

			{!! Form::close() !!}

			<script type="text/javascript">
				document.forms['edit-form'].elements['pstatus'].value='{{ $categoryById->publicationStatus }}'

			</script> -->
<!-- OLD EDIT FORM END HERE -->

	<div class="row">
		<p align="center">
				<a href="{{ url('/dashboard/show') }}" class="btn btn-primary" >All Category</a>
				<a href="{{ url('/dashboard/add') }}" class="btn btn-primary">Add New Category</a>
		</p>
			<div class="col-md-6 col-md-offset-3">

				<div class="container-fluid">
					<!-- <h4>Update Category</h4> -->
					<label class="control-label">Update Category</label>
					{!! Form::open(['url'=>'dashboard/update','method'=>'post','name'=>'edit-form']) !!}
						<div class="form-group has-success has-feedback">
						  <label class="control-label" for="productname">Product Name</label>
						  <input type="text" class="form-control" name='catName' value="{{ $categoryById->categoryName }}"  aria-describedby="usernameStatus">
				  		</div>
						
						
						<div class="form-group has-success has-feedback">
						  <label class="control-label" for="desc">Description</label>
						  <textarea class="form-control" name="catDescription">{{ $categoryById->categoryDescription }}

						  </textarea>
						  </div>
						 
						<div class="form-group has-success has-feedback">
						  <label class="control-label" >Publish Status</label>
						  <select class="form-control" name='pstatus' >
						  	<option value='1'>Published</option>
				    		<option value='2'>Unpublished</option>
						  </select>
						  <input type="hidden" value="{{ $categoryById->id }}" name="catId" >
						</div>
				  		
						 <br>
						  <button type="submit" value="Submit" name="Submit" class="btn btn-primary btn-block">Submit</button>

					{!! Form::close() !!}
					<script type="text/javascript">

						document.forms['edit-form'].elements['pstatus'].value='{{ $categoryById->publicationStatus }}'

					</script>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
	

@endsection