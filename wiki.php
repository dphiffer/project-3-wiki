<?php

if (!file_exists('data')) {
	mkdir('data');
}
if (file_exists('data/wiki.txt')) {
	$content = file_get_contents('data/wiki.txt');
} else {
	$content = '(no content)';
}

if (!empty($_GET['content'])) {
	$content = $_GET['content'];
	file_put_contents('data/wiki.txt', $content);
}

echo $content;

?>
