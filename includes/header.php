<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" contents="Curriculum Vitae">
        
        <!-- Style -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700" rel="stylesheet">

        <!-- Boostrap v3.3.7 -->
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
	<body>

		<nav class="navbar">
			<div class="container">
    			<ul class="menu">
					<li class="education<?php if ($section == "education") {echo " on";} ?>"><a href="index.php?">About Me</a></li>
					<li class="projects<?php if ($section == "projects") {echo " on";} ?>"><a href="projects.php">Projects</a></li>
					<li class="experience<?php if ($section == "experience") {echo " on";} ?>"><a href="body.php?sec=contactme">Contact Me</a></li>
    			</ul>
			</div>
		</nav>
		<div id="main-contents">

		<div class="row">
			<div class="col-lg-4">
				<div class="biocard intro">
					<div class="logo">
						<img src="img/profile.png">
					</div>
					<h3 style="text-align:center;" id="fullname">Flávia Figueiredo</h3>
					<p  style="text-align:center;">Estudante de Engenharia Informática</p>
					<ul class="personal-info">
                		<li>
                		  <p> <span> Idade</span> 20 Anos </p>
                		</li>
                		<li>
                		  <p> <span> Localidade</span> Viseu / Aveiro </p>
                		</li>
                		<li>
                		  <p> <span> Grau de Escolaridade</span> Licenciatura em Engenharia Informática </p>
                		</li>
                		<li>
                		  <p> <span> Telefone</span> (+351) 927 573 669 </p>
                		</li>
                		<li>
                		  <p> <span> E-mail</span> <a href="#."> flaviagomesfigueiredo@gmail.com</a> </p>
                		</li>
                	</ul>
                	<div class="icons-section">
                		<p>
							<img id="linkedin" src="img/linkedin.svg">
							<span><a href="www.linkedin.com/in/flavia-figueiredo">linkedin.com/in/flavia-figueiredo</a></span>
						</p>
						<p>
							<img id="github" src="img/github.svg">
							<span><a href="www.github.com/flaviagfigueiredo">github.com/flaviagfigueiredo</a></span>
						</p>
					</div>
				</div>
			</div>