@extends('admin.master')

@section('title',"Custom SB Admin 2 - Bootstrap Admin Theme")

@section('dashboardContentTitle')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><!-- Add --></h2>
        </div>
    </div>
@endsection

@section('dashboardCategoryAdd')

<!-- OLD ADD FORM START HERE -->

<!-- <center>
	
		<h2 style="color: green;">{{ Session::get('message') }}</h2>
		<h2 style="color: darkorange;">Add the product Category</h2>
			{!! Form::open(['url'=>'dashboard/entry','method'=>'post']) !!}
			
				Name:<input type="text" name="catName"><br>
				Description:<textarea name="catDescription"></textarea><br>
				Publication Status:
				<select name="pstatus">
						<option value="1">Published</option>
						<option value="2">Unpublished</option>
				</select><br>
				<input type="submit" name="Submit" value="Submit">

			{!! Form::close() !!}
		 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
	
</center> -->

<!-- OLD ADD FORM END HERE -->


	<div class="row">
			<p align="center">
				<a href="{{ url('/dashboard/show') }}" class="btn btn-primary" >Click to see All Category</a>
			</p>
			<h2 style="color: green;text-align: center;">{{ Session::get('message') }}</h2>
			<div class="col-md-6 col-md-offset-3">
				<div class="container-fluid">
					<!-- <h4>Add Category</h4> -->

					<label class="control-label" for="productname">Add New Category</label>
					{!! Form::open(['url'=>'dashboard/entry','method'=>'post']) !!}
						<div class="form-group has-success has-feedback">
						  <label class="control-label" for="productname">Name</label>
						  <input type="text" class="form-control" name='catName'  aria-describedby="usernameStatus">
				  		</div>
						
						
						<div class="form-group has-success has-feedback">
						  <label class="control-label" for="desc">Description</label>
						  <textarea class="form-control" name='catDescription'  aria-describedby="usernameStatus">
						  </textarea>
						  </div>
						 
						<div class="form-group has-success has-feedback">
						  <label class="control-label" >Publication Status</label>
						  <select class="form-control" name='pstatus' aria-describedby="phoneStatus">
						  	<option value='1'>Published</option>
				    		<option value='2'>Unpublished</option>
						  </select>
						</div>
				  		
						 <br>
						  <button type="submit" value="submit" name="Submit" class="btn btn-primary btn-block">Submit</button>

					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
		<br><br><br><br><br><br><br><br><br><br><br><br><br> 

@endsection