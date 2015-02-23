<?php
  try {
    # MySQL with PDO_MYSQL
    $jafamDB = new PDO("mysql:host=127.0.0.1;dbname=products", 'root');
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }

  $STH = $jafamDB->prepare("DELETE FROM jafamdb");
  $STH->bindParam(':id', $_POST['id']);
  $STH->bindParam(':aa', $_POST['aa']);
  $STH->bindParam(':bb', $_POST['bb']);
  $STH->bindParam(':cc', $_POST['cc']);
  $STH->bindParam(':dd', $_POST['dd']);
  $STH->bindParam(':ee', $_POST['ee']);
  $STH->execute();

?>
