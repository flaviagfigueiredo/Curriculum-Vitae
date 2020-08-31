<?php include("includes/data.php");?>
<?php include("includes/functions.php");?>

			<div class="col-lg-8">
				<div class="biocard">
					<div class="row title">
						<span>About Me</span>
					</div>
				
					<div class="col-6">
						
					</div>
				</div>
				
				<br/>
				
				<div class="biocard">
					<div class="row title">
						<span>Education</span>
					</div>
					<div class="row">
						<?php
							foreach($education as $item) {
								echo get_education($item);
							}
						?>					
					</div>
				</div>
				
				<div class="biocard">
					<div class="row title">
						<span>Experience</span>
					</div>
					<div class="row">
						<?php
							foreach($experience as $item) {
								echo get_experience($item);
							}
						?>					
					</div>
				</div>
		</div>
		</div>
	</div>
</body>

