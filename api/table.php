<?php
  try {
    # MySQL with PDO_MYSQL
    $DB = new PDO("mysql:host=127.0.0.1;dbname=products", 'root');
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }

  $STH = $DB->query("INSERT INTO jafamdb ('1.', '2.', '3.', '4.', '5.', '6.') values ('$_POST[1]', :2, :3, :4, :5, :6)");

  $STH = $DB->query("SELECT '1.', '2.', '3.', '4.', '5.', '6.' from jafamdb");

  # setting the fetch mode
  $STH->setFetchMode(PDO::FETCH_ASSOC);

  echo "<table>";
  echo "<thead><tr><td>1.</td>" . "<td>2.</td>"  . "<td>3.</td>" .
  "<td>4.</td>" . "<td>5.</td>" . "<td>6.</td>" . "</tr></thead>";
  while($row = $STH->fetch()) {
    echo "<tbody><tr><td>" . $row['1.'] . "</td><td>" .
    $row['2.'] . "</td><td>" .
    $row['3.'] . "</td><td>" .
    $row['4.'] . "</td><td>" .
    $row['5.'] . "</td><td>" .
    $row['6.'] . "</td></tr></tbody>";
  }
  echo "</table>";
?>
