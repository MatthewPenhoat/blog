<?php
   if( isset($_POST["name"]) || isset($_POST["age"]) ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         if( isset($_Post["email"]) || isset($_Post["email"]))
         die ("invalid name and name should be alpha");
   
      }
      $name = $_POST['name'];
      $age = $_POST['age'];
      echo "Welcome $name <br />";
      echo "You are $age years old.";
      
      exit();
   }
?>


<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" required />
        <input type = "submit" />
      </form>

   </body>
</html>
