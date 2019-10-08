<?php
Echo '<p> PHP Loops <p> <br/>';

/* EXTRA */
$names = array(1=>'ab', 1=> 'ac', 2 => 'ad', 3 =>'af');
/* $array as $key=>$value  OR*/
/* $array as $value  OR*/
foreach ($names as $n) {
    echo ucfirst($n) /* . '<br/>' */;
}

//variation with the index
foreach ($names as $index => $n) {
    echo 'First Name Number '. $index .':' ;
    echo ucfirst ($n) . '<br/>';
}

//ex1
$pronouns = array ( ' I ' , ' You ' , ' He / She ' , ' We ' , ' You ' , ' They / They ' );
foreach ($pronouns as /* $key=> */$n){
    echo $n . '</br>';
}

//conjugate with condition for He/She
foreach ($pronouns as $n){
    if ($n=='He/She') {
        echo $n .'codes <br/>';
    }
    else {
        echo $n .'code <br/>';
    }
}

//ex2 : while
$lineNum=1;
while ($lineNum <=3 ) {
    echo $lineNum. ': I should not stay until late <br/>';
    $lineNum++; //DON'T FORGET to increment otherwise infinite loop - never reaches 10!!
}
//same with FOR
for ($lineNum=1; $lineNum<=2; $lineNum++) {
    echo $lineNum. ': I should use momentum to study <br/>';
}

Echo '<p> Drill - PHP LOOPS <p> <br/>';

/* 2nd set */
//numbers 1-5
//While
$num1=1;
while ($num1<=3) {
    echo $num1 .'<br/>';
    $num1++;
}
#for
for ($num1=1; $num1<=5; $num1++) {
    echo $num1 .'<br/>';
}

/* ex2 */
//display every element of array with foreach
$names2=array('Alex', 'Rocco', 'Mimi', 'Illy');
foreach ($names2 as $n) {
    echo $n. '<br/>';
}




Echo '<p> Loops simpler <p> <br/>';

/* ex1 - numbers from 1 to 10 */
$var1=1;
$n1=1;
for ($var1=1; $var1<11; $var1++)
{
    echo $var1.' - ' .$var1.' th-time<br/>';
}

/* ex2 */
$var2=0;
$var3=70;
$i3=1;

while ($var2 < 20)
{
    echo $var2*$var3.' - '.$i3.'th time<br/>';
    $var2++;
    $i3++;
}

/* ex3 */
$var4=110;
$var5=5;
$i5=1;

while ($var4 >= 10)
{
    echo $var4*$var5.' - '.$i5.'th time<br/>';
    $var4--;
    $i5++;
}

/* ex4 */
$var6=1;

while ($var6 < 10)
{
    echo $var6.'<br/>';
    $var6 =$var6+($var6*0.5);
}

/* ex6 */
$var7=1;

while ($var7 < 15)
{
    echo $var7++;
    echo "- it's almost ok <br/>";
}

/* ex7 */
$var8=1;
$i8=1;

while ($var8 < 100)
{
    echo $i8." - We hold the good end <br/>";
    $var8=$var8+15;
    $i8++;
}

/* ex 8 */
$var9=200;
$i9=1;

while ($var9 >= 0)
{
    echo $i9." - Finally!!! <br/>";
    $var9=$var9-12;
    $i9++;
}





?>