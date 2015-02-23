<?php
  try {
    # MySQL with PDO_MYSQL
    $jafamDB = new PDO("mysql:host=127.0.0.1;dbname=products", 'root');
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }

  $STH = $jafamDB->prepare("INSERT INTO jafamdb (id, aa, bb, cc, dd, ee) VALUES (:id, :aa, :bb, :cc, :dd, :ee)");
  $STH->bindParam(':id', $_POST['id']);
  $STH->bindParam(':aa', $_POST['aa']);
  $STH->bindParam(':bb', $_POST['bb']);
  $STH->bindParam(':cc', $_POST['cc']);
  $STH->bindParam(':dd', $_POST['dd']);
  $STH->bindParam(':ee', $_POST['ee']);
  $STH->execute();


  $pull = $jafamDB->query('SELECT id, aa, bb, cc, dd, ee from jafamdb');

  # setting the fetch mode
  $pull->setFetchMode(PDO::FETCH_ASSOC);

  echo "<table>";
  echo "<thead><tr><td>1.</td>" . "<td>2.</td>"  . "<td>3.</td>" .
  "<td>4.</td>" . "<td>5.</td>" . "<td>6.</td>" . "</tr></thead>";
  while($row = $pull->fetch()) {
    echo "<tbody><tr><td>" . $row['id'] . "</td><td>" .
    $row['aa'] . "</td><td>" .
    $row['bb'] . "</td><td>" .
    $row['cc'] . "</td><td>" .
    $row['dd'] . "</td><td>" .
    $row['ee'] . "</td></tr></tbody>";
  }
  echo "</table>";
?>
