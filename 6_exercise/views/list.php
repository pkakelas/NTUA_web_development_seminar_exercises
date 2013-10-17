<?php

	function view_list($names) { ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<?php 
			include 'models/sessions.php';
		?>
		 
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<?php
				include 'views/head.php';
			?>
			<body>
				<h1> Booooooooom Uploader. Share everything you want!  </h1>
				<h2> Check out whatever other users upload </h2>
				<p> In this page you can see a list of all the uploaded files that are saved in our servers. Here you can also 
						download files without any cost. Have fun ! </p>
				<?php  
					echo '<ul>';
					foreach ($names as $value) { 
						echo "<li> $value</li>";
						echo "<div id=list_download><a href='controllers/download.php?name=$value' > Download</a> </div </li>";
					}
					echo '</ul>';
				?>
				<p id="bth"> <a href="index.php?resource=file&method=create"> Back to home </a> </p>
				<?php 
					include 'views/footer.php'; 
				?>
			</body>
		</html>	

<?php }

	view_list($names);

?>



