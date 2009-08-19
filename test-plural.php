<?php
include 'plural.php';
function check($tests, $function) {
	$flag = true;     
	foreach ($tests as $key => $value)
		if ($function($key) != $value) {
			$flag = false;
			echo 'For '.$key.' retult '.($function($key)).' not matchs with '.$value."\n";
		}
	if ($flag)
		echo "Test passed\n";
	else 
		echo "Test failed\n"; 
}
// Check all rules for plural
echo "\n'O' ends test: \n"; 
check(array('tomato' => 'tomatoes', 'potato' => 'potatoes'), plural); 
echo "'O' exceptions: \n"; 
check(array('kilo' => 'kilos', 'photo' => 'photos', 'piano' => 'pianos'), plural); 
echo "'S' ends test: \n"; 
check(array('kilos' => 'kilos', 'checks' => 'checks', 'kiss' => 'kisses', 'rss' => 'rsses'), plural); 
echo "'X' ends test: \n"; 
check(array('box' => 'boxes'), plural); 
echo "'H' ends test: \n"; 
check(array('bush' => 'bushes', 'church' => 'churches'), plural); 
echo "'F' and 'E' ends test: \n"; 
check(array('life' => 'lives', 'wife' => 'wives', 'wolf' => 'wolves'), plural); 
echo "Check exceptions: \n"; 
check(array('foot' => 'feet', 'ox' => 'oxen', 'man' => 'men', 'sheep' => 'sheep'), plural); 
echo "'Y' ends test: \n"; 
check(array('money' => 'moneys', 'baby' => 'babies'), plural); 
echo "Normal 's' adding: \n"; 
check(array('test' => 'tests', 'network' => 'networks'), plural); 
// Check all rules for singular 
echo "\n'O' ends: \n"; 
check(array('tomatoes' => 'tomato', 'potatoes' => 'potato', 'kilos' => 'kilo', 'pianos' => 'piano'), singular); 
echo "'E' and 'F' ends: \n"; 
check(array('lives' => 'life', 'wives' => 'wife', 'wolves' => 'wolf', 'knives' => 'knife', 'messages' => 'message'), singular); 
echo "'Y' end test: \n"; 
check(array('moneys' => 'money', 'babies' => 'baby'), singular); 
echo "'X' end test: \n"; 
check(array('boxes' => 'box', 'oxen' => 'ox'), singular); 
echo "'H' end test: \n"; 
check(array('bushes' => 'bush', 'churches' => 'church'), singular); 
echo "'S' test ends: \n"; 
check(array('kisses' => 'kiss', 'tests' => 'test', 'kiss' => 'kiss', 'miss' => 'miss'), singular); 
echo "Check for exceptions: \n"; 
check(array('men' => 'man', 'sheep' => 'sheep', 'women' => 'woman'), singular);
?>
