<?php 
  include "include/header.php";

  include "database/connection.php";

  include "database/all-posts.php";
?>

<div class="header">
  <div class="container">
    <h1>Blog</h1>
  </div>
</div>

<?php
  include "includes/navigation.php";
?>

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


