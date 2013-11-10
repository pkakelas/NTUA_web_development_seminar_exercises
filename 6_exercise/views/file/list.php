    <h2> Check out whatever other users upload </h2>
    <p> In this page you can see a list of all the uploaded files that are saved in our servers. Here you can also download files without any cost. Have fun ! </p><?php
    
    if (!empty($names)) {
        ?><ul><?php
        foreach ($names as $value) { 
            echo "<li>$value</li>";
            echo "<div id=list_download><a href='index.php?resource=file&method=get&name=$value'> Download</a> </div </li>";
        } 
        ?><ul><?php
    }
    else {
        ?><p>I am afraid there is nothing to see here. Be the first to uplaod something by clicking <a href="index.php?resource=file&method=create">here</a></p><?
    } ?>

<p id="bth"> <a href="index.php?resource=file&method=create"> Back to home </a> </p>

