<?php
	
	function view_upload_true($name) { ?>
	
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
			<?php 
				view("head");
			?>
			<body>
				<?php
					view("title");
                    echo "<p> The file $name has been uploaded. Click <a href='index.php?resource=file&method=create'> here </a> to go to the previous page. </p>" ;
					view("footer");
				?>
			</body>
		</html> <?php
    } 

	view_upload_true($_SESSION['name']);

?>
