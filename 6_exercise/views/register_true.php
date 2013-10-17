<?php

	function view_register_true() { ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				include 'views/head.php';
			?>
			<body>
				<?php
					include 'views/title.php';
				 ?>
				<p> Good Job! From now on you are a "boom uploder" user. 
				Click <a href="index.php?resource=file&method=create">here </a> to begin your journey </p>
				<?php			
					include 'views/footer.php';
				?>
			</body>
		</html> 

<?php } 

	view_register_true();

?>
