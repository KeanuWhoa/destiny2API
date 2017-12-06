<?php

class destinyCharacters{
	
	function destinyCharacterInfo($memID, $charIDs){
		include('destinyCredentials.php');
		foreach($charIDs as $i){
			$ch3 = curl_init();
			curl_setopt($ch3, CURLOPT_URL, $bungieURL . "/Destiny2/1/Profile/".$memID."/Character/".$i."/?components=200");
			curl_setopt($ch3, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));
			curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, 0);

			$json3[] = json_decode(curl_exec($ch3), true);

			curl_close($ch3);
		}
		
		return $json3;
		
	}
	
}

?>