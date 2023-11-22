<?php
echo "Saisir le nom du port :\n" ;
$p = strtolower(rtrim(fgets( STDIN ) ) );

switch($p){
	case strtolower("Quiberon");
		$p= " Morbihan";
	case strtolower("Sauzon");
		$p= " Morbihan";
	case strtolower("Le Palais");
		$p= " Morbihan";
			echo "$p";
	break ;
	case strtolower("Concarneau");
		$p= "Finistère";
	case strtolower("Douarnenez");
		$p= " Finistère";
			echo "$p";
	break ;
	case strtolower("Pirac-sur-Mer");
		$p= "Loire-Atlantique";
	case strtolower("Pornic");
		$p= "Loire-Atlantique";
			echo"$p";
	break ;
	case strtolower("ile-d'Yeu");
		$p= "Vendée";
			echo"$p";
	break;
	default :
			echo"Port non recensé" ;
		}
