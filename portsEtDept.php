<?php
echo "Saisir le nom du port :\n" ;
$p = rtrim( fgets( STDIN ) ) ;

switch($p){
	case "Quiberon":
		$p= " Morbihan";
	case "Sauzon";
		$p= " Morbihan";
	case "Le Palais";
		$p= " Morbihan";
			echo "$p";
	break ;
	case "Concarneau";
		$p= "Finistère";
	case "Douarnenez";
		$p= " Finistère";
			echo "$p";
	break ;
	case "Pirac-sur-Mer";
		$p= "Loire-Atlantique";
	case "Pornic";
		$p= "Loire-Atlantique";
			echo"$p";
	break ;
	case "ile-d'Yeu";
		$p= "Vendée";
			echo"$p";
	break;
	default :
			echo"Port non recensé" ;
		}
