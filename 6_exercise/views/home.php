<?php 

    function view_home($username) { ?>

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
            <?php 
                include 'views/head.php';
            ?>
            <body>  
                <h1> Booooooooom Uploader. Share everything you want!  </h1>
                <div class='uploaded'>
                    <p>Welcome<?php echo $username; ?>. If you want to upload a file to our servers, in order to 
                    share it with other users, please fill in all the above forms. The file must be less than 2mb .. </p>
                    <form id="forms" action="index.php?resource=file&method=create" enctype="multipart/form-data" method="post">
                        <p> File :</p>
                        <p><input type="file" name="file" id="file" /> </p>
                        <p>Description about the file :</p> 
                        <p><textarea cols="40" rows="5" name="description"> Say some things about the file you want to upload !!</textarea> </p>
                        <p> <input type="submit" name="submit" value="Submit" /> </p>
                    </form>
                    <p id="lists_ref" ><a href="index.php?resource=file&method=listing"> Or check out whatever other users have uploaded. </a> </p>
                </div>
                <?php 
                    include 'views/footer.php' 
                ?>
            </body>
        </html>

<?php }
    
    view_home($username);

?>


