<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "blog";

$verbinding = mysqli_connect($host, $user, $password, $database);

$result = mysqli_query($verbinding, "SELECT * FROM posts");
$posts = $result->fetch_all(MYSQLI_ASSOC);



foreach ($posts as $key => $post):
  $titel = $post["titel"];
  $inhoud = $post["inhoud"];
?>

  <div class="blog-post">
    <h3 class="post-titel"><?php echo $titel; ?></h3>
    <p class="post-content"><?php echo $inhoud; ?></p>
  </div>

<?php
endforeach;
