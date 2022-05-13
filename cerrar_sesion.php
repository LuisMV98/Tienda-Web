<?php
  session_start();
  unset($_SESSION["correous"]);
  unset($_SESSION["nomb"]);
  unset($_SESSION["dire"]);
  unset($_SESSION["correous"]);
  unset($_SESSION["carrito"]);
  session_destroy();
  header("Location: index.php");
  exit;
?>