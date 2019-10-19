<!DOCTYPE html>
<html>
<head>
	<title>Category Add</title>
</head>
<body>
	<center>
		<h2 style="color: green;">{{ Session::get('message') }}</h2>
		<h2 style="color: darkorange;">Add the product Category</h2>
			{!! Form::open(['url'=>'category/entry','method'=>'post']) !!}
			
				Name:<input type="text" name="catName"><br>
				Description:<textarea name="catDescription"></textarea><br>
				Publication Status:
				<select name="pstatus">
						<option value="1">Published</option>
						<option value="2">Unpublished</option>
				</select><br>
				<input type="submit" name="Submit" value="Submit">

			{!! Form::close() !!}
		
	</center>
</body>
</html>