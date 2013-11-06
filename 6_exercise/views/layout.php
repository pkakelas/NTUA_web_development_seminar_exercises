<?php
    
    function view($name, $type = false, $variables = "") {
        $content = "$name.php";
        if ($type == 'html') { ?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
            <?php
                include 'head.php';
                if (!empty($variables)) {
                    extract($variables);
                }
            ?> 
                <body> 
                <?php
                    include 'title.php';
                    include $content;
                    include 'footer.php';
                ?>   
                <body>
            </html>
            <?php
        }
        else {
           include $content;
        }
    }

?>

