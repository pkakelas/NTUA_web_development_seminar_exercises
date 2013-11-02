<?php

    function view($name, $type = false) {
        $content = include_and_return_what_was_echoed "views/$name.php";
        if ($type == 'html') { ?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">	
                <?php 
                    echo $content;
                ?>
            </html> <?php
        }
        else {
            echo $content;
        }
    }
    





?>
