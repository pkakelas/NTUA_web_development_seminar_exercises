<?php
    
    function prepared_query($code, $data) {
        include 'models/sql.php';
        $parts = explode('?', $code);
        $sql = '';
        foreach($data as $value) {
            $sql .= array_shift($parts);
            $sql .= '"' . mysqli_real_escape_string($con, $value) . '"';
        }
        $sql .= array_shift($parts);
        return mysqli_query($con, $sql);
    }
