<?php 
  include "include/header.php";

  $host = "127.0.0.1";
  $user = "root";
  $password = "";
  $database = "blog";

  $verbinding = mysqli_connect($host, $user, $password, $database);

  $result = mysqli_query($verbinding, "select * from posts");
  $items = $result->fetch_all(MYSQLI_ASSOC);

  var_dump($items);
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
    <div class="blog-post">
      <h3 class="post-titel">Post 1</h3>
      <p class="post-content">Post content 1</p>
    </div>
    <div class="blog-post">
      <h3 class="post-titel">Post 2</h3>
      <p class="post-content">Post content 2</p>
    </div>
    <div class="blog-post">
      <h3 class="post-titel">Post 3</h3>
      <p class="post-content">Post content 3</p>
    </div>
  </div>
</div>







