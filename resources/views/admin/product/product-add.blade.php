@extends('admin.master')

@section('title',"Custom SB Admin 2 - Bootstrap Admin Theme")

@section('dashboardContentTitle')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><!-- Add --></h2>
        </div>
    </div>
@endsection

@section('productAdd')

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
				<a href="{{ url('/product/show') }}" class="btn btn-primary" >Click to see All Product</a>
			</p>

			<h2 style="color: green;text-align: center;">{{ Session::get('message') }}</h2>
			
			<div class="col-md-6 col-md-offset-3">
				<div class="container-fluid">
					<!-- <h4>Add Category</h4> -->
					<label class="control-label" for="productname">Add New Product</label>
					{!! Form::open(['url'=>'product/entry','method'=>'post','enctype'=>'multipart/form-data']) !!}
						<div class="form-group has-success has-feedback">
						  <label for="productName" class="control-label" for="productname">Name</label>
						  <input type="text" class="form-control" name='productName'  aria-describedby="usernameStatus" id="productName">
				  		</div>

				  		<div class="form-group has-success has-feedback">
						  <label for="cat_id" class="control-label" for="productname">Category</label>
						  
						  <select class="form-control" name='cat_id'  aria-describedby="usernameStatus" id="cat_id">
						  	@foreach($category as $v)
						  	<option value="{{ $v->id }}">{{ $v->categoryName }}</option>
						  	@endforeach
						  </select>
				  		</div>

						<div class="form-group has-success has-feedback">
						  <label for="price" class="control-label" for="productname">Price</label>
						  <input type="text" class="form-control" name='price'  aria-describedby="usernameStatus" id="price">
				  		</div>

						<div class="form-group has-success has-feedback">
						  <label for="qty" class="control-label" for="productname">Quantity</label>
						  <input type="text" class="form-control" name='qty'  aria-describedby="usernameStatus" id="qty">
				  		</div>

						

						
						<div class="form-group has-success has-feedback">
						  <label class="control-label" for="productDescription">Description</label>
						  <textarea  class="form-control" name='productDescription'  aria-describedby="usernameStatus" id="productDescription">
						  </textarea>
						  </div>
						 
						<div class="form-group has-success has-feedback">
						  <label for="productPic" class="control-label" for="productname">Picture</label>
						  <input type="file" class="form-control" name='productPic'  aria-describedby="usernameStatus" id="productPic">
				  		</div>

						<div class="form-group has-success has-feedback">
						  <label for="productStatus" class="control-label" >Publication Status</label>
						  <select class="form-control" name='productStatus' aria-describedby="phoneStatus" id="productStatus">
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