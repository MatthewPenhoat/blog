<?php

$posts = [
  [
    "titel" => "Mijn titel1", 
    "inhoud" => "Mijn inhoud",
  ],
  [
    "titel" => "Mijn titel2 ", 
    "inhoud" => "Mijn inhoud",
  ],
  [
    "titel" => "Mijn titel3", 
    "inhoud" => "Mijn inhoud",
  ]
];

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
