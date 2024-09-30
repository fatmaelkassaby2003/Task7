<?php 
    date_default_timezone_set("america/New_York");
    echo time();//1971 ===> to now in second
    echo "<br>";
    echo date("Y-m-d h");
    echo "<br>";
    echo date("Y-F-D h a");
    echo "<br>";
    $date = time()-(2*24*60*60);
    echo date("Y-F-D h a",$date);
    $time=strtotime("2004/3/7");
    echo "<br>";
    echo date("Y-F-D h a",$time);