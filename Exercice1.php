	sort($liaisons);
	
	for ($i = 0 ; $i < count($liaisons); $i ++){
		$code = explode(":", $liaisons[$i])[1];
		echo "\t- $code\n";
	}
