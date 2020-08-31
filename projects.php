<?php 
include("includes/data.php");
include("includes/functions.php");


$pageTitle = "Projects";
$section = null;

include("includes/header.php"); ?>

<div class="col-lg-8">
	<?php
		foreach($projects as $item) {
			echo get_projects($item);
		}
	?>
</div>

<?php include("includes/footer.php"); ?>
