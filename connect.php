<?php 

$connect = mysqli_connect('localhost', 'root', '', 'starclusters');

if (!$connect) {
	die('Error connect to database!');
}
?>