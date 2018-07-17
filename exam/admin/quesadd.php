<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm=new Exam();
?>
<style>
.adminpanel{width:600px;color:#999;margin:20px auto 0;padding:10px;border:1px solid #ddd;}

</style>
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$addQue=$exm->addQuestions($_POST);
		
	}
	//get total
	$total=$exm->getTotalRows();
	$next=$total+1;
?>
<div class="main">
<h1>Admin Panel - Add Question</h1>
<?php 
	if(isset($addQue)){
		echo $addQue;
	}

?>
	<div class="adminpanel">
		<form action="" method="post">
			<table>
				<tr>
					<td>Question no</td>
					<td>:</td>
					<td><input type="number" value="<?php if(isset($next)){ echo $next; } ?>" name="quesNo"/></td>
				</tr>
				<tr>
					<td>Question</td>
					<td>:</td>
					<td><input type="text" name="ques" placeholder="Enter a Question..." required /></td>
				</tr>
				<tr>
					<td>Choice 1</td>
					<td>:</td>
					<td><input type="text" name="ans1" placeholder="Enter a Choice 1..." required /></td>
				</tr>
				<tr>
					<td>Choice 2</td>
					<td>:</td>
					<td><input type="text" name="ans2" placeholder="Enter a Choice 2..." required /></td>
				</tr>
				<tr>
					<td>Choice 3</td>
					<td>:</td>
					<td><input type="text" name="ans3" placeholder="Enter a Choice 3..." required /></td>
				</tr>
				<tr>
					<td>Choice 4</td>
					<td>:</td>
					<td><input type="text" name="ans4" placeholder="Enter a Choice 4..." required /></td>
				</tr>
				<tr>
					<td>Correct Answer</td>
					<td>:</td>
					<td><input type="number" name="rightAns"  required /></td>
				</tr>
				<tr>
					
				<td colspan="3" align="center">
					<input  type="submit" value="Add A Question" /></td>
				</tr>
			</table>
		</form>
	</div>


	
</div>