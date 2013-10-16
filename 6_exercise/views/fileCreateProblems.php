<?php

	function fileCreateProblems($problems) { ?>
		
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				include 'views/head.php';
			?>
			<body>
				<?php
					include 'views/title.php';
				?>
				<h2> Some problems occured : </h2>
				<ul>
				<?php
					$arrlength = count($problems);
					for($x = 0; $x < $arrlength; $x++) { 
						echo "<li id='error'> $problems[$x] </li>";
					}
				?>
				</ul>
				<p> Please <a href="index.php?resource=home"> Try again </a> </p>	
				<?php
					include 'views/footer.php'; 
				?>
			</body>
		</html>
<?php }

	fileCreateProblems($problems);

?>
