<?php
$server = "localhost";
$username = "root";
$password = "ahmedzia";
  
 $connection = mysqli_connect($server, $username, $password);
 if (!$connection){
   die ("Connection not established" . mysqli_connect_error());
 }

 //$sql = "INSERT INTO `dream`.`love` (`username`, `email`,`message`) VALUES ('$username', '$email', '$message', CURRENT_TIMESTAMP())";

  // $sql = "INSERT INTO `dream`.`love` (`username`, `email`, `message`) VALUES ('username', 'email', 'message', CURRENT_TIMESTAMP())";

  
    //  $sql = "INSERT INTO dream.love (username, email, message) VALUES ('username', 'email', 'message', CURRENT_TIMESTAMP())";

   
    // if (mysqli_query($connection, $sql)){
    //     echo "Successfully inserted!";
    // } else {
    //     echo "Error: $sql <br>" . mysqli_error($connection);
    // }

    // $result = mysqli_query($connection,$sql);

  //  if ($connection->query($sql) == true){
  //   // echo "successfully inserted";
  //  }
  //  else{
  //   echo "Error: $sql <br> $connection->error";
  //  }
     //$connection->close();

?>
