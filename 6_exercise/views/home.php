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


