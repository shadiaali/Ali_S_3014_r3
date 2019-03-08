<?php require_once('admin/scripts/config.php');
if(isset($_GET['id'])){
	$tbl = 'tbl_movies';
	$col = 'movies_id';
	$id = $_GET['id'];
	$results = getSingle($tbl,$col,$id);
}else{
	echo 'Missing Movie ID';
	exit;
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movie Details</title>
</head>
<body>
	<?php include('templates/header.php');?>

	<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
		<div>
			<h2>Movie Title: <?php echo $row['movies_title'];?></h2>
			<p>Movie Year: <?php echo $row['movies_year'];?></p>
			<img src="images/<?php echo $row['movies_cover'];?>" alt="">
		</div>
	<?php endwhile;?>
	<?php include('templates/footer.php');?>
</body>
</html>
