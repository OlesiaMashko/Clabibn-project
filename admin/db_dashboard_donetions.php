<?php
include 'config.php';

echo "<h1 style='margin-left:80px;text-decoration:underline;'>Donetion Report:</h1><br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>email</th><th>amount</th><th>Permission</th><th>Frequency</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }
  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }
  function beginChildren() {
    echo "<tr>";
  }
  function endChildren() {
    echo "</tr>" . "\n";
  }
}
  
  $stmt = $conn->prepare("SELECT * FROM donation;");
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }

$conn = null;
echo "</table>";

?>