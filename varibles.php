<?php 
    $file = $_SERVER['SCRIPT_FILENAME'];
    $user = $_SERVER['HTTP_USER_AGENT'];
    $server = $_SERVER['SERVER_SOFTWARE'];
    $url = $_SERVER["HTTP_HOST"];
    
    // In ra file dang xem
    echo $file.'<br />';
    // In ra thong tin trinh duyet
    echo $user.'<br />';
    // In ra thong tin server
    echo $server.'<br />';

    echo $url;
    
 ?>