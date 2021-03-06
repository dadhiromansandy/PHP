<?php
$n=5;

for($i=1; $i<=$n; $i++){
    for($j=$n; $j>=$i; $j--){
        print('&nbsp'); //spasi
		
    }
    for($k=1; $k<=$i; $k++){
        echo $i;
		echo " ";
    }
    echo "<br/>";
}