<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php get_page_type(); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <?php if(isset($_COOKIE['mode'])):   ?>
    <style>
      body
      {
         background-color: <?php echo $_COOKIE['mode']== "dark" ?"#000":"#fff"; ?>;
         color: <?php echo $_COOKIE['mode']== "dark" ?"#fff":"#000"; ?>
      }
    </style>
  <?php endif;?>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add-user.php">Add User</a>
        </li>
        <li class="nav-item">
        <?php if(isset($_COOKIE['lang'])): ?>
                  <?php if ($_COOKIE['lang']=="ar"): ?>
                    <?php
                       $key = "en";
                       $lang= "English"; 
                      ?>
                  <?php else: ?>  
                    <?php
                       $key = "ar";
                       $lang= "العربيه"; 
                    ?>
                  <?php endif; ?>
        <?php else: ?>
          <?php
             $key = "en";
             $lang= "English"; 
          ?>
        <?php endif; ?>  
          <a class="nav-link" href="language.php?language=<?php echo $key;?>">
          <?php echo $lang; ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="all-posts.php">ALL Posts</a>
        </li>
      </ul>
    </div>
  </div>
</nav>