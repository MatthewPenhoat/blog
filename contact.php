<?php
    include "include/header.php";

    if(isset($_POST['voornaam']))
    if(isset($_POST['achternaam']))
    if(isset($_POST['email']))
    if(isset($_POST['onderwerp']))
    if(isset($_POST['bericht']))
    {

      $voornaam = $_POST['voornaam'];
      $achternaam = $_POST['achternaam'];
      $email = $_POST['email'];
      $onderwerp = $_POST['onderwerp'];
      $bericht = $_POST['bericht'];

       
      $to = 'matthewpenhoat@outlook.com';
      $email = "From: matthew@server7.omega2.nl" . "\r\n" .
      "Reply-To: $email" . "\r\n" .
      "X-Mailer: PHP/" . phpversion();

      mail($to, $onderwerp, $bericht, $email);
      
      $resultaat = "Hallo $voornaam ";
      $resultaat .= " $achternaam <br />";
      $resultaat .= "We helpen je zo snel mogelijk met de email die je hebt verstuurd";
      $resultaat .= " over het onderwerp $onderwerp.";
      
   }
?>

<div class="header">
  <div class="container">
    <h1>Contact</h1>
  </div>
</div>

<?php
  include "include/navigation.php";
?>

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