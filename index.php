<?php
	$flength = htmlspecialchars($_POST['flength']);
	$famount = htmlspecialchars($_POST['famount']);
	$fchar = htmlspecialchars($_POST['fchar']);

function randomPassword($flength, $famount, $fchar) {
    $pass = array();

    for ($i = 0; $i < $famount ; $i++) {
        $n = substr(str_shuffle($fchar),0,$flength);
        $pass[$i] = $n;
	echo $n;
	echo "<br>";
    }
}

echo "Anzahl der ausgegebenen Passwörter: $famount <br>";
echo "Länge der ausgegebenen Passwörter: $flength <br>";
echo "<br>";
echo "Generierte Passwörter: <br>";
echo "<br>";

$result = randomPassword($flength, $famount, $fchar);
echo $result;

?>