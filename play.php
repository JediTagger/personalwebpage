<html>
  <head>
    <title>BHS PHP experiment</title>
  </head>
  <body>
    <?php
      //so errors don't show up giving away information, comment out to show errors for debugging
      //error_reporting(0);
      require 'db/connect.php';
      //update items in database
      /*
      if($update = $db->query("UPDATE people SET last_name = 'Maximus' WHERE id = 1")) {
        echo "The number of rows affected by update is: " . $db->affected_rows;
      }
      */
      //delete items in database
      /*
      if($update = $db->query("DELETE people WHERE id > 1")) {
        echo "The number of rows affected is: " . $db->affected_rows;
      }
      */
      //insert into database
      /*
      if($insert = $db->query("INSERT INTO people (first_name, last_name, bio, created)
        VALUES ('Alexander', 'Garrison', 'I like MC4!', NOW())")){
        echo "<br><br>The number of rows affected by insert is: " . $db->affected_rows;
      }
      */
      $db->query("INSERT INTO people (first_name, last_name, bio, created) VALUES ( '{$db->real_escape_string($_POST['first_name'])}', '{$db->real_escape_string($_POST['last_name'])}', '{$db->real_escape_string($_POST['bio'])}', NOW() )");
      //get info from database
      $result = $db->query("SELECT * FROM people");
      //display info from database
      echo "<br><br>My database results<br><br>";
      while($row = $result->fetch_assoc()) {
        echo $row['first_name'] . ' ' . $row['last_name'] . '<br>';
        echo $row['bio'] . "<br><br>";
      }
      //free up memory/clear search results
      $result->free();
    ?>

    <a href="http://jesseturner.net/form.php">To Form</a>
  </body>
</html>