<?php

class destinyStats{
	
	function getStats($memID, $charID, $type){
		include('destinyCredentials.php');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $bungieURL . "/Destiny2/1/Account/".$memID."/Character/".$charID."/Stats/?modes=".$type."");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$json[] = json_decode(curl_exec($ch), true);

		curl_close($ch);
		
		return $json;	
	}
	
}

?>