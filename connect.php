<?php
$servername = "localhost:3306";
$username = "root";
$password = "Quan123456.";
try {
    $conn = new PDO("mysql:host = $servername;dbname = baitap_mysql", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <ul>
  <?php
  $sth = $conn->query("SELECT * FROM user");
  $result = $sth->fetchAll();
  echo "<pre>";
  print_r($result);
  echo "</pre>";
while($result){
  ?>
    <li><?php echo $result['full_name'];?></li>
  <?php
  }
  ?>
  </ul>
</body>
</html>