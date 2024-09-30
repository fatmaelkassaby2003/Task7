<?php 
    
    // setcookie("lang","English");
    // var_dump($_COOKIE);

if(isset($_GET['language']))
{
    if(isset($_COOKIE['lang']))
    {
        setcookie('lang',$_GET['language']);
    }
    else
    {
        setcookie('lang',"ar");
    }
}
else
{
   setcookie('lang',"ar");
}
header("location:add-user.php");