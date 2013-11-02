<h2> Some problems occured : </h2>
<ol>
    <?php	
        $arrlength = count($problems);
        for($x = 0; $x < $arrlength; $x++) { 
            echo "<li id='error'> $problems[$x] </li>";
        }
    ?>
</ol>		
<p> Please <a href="index.php"> Try again </a> </p>
