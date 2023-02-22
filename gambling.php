<!DOCTYPE html>
<body>
    <a href="gamblinghome.php"><button type="submit">back</button></a>
    <form action="gambling.php" method="post">
        <p>enter bet between 1 & 100: </p>
        <input type="number" name="bet">
    </form>
</body>
</html>
<?php
$a=rand(1 , 99);
$b=$_POST['bet'];
if ($a == $b) {
    $b=$b + 1;
}
echo "you lost! too bad.";
echo '<br><br>correct bet was : ';
echo $a;
?>