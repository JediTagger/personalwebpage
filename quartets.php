<html>
  <head>
    <title>BHS PHP experiment - Quartets</title>
  </head>
  <body>
    <?php
      //so errors don't show up giving away information, comment out to show errors for debugging
      //error_reporting(0);
      require 'db/connect.php';
      $db->query("INSERT INTO quartet (name, d1ooa, d2ooa) VALUES ( '{$db->real_escape_string($_POST['name'])}', {$db->real_escape_string($_POST['d1ooa'])}', '{$db->real_escape_string($_POST['d2ooa'])}', )");
      //get info from database
      $result = $db->query("SELECT * FROM quartet");
      //display info from database
      echo "Here are the quartets<br><br>";
      while($row = $result->fetch_assoc()) {
        echo 'Quartet: ' . $row['name'] . '<br>';
        echo 'Day 1 Order Of Appearance: ' . $row['d1ooa'] . '<br>';
        echo 'Day 2 Order Of Appearance: ' . $row['d2ooa'] . '<br><br>';
      }
      //free up memory/clear search results
      $result->free();
    ?>

    <a href="http://jesseturner.net/addquartet.php">Add Quartet</a>
  </body>
</html>