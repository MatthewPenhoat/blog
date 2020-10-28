<?php
    include "include/header.php";
    

   if( isset($_POST["name"]) || isset($_POST["voornaam"]) ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['achternaam'] )) {
         if( isset($_Post["email"]) || isset($_Post["email"]))
         if( isset($_Post["onderwerp"]) || isset($_Post["onderwerp"]))
         if( isset($_Post["bericht"]) || isset($_Post["bericht"]))
         die ("invalid name and name should be alpha");
   
      }
      $voornaam = $_POST['voornaam'];
      $achternaam = $_POST['achternaam'];
      $email = $_POST['email'];
      $onderwerp = $_POST["onderwerp"];
      $bericht = $_POST["bericht"];
      echo "Hallo $voornaam ";
      echo " $achternaam <br />";
      echo "We helpen je zo snel mogelijk met de email die je hebt verstuurd via $email";
      echo " over het onderwerp $onderwerp";
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
    <a href="/about.php">Over mij</a>
    <a href="/contact.php">Contact</a>
    <div class="clearfix"></div>
  </div>
</div>

<div class="contact">
 <div class="container">
    <table>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
       <tr><td> Voornaam: <input type = "text" name = "voornaam" required  /> </td></tr>
       <tr><td> Achternaam: <input type = "text" name = "achternaam" required /> </td></tr>
       <tr><td> Email: <input type = "text" name = "email" required /> </td></tr>
       <tr><td> Onderwerp: <input type = "text" name = "onderwerp" required/> </td></tr>
       <tr><td> Bericht: <textarea  name = "bericht" required></textarea></td></tr>
       <tr><td> <input type = "submit" /> </td></tr>

      </form>
   </table>
 </div>
</div>





<div class="footer">
  <div class="container">
    <p>Wij reageren zo snel mogelijk! </p>

  </div>
</div>