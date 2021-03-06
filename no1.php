<!DOCTYPE HTML>  
<html>
<head>
<h3> Oleh : Dadhi Roman Sandy </h3>
</head>
<body>
<h2>Menentukan suatu bilangan integer genap atau ganjil</h2>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  Masukan Angka: <input type="text" name="bil">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<br>
	<?php
	$tampil = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			if(!is_numeric($bil)){   //jika bilangan Bukan angka maka muncul pesan
        echo " $bil Bukanlah angka, Silahkan masukan bilangan";
    }else if ($bil % 2 == 0){
			    echo "$bil Merupakan Bilangan Genap";
		}else {
			    echo "$bil Merupakan Bilangan Ganjil";
		}
		
	}
?>
</body>
</html>