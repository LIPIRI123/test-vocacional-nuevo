<?php
	$v=[0,0,0,0,0];
	$v1=['a','b','c','d','e'];
	if(isset($_POST['enviar'])){

		$ca=0;$cb=0;$cc=0,$cd=0;$ce=0;

		for($i=0;$i<10;$i++){
			$var;
			if($i==0){
				$var=$_POST['c1'];

			}
			if($i==1){
				$var=$_POST['c2'];

			}
			if($i==2){
				$var=$_POST['c3'];

			}
			if($i==3){
				$var=$_POST['c4'];

			}if($i==4){
				$var=$_POST['c5'];

			}
			if($i==5){
				$var=$_POST['c6'];

			}if($i==6){
				$var=$_POST['c7'];

			}
			if($i==7){
				$var=$_POST['c8'];

			}if($i==8){
				$var=$_POST['c9'];

			}
			if($i==9){
				$var=$_POST['c10'];

			}

			if($var=='a'){
				$ca++;
			}
			if($var=='b'){
				$cb++;

			}
			if($var=='c'){
				$cc++;
			}if($var=='d'){
				$cd++;
			}if($var=='e'){
				$ce++;
			}

				
		}
		$v[0]=$ca;$v[1]=$cb;$v[2]=$cc;$v[3]=$cd;$v[4]=$ce;


			for($i=0;$i<5-1;$i++){
				for($j=$i+1;$j<5;$j++){
					if($v[$i]<$v[$j]){
						$aux=$v[$i];
						$v[$i]=$v[$j];
						$v[$j]=$aux;

					}
				}
			}
			

			}


	}




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>rRESULTADOS DEL TEST VOCACIONAL</h1>
	<h1><?php
		for($i=0;$i<4;$i++){
			echo $v1[$i]." = ".$v[$i]."<br>";
		}
	echo "<br><br>"

	?>
	

	</h1>
	<h1>TU maxima nota son: <?php  echo $v[0]." , y tu otra nota maxima es de".$v[1];?></h1>>
</body>
</html>