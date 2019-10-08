<?php
$repeat = 0;

while ($repeat < 10)
{
    echo '<p>Alex and Rocky '. $repeat. 'th time. </p>' ;
    $repeat++;
}


$repetition = 0;

for ($repetition =0; $repetition <10; $repetition++)
{
    echo '<p>Je ne dois pas copier sur mon voison ' . $repetition . 'th time.  </p>';
}

?>

<!-- ex3 -->
<?php

$lineNumber = 1;

while ($lineNumber  <=5)
{
    echo "this is line number: " . $lineNumber . "<br />";
    $lineNumber ++;
}
?>

<?php
for ($line = 1; $line <=10; $line++)
{
    echo "this is line number: ". $line . "<br/>";
}

?>