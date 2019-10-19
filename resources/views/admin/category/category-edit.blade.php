<!DOCTYPE html>
<html>
<head>
	<title>Category Add</title>
</head>
<body>
	<center>
		<h2 style="color: green;">{{ Session::get('message') }}</h2>
		<h2 style="color: blue;">Update Category</h2>

		{{ $categoryById->categoryName }}
			{!! Form::open(['url'=>'category/update','method'=>'post','name'=>'edit-form']) !!}
			
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

			</script>
		
	</center>
</body>
</html>