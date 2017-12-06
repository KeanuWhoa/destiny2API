<?php

class destinyINI{
	
	function startDestiny($gtag){
		include('destinyCredentials.php');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $bungieURL . "/Destiny2/SearchDestinyPlayer/1/".$gtag."/");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$json = json_decode(curl_exec($ch), true);

		curl_close($ch);

		$memID = $json['Response'][0]['membershipId'];

		$ch2 = curl_init();
		curl_setopt($ch2, CURLOPT_URL, $bungieURL . "/Destiny2/1/Profile/".$memID."/?components=100");
		curl_setopt($ch2, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);

		$json2 = json_decode(curl_exec($ch2), true);

		curl_close($ch2);

		foreach($json2['Response']['profile']['data']['characterIds'] as $i){
			$charIDs[] = $i;
		}
		
		return array($memID, $charIDs);
	}
	
}

?>