<?php

#condiciones 
$a = 5;
$b = 10;

if($a > $b){

	echo "a es mayor que b";
}

else if ($a == $b) {

	echo "a es igual que b";
}

else {

	echo "a es menor que b";
}

echo "<br><br>";
#suiche

$dia = "viernes";

switch ($dia) {
	case 'sabado':
		echo "voy a estudiar php";

		break;

		case 'domingo':
			echo "voy a descanzar";
			break;

			case 'viernes':
				echo "voy de fiesta";
				break;


	
	default:
		echo "voy a la universidad";
		break;
}
echo "<br><br>";


#while

$n = 1;

while ($n < 5) {
	$n++;
	echo $n;
}


?>