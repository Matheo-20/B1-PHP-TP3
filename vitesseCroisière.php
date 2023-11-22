<?php
echo "Sasir la vitesse :\n" ;
$vitesseSaisie = rtrim( fgets( STDIN ) ) ;

if( $vitesseSaisie== 0 ){
	echo "Vitesse : 0 noeud \n" ;
}
elseif( $vitesseSaisie < 0){
	echo "Vitesse : 0 noeud \n";
}
else {
	echo "vitesse :", $vitesseSaisie ," \n";
}

?>
