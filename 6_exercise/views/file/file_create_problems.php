<h2> Some problems occured : </h2>
<ul>
<?php
    $arrlength = count($problems);
    for($x = 0; $x < $arrlength; $x++) { 
        echo "<li id='error'> $problems[$x] </li>";
    }
?>
</ul>
<p> Please <a href="index.php?resource=file&method=create"> Try again </a> </p>	
