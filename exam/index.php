<?php include 'inc/header.php'; ?>
<style><?php include 'CSS/main.css'; ?></style>
<?php
	Session::checkLogin();
?>

<div class="main">
<h1>Online Exam System - User Login</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/test.png"/>
	</div>
	<div class="segment">
	<form action="" method="post">
		<table class="tbl">    
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" id="email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id="password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td><input type="submit" name="loginsubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p>New User ? <a href="register.php">Signup</a> Free</p>
	   <span class="empty" style="display:none">Feild Must Not be empty</span>
	   <span class="error" style="display:none">Email or Password is not matching</span>
	   <span class="disable" style="display:none">user id disabled</span>
	</div>


	
</div>