<?php
session_start(); //  لازم تبقي ف الاول خالص

$errors=[];
$_SESSION['old_data'] = $_POST;
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
    //var_dump($_POST);
    /*  Sanitization */
    $user_name=htmlspecialchars(trim($_POST['user_name'])) ;
    $user_email=htmlspecialchars(trim($_POST['user_email'])) ;
    $user_password=htmlspecialchars(trim($_POST['user_password'])) ;
     
    /* USER NAME */
    if (strlen($user_name)==0) 
    {
        $errors['user_name']= "user_name is requried";
    }
    elseif (strlen($user_name)<3) 
    {
        $errors['user_name']="$user_name must be more than 3 or Equal 3";
    }
    elseif (strlen($user_name)>8) 
    {
        $errors['user_name']= "$user_name must be less than 8 or Equal 8";
    }
    
     /* USER Email */
     $check_email= filter_var($user_email,FILTER_VALIDATE_EMAIL);

     if (strlen($user_email)==0) 
     {
        $errors['user_email']= "user_email is requried";
     }
     elseif (!$check_email) 
     {
        $errors['user_email']= "Invaild Email";
     }
    //  elseif (strlen($user_email)>8) 
    //  {
    //      echo "$user_name must be less than 8 or Equal 8";
    //      exit;
    //  }
    
    /* USER Password */
    if (strlen($user_password)==0) 
    {
        $errors['user_password']= "password is requried";
    }
    elseif (strlen($user_password)<6) 
    {
        $errors['user_password']= "password must be more than 6 or Equal 6";
    }
    elseif (strlen($user_password)>15) 
    {
        $errors['user_password']= "password must be less than 15 or Equal 15";
    }

    if(!empty($errors))
    {
        //var_dump($errors);
        $_SESSION['errors']=$errors;
        header("location:../add-user.php");
        exit;
    }
    else
    {
        // echo "<h3> User_Name: </h3>".$user_name."<br>";
        // echo "<h3> User_Email: </h3>".$user_email."<br>";
        // echo "<h3> User_PassWord: </h3>".$user_password."<br>";
            unset($_SESSION['old_data']);
            $_SESSION['success'] = "User added successfully!";
            header('Location: ../add-user.php');
            exit();
    }

    header("location:../add-user.php");
    
}
else
{
    echo "invalid Request Method";
}

?>