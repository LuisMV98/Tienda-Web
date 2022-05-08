<?php
  session_start();
  unset($_SESSION["correous"]);
  session_destroy();
  header("Location: index.php");
  exit;
?>