<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Refresh" content="2; all.php" />
  <title>Update</title>
</head>

<body>

  <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_1";

        $conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $id = $_REQUEST["id"];
        $cms = $_REQUEST["cmd"];

        $sql = "SELECT * FROM test_1.test where id = $id";

        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);


        $cmd = "UPDATE test_1.test SET sts = '$cms' WHERE id = $id";
        $result = mysqli_query($conn, $cmd);
  ?>

</body>

</html>
