<?php
if(isset($_GET['mode']))
{
        setcookie('mode',$_GET['mode']);
}
header("location:index.php");