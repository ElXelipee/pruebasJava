<?php
  header("Content-type: application/json; charset=utf-8");
  if (isset($_POST['asunto'])) {
    echo json_encode($_POST['asunto']);
  }else {
    echo json_encode('No llego');
  }