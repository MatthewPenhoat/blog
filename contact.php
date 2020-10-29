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

      $resultaat = "Hallo $voornaam ";
      $resultaat .= " $achternaam <br />";
      $resultaat .= "We helpen je zo snel mogelijk met de email die je hebt verstuurd via $email";
      $resultaat .= " over het onderwerp $onderwerp.";
      
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

    
    <form action = "<?php $_PHP_SELF ?>" method = "POST">
      <table>
        <tr><td> Voornaam: <input type = "text" name = "voornaam" required  /> </td></tr>
        <tr><td> Achternaam: <input type = "text" name = "achternaam" required /> </td></tr>
        <tr><td> Email: <input type = "text" name = "email" required /> </td></tr>
        <tr><td> Onderwerp: <input type = "text" name = "onderwerp" required/> </td></tr>
        <tr><td> Bericht: <textarea  name = "bericht" required></textarea></td></tr>
        <tr><td> <input type = "submit" /> </td></tr>
      </table>
    </form>

    <?php 
    if(isset($resultaat)) {
      echo $resultaat; 
    }
    ?>

  </div>
</div>





<div class="footer">
  <div class="container">
    <p>Wij reageren zo snel mogelijk! </p>

  </div>
</div>