<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php proberen</title>
</head>

<body>
    <p>php for loopje</p>
    <style> 
     table,
     tr,
     td{
      border: 1px solid black;
     }
    </style>

    <form action="" method="post">
        <input type="text" name="getal1">table<br>
        <input type="text" name="getal2">loop length<br>
        <input type="submit" name="calc" value="Maak Tafel">
    </form><br>

    <table>

    <?php

    if(! empty($_POST) && is_numeric($_POST['getal1']) && is_numeric($_POST['getal2'])){
      for ($x = 0; $x <= $_POST['getal2']; $x++) {
        echo '<tr>';
        echo '<td>'. ($x*$_POST['getal1']). '</td>';
        echo '</tr>';
      }
    } else { 
     $x = 'vul form in';
    }   

    ?>
    </table>
</body>

</html>