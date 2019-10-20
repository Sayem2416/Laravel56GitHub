@extends('admin.master')

@section('title',"Add-Product")

@section('dashboardContentTitle')
<!-- <section class="content">
	<div class="container-fluid">
		<div class="row">
	        <div class="col-lg-2">
	            <h4 class="page-header" style="color: #16a085">All cegory</h4>
	        </div>
	    </div>
	</div>
</section> -->
@endsection

@section('productShow')
	<?php $i=1; ?>
	<br>
<section class="content">
	<div class="container-fluid">

		<p>
			<a href="{{ url('/product/add') }}" class="btn btn-primary">Add New Product</a>
		</p>

	<h3 style="color: green;text-align: center;">{{ Session::get('message') }}</h3>
<<<<<<< HEAD
	<!-- <table align="center" border="2" width="100%" class="table table-striped"> -->
=======
	<!-- <table align="center" border="2" width="100%" class="table table-striped"> -->
	<table align="center" border="2" width="100%" class="table table-borderd table-condensed table-hover">
>>>>>>> 286a217... Class-07-HW-(16.10.19)Product Add and Table Relation-Picture Upload with Rename

		<!-- <caption><h4 style="color:green;text-align: center;">All cegory</h4></caption> -->
		
		<tr style="background-color: #16a085; color:#fff;">
			<th style="text-align: center;">SI.</th>
			<th style="text-align: center;">Product Name</th>
<<<<<<< HEAD
			<!-- <th style="text-align: center;">Price</th>
			<th style="text-align: center;">Qty</th>
			<th style="text-align: center;">Product Description</th>
			<th style="text-align: center;">Product Picture</th>
			<th style="text-align: center;">c Id</th> -->
=======
			<th style="text-align: center;">Category Name</th>
			<th style="text-align: center;">Price</th>
			<th style="text-align: center;">Quantity</th>
			<th style="text-align: center;">Product Description</th>
			<th style="text-align: center;">Product Picture</th>
			<th style="text-align: center;">CatId</th>
>>>>>>> 286a217... Class-07-HW-(16.10.19)Product Add and Table Relation-Picture Upload with Rename
			<th style="text-align: center;">Publicion Status</th>
			<th style="text-align: center;">Action</th>

		</tr>



		@foreach($product as $c)
		<tr align="center">
			<td>{{ $i++ }}</td>
			<td>{{ $c->productName }}</td>
<<<<<<< HEAD
=======
			<td>{{ $c->CategoryName }}</td>
>>>>>>> 286a217... Class-07-HW-(16.10.19)Product Add and Table Relation-Picture Upload with Rename
			<td>{{ $c->price }}</td>
			<td>{{ $c->qty }}</td>
			<td>{{ $c->productDescription }}</td>
			<td><img src="{{ asset($c->productPic) }}" width="50px" height="40px"> </td>
			<!-- <td><img src="{{ asset('admin/productUploadPic/01.jpg') }}" width="50px"> </td> -->
			<td>{{ $c->cat_id }}</td>
			<td>{{ ($c->publicionStatus == 1)? 'Published' : 'Unpublished' }}</td>
			<td><a style="color: black;" href="{{ url('/dashboard/edit/'.$c->id) }}" class="btn btn-primary"> Edit </a> |
				<a style="color: black;" href="{{ url('/product/delete/'.$c->id) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger"> Delete </a>
			</td>
			
		</tr>



			
		@endforeach
		</table>

		{{ $product->render() }}

	</div>
</section>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
