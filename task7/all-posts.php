<?php require_once('function.php'); ?>
<?php require_once('inc/header.php'); ?>
<?php require_once('posts.php'); ?>

<?php

$new_posts = json_decode($posts, true);

?>

  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">All Posts</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Id</th>
                        <th>Title</th>
                        <th>content</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($new_posts as $key => $post): ?>
                        <?php if($key % 2 !== 0): ?>
                            <tr  >
                                <td><?php echo $post['id'] ;?></td>
                                <td><?php echo $post['userId'] ;?></td>
                                <td><?php echo $post['title'] ;?></td>
                                <td class="<?php if($post['id'] % 2 == 0){echo 'text-danger';}else{echo 'white';} ?>" ><?php echo substr($post['content'],0,100) ;?></td>
                            </tr>
                            <?php  endif;?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  
<?php require_once('inc/footer.php'); ?>