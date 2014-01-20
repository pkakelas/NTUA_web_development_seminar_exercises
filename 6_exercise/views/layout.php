<?php
    
    function view($name, $variables = "", $type = false) {
        $content = "$name.php";
        if (file_exists("views/user/$content")) {
            $content = "views/user/$content";
        }
        else if (file_exists("views/file/$content")) {
            $content = "views/file/$content";
        }
        if ($type == 'html') { ?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
            <?php
                view('head');
                if (!empty($variables)) {
                    extract($variables);
                }
            ?> 
                <body> 
                <?php
                    view('title');
                    include $content;
                    view('footer');
                ?>   
                </body>
            </html>
            <?php
        }
        else {
           include $content;
        }
    }

?>

