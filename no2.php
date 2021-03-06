<?php
piramida_fibonacci(24); // Jumlah Tingkatan atau deret
function print_deret_fibonacci($jumlah)

{
  // siapkan 2 angka awal
  $angka1=0;
  $angka2=1;
  
 
  $hasil = "$angka2";
 
  for ($i=0; $i<$jumlah-1; $i++)
  {
    // hitung angka fibonacci
    $output = $angka2 + $angka1;
	
    $hasil = $hasil." $output";
  
    //perhitungan berikutnya
    $angka1 = $angka2;
    $angka2 = $output;
  }
  return $hasil;
}
  
function piramida_fibonacci($tingkat){
  for ($i=1; $i<$tingkat+1; $i++)
  {
    echo print_deret_fibonacci($i);
    echo "<br>";
  }
}
?>