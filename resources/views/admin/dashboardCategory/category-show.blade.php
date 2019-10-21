@extends('admin.master')

@section('title',"Custom SB Admin 2 - Bootstrap Admin Theme")

@section('dashboardContentTitle')
<!-- <section class="content">
	<div class="container-fluid">
		<div class="row">
	        <div class="col-lg-2">
	            <h4 class="page-header" style="color: #16a085">All Category</h4>
	        </div>
	    </div>
	</div>
</section> -->
@endsection

@section('dashboardCategoryShow')
	<?php $i=1; ?>
	<br>
<section class="content">
	<div class="container-fluid">

		<p>
			<a href="{{ url('/dashboard/add') }}" class="btn btn-primary">Add New Category</a>
		</p>

	<h3 style="color: green;text-align: center;">{{ Session::get('message') }}</h3>
	<table align="center" border="2" width="100%" class="table table-striped">

		<!-- <caption><h4 style="color:green;text-align: center;">All Category</h4></caption> -->
		
		<tr style="background-color: #16a085; color:#fff;">
			<th style="text-align: center;">SI.</th>
			<th style="text-align: center;">Name</th>
			<th style="text-align: center;">Description</th>
			<th style="text-align: center;">Publication Status</th>
			<th style="text-align: center;">Action</th>

		</tr>



		@foreach($categories as $cat)
		<tr align="center">
			<td>{{ $i++ }}</td>
			<td>{{ $cat->categoryName }}</td>
			<td>{{ $cat->categoryDescription }}</td>
			<td>
				<a href="{{ url('/status/edit/'.$cat->id) }}" class="btn-sm btn btn-default">
					{{ ($cat->publicationStatus == 1)? 'Published' : 'Unpublished' }}
				</a>
			</td>
			<td><a style="color: black;" href="{{ url('/dashboard/edit/'.$cat->id) }}" class="btn btn-primary"> Edit </a> |
				<a style="color: black;" href="{{ url('/dashboard/delete/'.$cat->id) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger"> Delete </a>
			</td>
			
		</tr>



			
		@endforeach
		</table>

		{{ $categories->render() }}

	</div>
</section>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection