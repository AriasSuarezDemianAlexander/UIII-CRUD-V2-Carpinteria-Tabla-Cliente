<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'carpinteriabd'
) or die(mysqli_erro($mysqli));

?>
