<?php

	function view_log_in_first() { ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
	            view("head");			
			?>
			<body>
				<?php
					view("title");
				?>
					<p> I am afraid you must have logged in, in order to proceed to this page.</p>
					<p> Click <a href="index.php?resource=user&method=signin">here</a> to log in </p>
				<?php
				    view("footer"); 
				?>
			</body>
		</html>

<?php }

	view_log_in_first();

?>

