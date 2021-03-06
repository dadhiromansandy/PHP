<?php
$jumlah=5;

for($a=2; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        print('&nbsp');

    }
    for($c=2; $c<=$a; $c++){
        echo $b++;
		echo " ";
    }
    echo "<br/>";
}