<?php 

$result = mysqli_query($connection, "SELECT * FROM posts LIMIT 3");

if(!$result) {
  echo mysqli_error($connection);
  exit();
}

$posts = $result->fetch_all(MYSQLI_ASSOC);