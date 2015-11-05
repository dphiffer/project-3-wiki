<!DOCTYPE html>
<html>
	<head>
		<title>Wiki</title>
	</head>
	<body>
		<div id="content">
			<?php
			
			if (!file_exists('data')) {
				mkdir('data');
			}
			if (file_exists('data/wiki.txt')) {
				$content = file_get_contents('data/wiki.txt');
			} else {
				$content = '(no content)';
			}
			
			echo $content;
			
			?>
		</div>
	</body>
</html>
