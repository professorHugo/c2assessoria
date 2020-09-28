<?php

	$termo = utf8_decode($_GET['termo']);
	$qtdCarac = strlen($termo);
	
	$resultado = '';
	$paises = array("ACURA", "ADAMO", "AGRALE", "ALFA ROMEO", "AM GEN", "AMERICAR", "ASIA", "ASTON MARTIN", "AUDI", "AUSTIN", "BAJA", "BEACH", "BENTLEY", "BIANCO", "BMW", "BRM", "BUGATTI", "BUGGY", "BUGRE", "BUGWAY", "BUICK", "CADILLAC", "CARVER", "CBT", "CHAMONIX", "CHANA", "CHEDA", "CHERY", "CHEVROLET", "CHRYSLER", "CITROËN", "COYOTE", "CROSS LANDER", "DAEWOO", "DAIHATSU DE SOTO", "DKW-VEMAG", "DODGE", "DS", "DUNNAS", "EAGLE", "EFFA", "EMIS", "ENGESA", "ENVEMO", "FARUS", "FERCAR BUGGY", "FERRARI", "FIAT", "FIBRAVAN", "FNM", "FORD", "FYBER", "GEELY", "GEO", "GMC", "GRANCAR", "GREAT WALL", "GURGEL", "HAFEI", "HB", "HITECH ELETRIC", "HOFSTETTER", "HONDA", "HUMMER", "HYUNDAI", "INCOFER", "INFINITI", "INTERNATIONAL", "ISUZU", "IVECO", "JAC", "JAGUAR", "JEEP", "JINBEI", "JPX", "KIA", "KOENIGSEGG", "L AUTOMOBILE", "L'AUTO CRAFT", "LADA", "LAMBORGHINI", "LANCIA", "LAND ROVER", "LEXUS", "LIFAN", "LINCOLN", "LOBINI", "LOTUS", "MAHINDRA", "MARCOPOLO", "MARINA´S", "MASERATI", "MATRA", "MAYBACH", "MAZDA", "MCLAREN", "MENON", "MERCEDES-BENZ", "MERCURY", "MG", "MINI", "MITSUBISHI", "MIURA", "MORRIS", "MP LAFER", "MPLM", "NISSAN", "NISSIN", "OLDSMOBILE", "OPEL", "PAG", "PAGANI", "PEUGEOT", "PLYMOUTH", "PONTIAC", "PORSCHE", "PUMA", "RELY", "RENAULT", "RENO", "ROLLS-ROYCE", "ROMI", "ROVER", "SAAB", "SANTA MATILDE", "SATURN", "SEAT", "SHELBY", "SHINERAY", "SHORT", "SIMCA", "SMART", "SPYKER", "SSANGYONG", "STUDEBAKER", "SUBARU", "SUZUKI", "TAC", "TESLA", "TOYOTA", "TRIUMPH", "TROLLER", "UNIMOG", "VOLKSWAGEN", "VOLVO", "WAKE", "WALK", "WAY BRASIL", "WILLYS");

	
	for($i = 0, $tam = count($paises); $i < $tam; $i++){
		
		if(strcasecmp(substr($paises[$i], 0, $qtdCarac), $termo) == 0){
			$resultado .= $paises[$i].',';
		}
		
	}
	
	$resultado = rtrim($resultado, ',');
	echo utf8_encode($resultado);
?>