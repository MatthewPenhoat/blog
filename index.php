
<?php
  include "include/header.php";

  include "database/connection.php";

  include "database/last-posts.php";
?>

<div class="header">
  <div class="container">
    <h1>Home</h1>
  </div>
</div>

<?php
  include "includes/navigation.php";
?>

<div class="content">
  <div class="container">
    <h2>Laatste blog posts</h2>

    <?php 
      foreach ($posts as $key => $post):
        $titel = $post["titel"];
        $inhoud = $post["inhoud"];
    ?> 
   
      <div class="blog-post">
        <h3 class="post-title"><?php echo $titel; ?></h3>
        <p class="post-content"><?php echo $inhoud; ?></p>
      </div>
    
      <?php 
      endforeach;
    ?>

  </div>
</div>

<div class="footer">
  <div class="container">
    <p>Voor meer posts kijk bij <a href="/blog.php">Blogs</a>.</p>

  </div>
</div>


<?php
  include "include/footer.php";
?>  
