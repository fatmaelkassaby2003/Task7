<?php session_start();  /* To Do conenct with session file  */ ?> 

<?php require_once('function.php'); ?>
<?php require_once('inc/header.php'); ?>
<div class="conatiner">
<div class="row">
<div class="col-6 mx-auto">
    <h1 class="text-center">Add New User</h1>
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center p-1">
         <?php echo $_SESSION['success'] ; ?>
        </div>
    <?php endif; ?>
    <form action="actions/store-user.php" class="border my-2 p-3" method="POST" >
    <div class="mb-3">
        <label for="">User_Name</label>
    <input type="text" name="user_name" class="form-control" value="<?php echo isset($_SESSION['old_data']['user_name']) ? $_SESSION['old_data']['user_name'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['user_name'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['user_name']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="">Email</label>
    <input type="text" name="user_email" class="form-control" value="<?php echo isset($_SESSION['old_data']['user_email']) ? $_SESSION['old_data']['user_email'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['user_email'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['user_email']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="">Password</label>
    <input type="text" name="user_password" class="form-control" value="<?php echo isset($_SESSION['old_data']['user_password']) ? $_SESSION['old_data']['user_password'] : ''; ?>">
    <?php if(isset($_SESSION['errors']['user_password'])): ?>
         <div class="alert alert-danger text-center p-1 mt-1">
            <?php echo $_SESSION['errors']['user_password']; ?>
        </div>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Save" class="form-control bg-info btn btn-primary ">
    </div>
    </form>
   </div>
   </div>
  </div>
  <?php unset($_SESSION['errors']); /* To Do remove errors */ ?>  
  <?php unset($_SESSION['success']); ?>
  <?php unset($_SESSION['old_data']);?>
  <?php require_once('inc/footer.php'); ?>