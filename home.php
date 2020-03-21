<h1>Welcome User</h1>

<img src="<?php echo $_SESSION["user_image"] ?>" alt="profile pic" style="width:100%">

  <h1>Profile Picture</h1>
  </div>
</div>
<h1>Name: <?php echo $_SESSION['user_first_name'] ?>
<h1>Email: <?php echo $_SESSION['user_email_address'] ?></h1>

<h1><a href="logout.php">Logout</a></h1>
