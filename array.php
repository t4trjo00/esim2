<?php include 'menu.php'; ?>
<h1>php Array</h1>

<?php
$asiakkaat = array(
	array("en" => 'Mikko', "sn" => 'Mallikas'),
	array("en" => 'Mio', "sn" => 'Maiks'),
	array("en" => 'Milo', "sn" => 'Mallas'),
	array("en" => 'Miko', "sn" => 'Malias'),
	array("en" => 'Mako', "sn" => 'Malli')
	);
echo "<h2>Print_r</h2>";
print_r($asiakkaat);

?>
<h2>Tulostus foreach-loopilla</h2>
<?php
ini_set('display_errors', i);
foreach ($asiakkaat as $rivi) {
	echo 'Etunimi '.$rivi['en'].' Sukunimi ' .$rivi['sn']. '<br>';
}
?>

<h2>Tulostus taulukkona</h2>
<TABLE border=2>
	<TR><TH>Etunimi</TH><th>Sukunimi</th></TR>
	<?php 
	foreach ($asiakkaat as $rivi) {
		echo '<tr><td>'.$rivi['en']. '</td><td>'.$rivi['sn'].'</td></tr>';
	}

	 ?>


</TABLE>

<?php include 'footer.php'; ?>