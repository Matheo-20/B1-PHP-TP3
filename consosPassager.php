<?php
echo "Sasir la somme due par le passageur :\n" ;
$sommeDue = rtrim( fgets( STDIN ) ) ;

if( $sommeDue <= 0 ){
	echo "Le passager s'est acquitté de la somme due.\n" ;
}
else {
	 echo "Le passager doit  " , $sommeDue , " euros.\n" ;
}
?>
