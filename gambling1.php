<!DOCTYPE html>
<body>
    <a href="gamblinghome.php"><button type="submit">back</button></a>
    <p>slot machine</p>
    <a href="gambling1.php"><button type="submit">roll!</button></a>
</body>
</html>
<?php
$a=rand(1 , 6);
$b=rand(1 , 7);
$c=rand(1 , 7);
if ($a && $b && $c) {
    $a=$a+1;
}
echo $a;
echo '-';
echo $b;
echo '-';
echo $c;
?>