<?php
include("includes/data.php");


function get_education($item) {
	$output = '<div><h2 class="subtitle">' . $item["school"] . ' (' .  $item["start_year"] . '-' . $item["end_year"]  .') </h2><p>' .  $item["type"] . ' em ' .  $item["degree"] . '</p></div>';
	return $output;
}

function get_experience($item) {
	$output = '<div><h2 class="subtitle">' . $item["company"] . ' (' .  $item["start_year"] . '-' . $item["end_year"]  .') </h2><p>' .  $item["position"] . '</p><p>' . $item["description"] .'</p></div>';
	return $output;
}

function get_projects($item) {
	$output = '<div class="biocard">
					<div class="col-6" style="float:right">
						<img class="project-logo" src="' . $item["images"]["logo"] . '">
						<h3 style="text-align:right">Tecnologias Usadas</h3>
						<ul class="tech">'
						. get_tec($item["technologies"]) .
						'</ul>
					</div>
					<div class="col-6" style="display: flow-root;"">
						<div class="row title">
							<span><a href="' . $item["link"] . '">' . $item["name"] . '</a><strong> (' . $item["year"] . ') </strong></span>' .
						'</div>
						<div>
						<h2 class="subtitle">' . $item["role"] . '</h2>
						<p>' . $item["description"] . '</p></div>

						
					</div>
			    </div>';
	return $output;
}

function get_tec($data){
	foreach($data as $item){
		$output .= '<li>' . $item . '</li>';
		}
		return $output;
	}
?>

