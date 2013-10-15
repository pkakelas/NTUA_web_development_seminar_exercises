<?php				
	
	function fileRead() {
		include 'models/readlist.php';
		$names = readlist();
		include 'views/list.php';
	}
	
	fileRead();

?>
