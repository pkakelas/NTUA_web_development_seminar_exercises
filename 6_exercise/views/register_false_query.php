<?php

    function view_register_false_query() { ?>
    
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
            <?php
                view("head");
            ?>
            <body> 
                <?php
                    view("title");
                ?>
                <p>There was an error running the query.Please <a href="index.php"> Try again </a> or contact me: pkakelas@gmail.com</p>			
                <?php
                    view("footer");
                ?>	
            </body>
        </html> <?php 
    } 
    
    view_register_false_query();
    
?>
