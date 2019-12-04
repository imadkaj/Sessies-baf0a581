<!DOCTYPE html>
<html>

  <head>
      <meta charset="UTF-8">
      <title>Bit Academy</title>
  </head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>


    <form action='cart.php' method='post' class='form'>
      <input type='text' name='keuze' id='keuze' required>
      <input type='submit' name='btn' id='btn' value='submit'>
    </form>

    <?php
    session_start();
    $cart1 = '#1';
    $cart2 = '#2';
    $cart3 = '#3';
    $_SESSION[$cart1]='#1';
    $_SESSION[$cart2]='#2';
    $_SESSION[$cart3]='#3';
  

    if (isset($_POST['btn'])) {
      $input = $_POST['keuze'];

      if ($_SESSION[$input]) {
        echo ('<h1> je keuze is ' . $_SESSION[$input] . '</h1>');
      }
    }
    ?>
  </body>

</html>
