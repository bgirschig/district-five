<!DOCTYPE html>
<html lang="en">
	<?=include($config->paths->templates."utils/head.php");?>
	<body>
		<h1><?php echo $page->title; ?></h1>
		<?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
	
	</body>
</html>
