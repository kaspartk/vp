<?php
$username = "Kaspar Taniel Kannel"
$fulltimenow = date("d.m.Y H:i:s");
$hournow = date("H");
$partofday = "lihtsalt aeg"
if($hournow < 7){
	$partofday = "uneaeg";
}
if($hournow >= 8 $hournow < 18{
	$partofday = "akadeemilise aktiivsuse aeg";
	//vaatame semestri kulgu
	$semesterstart = new DateTime("2020-8-31");
	$semesterend = new DateTime("2020-12-13");
	//selgitame välja nende vahe ehk erinevuse
	$semesterduration = $semesterstart->diff($semesterend);
	//leiame selle päevade arvuna
	$semesterdurationdays = $semesterduration->format("%r%a");
	
	//tänane päev
	$today - new DateTime("now");
	//if($fromsemesterstartdays < 0) (semester pole peale hakkanud)
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>Kaspar Taniel Kannel meister progeja</title>

</head>
<body>
  <h1>Kaspar Taniel Kannel (1999)</h1>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>Leht on loodud veebiprogrammeerimise raames <a href="http://www.tlu.ee">Tallinna Ülikooli</a> Digitehnoloogia Instituudis ja muu selline jama mis ma siia kirjutama pean.</p>
  <p>Lehe avamise hetkel oli: <?php echo $fulltimenow; ?>. </p>
  <p><?php "parajasti on " .$partofday ."."; ?></p>

</body>
</html>