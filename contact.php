<?php
    include "include/header.php";
    

   if( isset($_POST["name"]) || isset($_POST["age"]) ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         if( isset($_Post["email"]) || isset($_Post["email"]))
         die ("invalid name and name should be alpha");
   
      }
      $name = $_POST['name'];
      $age = $_POST['age'];
      $email = $_POST['email'];
      echo "Welcome $name <br />";
      echo "You are $age years old,";
      echo "your email  $email";
      
      exit();
   }
?>

<div class="header">
  <div class="container">
    <h1>Contact</h1>
  </div>
</div>

<div class="navigation">
  <div class="container">
    <a href="/">Home</a>
    <a href="/blog.php">Blog</a>
    <a href="/about.php">Over ons</a>
    <a href="/contact.php">Contact</a>
    <div class="clearfix"></div>
  </div>
</div>

<form action = "<?php $_PHP_SELF ?>" method = "POST">
    Name: <input type = "text" name = "name" />
    Age: <input type = "text" name = "age" required />
    Email: <input type = "text" name = "email" />
  <input type = "submit" />
</form>


<?php
  include "include/footer.php";
?>