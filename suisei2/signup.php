<!DOCTYPE html>
<html>
<head>
	<title>FORM REGISTRASI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>REGISTRASI</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nama</label>
          <?php if (isset($_GET['nama'])) { ?>
               <input type="text" 
                      name="nama" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="nama" 
                      placeholder="Nama"><br>
          <?php }?>

          <label>Username</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="confirm password" 
                 placeholder="Confirm Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Sudah memiliki akun?</a>
     </form>
</body>
</html>