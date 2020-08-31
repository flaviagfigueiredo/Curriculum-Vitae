<?php 
include("includes/data.php");
include("includes/functions.php");


$pageTitle = "Sections";
$section = null;


if (isset($_GET["sec"])) {
  if ($_GET["sec"] == "Education") {
    $pageTitle = "Education";
    $section = "education";
  } else if ($_GET["sec"] == "Experience") {
    $pageTitle = "Experience";
    $section = "experience";
  } else if ($_GET["sec"] == "Projects") {
    $pageTitle = "Projects";
    $section = "projects";
  }
}

include("includes/header.php"); ?>

<div class="section catalog page">
  
  <div class="wrapper">
    
    <h1><?php 
    if ($section != null) {
      echo "<a href='body.php'>Sections</a> &gt; ";
    }
    echo $pageTitle; ?></h1>
  </div>
  
</div>

<?php include("includes/footer.php"); ?>

?>

