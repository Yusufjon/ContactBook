<?php
try {
    $pdo = new PDO('mysql:dbname=contacttest; host=localhost', 'root', 'root');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  ?>