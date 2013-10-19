<?php
    
    function    userCreate() { ?>

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
            <?php 
                view("head");
            ?>
            <body>
                <?php
                    view("title"); 
                ?>
                <div id='register'>
                    <h2> First Time visiting my site ? </h2>
                    <p> Register and get ready to become the most famous Uploader of my site ! </p>
                    <form  class="index-forms"  action="index.php?resource=user&method=create" method="post"> 
                        <p> <label for="name" > What is your name ?</label> <input id="name" type="text" name="name" /> </p>
                        <p> <label for="surname" >  What is your surname ? </label><input  id="surname" type="text" name="surname" /> </p>
                        <p> <label for="age" >  How old are you ? </label><input id="age" type='text'  name="age" />   <span>  </span> </p> 
                        <p> <label for="email"> What is your email ?</label> <input  id="email" type="text" name="email" /> </p>
                        <p> <label for="username">  Choose a username </label> <input id="username" type="text" name="username" /> <span><img id="tick" src="static/images/tick.png"/>
<img id="cross" src="static/images/cross.png"/></span> </p>
                        <p> <label for="password" > Choose a password </label> <input id="password" type="password" name="password" /> </p>
                         <p> <input  id="submit" type="submit" value="Register" /> </p>
                    </form>
                </div>
                <div id='footer' > 
                    <p> Created by Dimitris Lamprinos. All rights reserved. </p>
                </div>
            </body>
        </html>

<?php   }
    
    userCreate();
    
?>
        
