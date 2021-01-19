<!-- <?php
echo 'Php operators'
?> -->

<!-- answer 1 -->
<?php
function leapyear($year){
return ($year % 100 === 0) ? ($year % 400 === 0) : ($year % 4 === 0);
}

$x = leapyear(2016);
echo ($x ? 'yes' : 'No')
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 2 -->

<?php
$temp = 19;

if ($temp < 20) {
    echo "The season is winter $temp ";
}else {
    echo "The season is summer";
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 3 -->

<?php
$num1 = 3;
$num2 = 3;
if ($num1 === $num2) {
    $sum = ($num1 + $num2);
    echo "Sum of numbers : $sum ";
    echo "three times numbers : ".($sum*3 );
} else {
    echo 'The numbers not same ^_^';
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 4 -->

<?php
$n = 150;
$n1 = 100;
if ($n < $n1) {

    echo 'The absolute difference is: '.($n1 - $n);
} else {
    echo 'The absolute difference is: '.(-1*($n1 - $n));
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 5 -->

<?php
$x1 = 5;
$x2 = 25;

if (($x1+$x2) == 30) {
    echo "true";
} else if ($x1 == 30 || $x2 == 30){
    echo "true";
} else {
    echo "false";
}

?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 6 -->

<?php
$num = 211;

if(abs($num - 100) <= 10 || abs($num - 200) <= 10){
    echo "the number $num is within ";
}else {
    echo "the number $num is not within";
}
?>


<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 7 -->

<?php
$x1 = 6;

if ($x1%3 == 0 || $x1%7 == 0 ) {
    echo "true";
} else {
    echo "false";
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 8 -->

<?php
function test($s) 
{
  if (strlen($s) > 2 && substr($s,0, 2) == "if")
            {
                return $s;
            }
      return "if ".$s;
}

echo test("if else")."\n";
echo test("else")."\n";  
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 9 -->

<?php
function removeLetter($s, $n) {
   return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo removeLetter("Mohmmad", 1);
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 10 -->

<?php
$num1 = 150;
$num2 = 75;

if ($num1 >= 100 || $num2 >= 100 || $num1 <= 200 || $num2 <= 200) {
    echo "the number is inclusive";
}else {
    echo "the number is not inclusive";
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 11 -->

<?php
$num1 = 20.33;
$num2 = 20.60;

if (($num1 >= 20.00 && $num1 <= 20.50) && ($num2 >= 20.00 && $num2 <= 20.50)) {
    echo "the numbers is inclusive 20.50";
} else{
    echo "the numbers is not inclusive 20.50";
}
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 12 -->

<?php
$num1 = 22;
$num2 = 15;
$num3 = 90;

if ($num1 > $num2 && $num1 > $num3) {
    echo "the num1 is larg";
} else if ($num2 > $num1 && $num2 > $num3){
    echo "the num2 is larg";
}else if ($num3 > $num1 && $num3 > $num2){
    echo "the num3 is larg";
}
?>



<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 13 -->

<?php
$num1 = 95;
$num2 = 99;

if ($num1 == $num2) {
    echo "0";
} else if (abs($num1 - 100) < abs($num2 - 100)){
    echo "num1 is closest ";
}else{
    echo "num2 is closest ";
}
?>


<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 14 -->

<?php
$num1 = 95;
$num2 = 5;

if ($num1 == 5 || $num2 == 5 || $num1 + $num2 == 5 || abs($num1 - $num2) == 5) {
    echo "true";
} else {
    echo "false";
}
?>

