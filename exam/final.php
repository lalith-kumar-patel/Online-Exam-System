<?php include 'inc/header.php'; ?>
<style><?php include 'CSS/main.css'; ?></style>
<?php
	Session::checkSession();
?>
<div class="main">
<h1>You are Done!!</h1>
	<div class="starttest">
	<h2>Congrats ! You have just completed test.</h2>
	<p>This is multiple choice quiz to Test your Knowledge</p>
	<p>Final Score: 4
		<?php
			if(isset($_SESSION['score'])){
				echo $_SESSION['score'];
				unset($_SESSION['score']);
			}
		
		?>
	
	</p>
	<a href="viewans.php">View Answer</a>
	<a href="starttest.php">Start Again</a>
	</div>
	
	
  </div>