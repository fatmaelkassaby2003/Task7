<?php
     
     //var_dump($_COOKIE);
    setcookie("site_name","10");
    echo $_COOKIE["site_name"];


    //setcookie("lang","ar");

    if(isset($_GET['language']))
    {
        setcookie("lang",$_GET['language']);
    }

    // if($_COOKIE["lang"]=="ar")
    // {
    //     echo " مرحبا فاطمه";
    // }
    // else
    // {
    //     echo "Hello Fatma";
    // }
