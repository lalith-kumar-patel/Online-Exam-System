<?php include 'inc/header.php'; ?>
<style><?php include 'CSS/main.css'; ?></style>
<?php
	Session::checkSession();
	$question=$exm->getQuestion();
	$total =$exm->getTotalRows();
?>
<div class="main">

<h1>Welcome to Online Exam </h1>
	<div class="starttest">
	<h2>Test your Knowledge</h2>
	<p>This is multiple choice quiz to Test your Knowledge</p>
	<ul>
		<li><strong>Number Of question:</strong><?php echo $total; ?></li>
		<li><strong>Question Type:</strong>Multiple Choice</li>
	</ul>
	<a href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>
	</div>
  </div>