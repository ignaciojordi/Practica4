<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: https://ignaciojordi.alwaysdata.net/p44/index.php')
?>