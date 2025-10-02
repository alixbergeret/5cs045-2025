<!-- Let's include our templates first -->
<?php include("templates/header.php");?>
<?php include("templates/nav.php");?>

<h1>Hello, world!</h1>
<p>Hi</p>

<?php
	// Define a simple array
	$cars = array("Volvo", "BMW", "Toyota");
?>

<table class="table table-striped">
	<?php foreach($cars as $one_car):?>
		<tr><td><?=$one_car?></td><tr>
	<?php endforeach;?>
</table>

<?php include("templates/footer.php");?>		
