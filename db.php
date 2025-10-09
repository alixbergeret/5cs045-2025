<?php
  $mysqli = new mysqli("localhost","5cs023_user","5cs023_password","alix");

  if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
  }
?>