<html>
  <head>
    <title>BHS PHP experiment</title>
  </head>
  <body>
    <?php
      //so errors don't show up giving away information
      error_reporting(0);
      require 'db/connect.php';

      if($result = $db->query("SELECT * FROM people")) {
        if($result->num_rows){
          $rows = $result->fetch_all(MYSQLI_ASSOC);

          foreach($rows as $row) {
            echo $row['first_name'] . ' ' . $row['last_name'] . '<br>';
          }
        }
      }

      class Quartet {
        public $name;
        public $ooa;
        public $judgeTotal;
        public $userTotal;

        public function __construct($name, $ooa){
          $this->name = $name;
          $this->ooa = $ooa;
        }
      }

      class Song {
        public $name;
        public $order;

        public function __construct($name, $order){
          $this->name = $name;
          $this->order = $order;
        }
      }

      $quartets = array("MC4", "Crossroads", "MaxQ");
      $songs = array();

      function addQuartet($newQuartet){
        $quartets[] = $newQuartet;
      }

    ?>

    <div>A list of quartets</div>
    <div><?php
      foreach($quartets as $quartet){
        echo "<li>$quartet</li>";
      }
    ?></div>

    Hi <span style="color:green"><?php echo $_POST['name']; ?></span>.

    <form action="play.php" method="post">
      Name:  <input type="text" name="name" /><br>
      <input type="submit" name="submit" value="Submit" />
    </form>

  </body>
</html>