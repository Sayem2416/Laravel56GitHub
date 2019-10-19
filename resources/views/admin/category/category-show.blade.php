<!DOCTYPE html>
<html>
<head>
	<title>Category Show </title>
</head>
<body>
	<?php $i=1; ?>
	<h2 style="color: green;text-align: center;">{{ Session::get('message') }}</h2>
	<table align="center" border="1" width="80%" style="color: darkblue;">
		<caption><h2 style="color:green;">All Category</h2></caption>
		<tr>
			<th>SI.</th>
			<th>Name</th>
			<th>Description</th>
			<th>Publication Status</th>
			<th>Action</th>

		</tr>



		@foreach($categories as $cat)
		<tr align="center">
			<td>{{ $i++ }}</td>
			<td>{{ $cat->categoryName }}</td>
			<td>{{ $cat->categoryDescription }}</td>
			<td>{{ ($cat->publicationStatus == 1)? 'Published' : 'Unpublished' }}</td>
			<td><a href="{{ url('/category/edit/'.$cat->id) }}"> Edit </a>|
				<a href="{{ url('/category/delete/'.$cat->id) }}" onclick="return confirm('Are You Sure To Delete')"> Delete </a>
			</td>
			
		</tr>



			
		@endforeach
		</table>
</body>
</html>