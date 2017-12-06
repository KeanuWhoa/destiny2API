<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="style.css">
<?php

date_default_timezone_set("America/New_York");
require_once('smarty/libs/Smarty.class.php');
$smarty = new Smarty();

include('destinyCredentials.php');
include('destinyINI.php');
include('destinyStats.php');
include('destinyCharacters.php');

$pageID = trim($_SERVER['REQUEST_URI'], 'destiny/');

if($pageID == ""){
	$pageID = "home";
}

$destinyINI = new destinyINI();
$charIDs = $destinyINI->startDestiny('Ry Town');

$destinyCharacters = new destinyCharacters();
$charInfo = $destinyCharacters->destinyCharacterInfo($charIDs[0],$charIDs[1]);

$destinyStats = new destinyStats();
$raidStats = $destinyStats->getStats($charIDs[0],$charIDs[1][0],'4');

$raidStats = $raidStats[0]['Response']['raid']['allTime'];
/*foreach($raid as $key => $i){
	if($i['basic']['displayValue'] != 0){
		echo "<p>".preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $key).": ".$i['basic']['displayValue']."</p>";
	}
	if(empty($i['pga']['displayValue']) || $i['pga']['displayValue'] == 0){

	}else{
		echo "<p>Average ".preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $key).": ".$i['pga']['displayValue']."</p><br/>";	
	}
	if((empty($i['pga']['displayValue']) || $i['pga']['displayValue'] == 0) && $i['basic']['displayValue'] != 0){
		echo "<br/>";
	}
}*/

/*echo "<pre>";
print_r($raidStats);
echo "</pre>";*/

echo $pageID;

$smarty->assign('pageID', $pageID);
$smarty->assign('raidStats', $raidStats);
$smarty->display($pageID.'.html');

?>



<!--<h2>Destiny 2 Raid Stats</h2>

<div class="charSelect">
<?php
foreach($charInfo as $i){
	echo "<div class='charContainer'>";
	echo "<img class='emblemBG' src='https://www.bungie.net/".$i['Response']['character']['data']['emblemBackgroundPath']."'/>";
	echo "<img class='emblemIco' src='https://www.bungie.net/".$i['Response']['character']['data']['emblemPath']."'/>";
	echo "</div>";
}
?>-->


</div>
