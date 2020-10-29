<?php 
  include "include/header.php";

  $host = "127.0.0.1";
  $user = "root";
  $password = "";
  $database = "blog";

  $verbinding = mysqli_connect($host, $user, $password, $database);

  $result = mysqli_query($verbinding, "SELECT * FROM posts ");
  $posts = $result->fetch_all(MYSQLI_ASSOC);


?>

<div class="header">
  <div class="container">
    <h1>blog</h1>
  </div>
</div>

<div class="navigation">
  <div class="container">
    <a href="/">Home</a>
    <a href="/blog.php">Blog</a>
    <a href="/about.php">Over Mij</a>
    <a href="/contact.php">Contact</a>
    <div class="clearfix"></div>
  </div>
</div>



<div class="content">
  <div class="container">
    <h2>Blog posts</h2>


    <?php 
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
    ?>
  </div>
</div>


