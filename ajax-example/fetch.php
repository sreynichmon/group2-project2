<?php
$connect = mysqli_connect("localhost", "root", "", "ajaxexample");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_anime 
	WHERE Title LIKE '%".$search."%'
	OR Description LIKE '%".$search."%' 
	OR Author LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tbl_anime ORDER BY Title";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Author</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Title"].'</td>
				<td>'.$row["Description"].'</td>
				<td>'.$row["Author"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>