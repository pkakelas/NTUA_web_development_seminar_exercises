<?php 
        
    function fileCreate($filename, $username, $description, $tmp_name, $size, $type) {
        
        function name_correct($filename) {
            $filename = strtolower($filename);
            $filename = str_replace(" ", "_", $filename);  
            return $filename;
        }
        function valid_file_extension($filename) {
            $allowed_ext = array('txt', 'htm', 'html', 'flv', 'swf', 'flv', 'png', 'jpeg', 
                         'jpe', 'jpg', 'gif', 'ico', 'bmp', 'tif', 'tiff', 'svg',
                                             'svgz', 'zip', 'rar', 'exe', 'msi', 'cab', 'mp3', 'mov',
                                             'pdf', 'psd', 'rtf', 'doc', 'xls', 'ppt', 'odf', 'odt');
            $file_ext = substr($filename, strpos($filename,'.'), strlen($filename) - 1); 
            $file_ext = str_replace(".", "", $file_ext);
            return in_array($file_ext, $allowed_ext);
        }
        
        include 'models/data.php';
        include 'models/sessions.php';
        $problems = array();
        $target_path = "/home/dimitris/test/$filename";
        $name = name_correct($filename);
        if (!file_exists($tmp_name)){
            $problems[] = "You haven't chosen any files yet.";
        }
        else if (!valid_file_extension($filename)) {
            $problems[] = "I am afraid the file that you attempted to upload is not supported.";    
        }
        else if (file_exists("/home/dimitris/test/$filename")) {
            $problems[] = "The file exists. Please upload another file, or change the name of your file.";
        } 
        if (count($problems)) {
            view("fileCreateProblems");
        }
        else {
            move_uploaded_file($tmp_name, $target_path);
            $result = file_upload($username, $name, $size, $type, $description, $target_path);
            if ($result) {          
                $_SESSION['name'] = $name;
                view("upload_true");
            }
            else  { 
                echo "shit";
            }       
        }   
    }

    fileCreate($_FILES['file']['name'], $_SESSION['username'], $_POST['description'], $_FILES['file']['tmp_name'],  $_FILES['file']['size'], $_FILES['file']['type']);

?>
    
