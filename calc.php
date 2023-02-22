<!DOCTYPE html>
<html>
<body style="background-color: grey;">
 <center>

<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
}
?>
<h1>IT'S A CALCULATOR</h1>
<form>
<table style="background-color: lightgrey;">
 
<tr>
<td style="background-color: white;">Value 1</td>
<td colspan="1">
<input name="first_value" type="text" style="color: black;"/></td>
</tr>
 
<tr>
<td style="background-color: white;">Operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-color: white;">Value 2</td>
<td class="auto-style5">
<input name="second_value" type="text"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate"/></td>	 
</tr>
 
<tr>
<td>Output</td>
<td><?php echo $res;?></td>
</tr>	
 
</table>
</form>

</center>
</body>
</html>