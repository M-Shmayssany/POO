<?php
require 'classHTML.php';

$test = new HTML('my app', 'main.css');

$test->css('style.css');
$test->htmlOpen();
$test->img('./test.jpeg','test image');
echo "<br />";
$test->link('https://www.google.com/','Google');
$test->script('script.js');
$test->body(false);
$test->htmlTag(false);

?>

