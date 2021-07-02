<?php
    session_start();
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DATABASE","mvc");
    define("BASEURL",'http://localhost/blog/');
    
    date_default_timezone_set("Asia/kolkata");
    $cur_date_time = date('Y-m-d H:i:s');
    define('CURRENT_DATE_TIME',$cur_date_time);
?>