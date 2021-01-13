<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Drinks</title>
<link rel="stylesheet" href="../../style/style.css">

</head>
<body>

<center><h1>Drinks</h1></center>

<div style="align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">

<?php
// bibliote de leitura api //
function my_file_get_contents($site_url){
$ch = curl_init();
$timeout = 10;	curl_setopt ($ch, CURLOPT_URL, $site_url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
return $file_contents;
}

$arquivo = "https://www.thecocktaildb.com/api/json/v1/1/list.php?g=list";
$info = my_file_get_contents($arquivo);
$lendo = json_decode($info);
foreach($lendo->drinks as $campo){;
?>

<a href="index.php?filter=<?php $filter = $campo->strGlass;echo str_replace(" ", "_", "$filter");?>"><div class="zoom" style="float: left; width: 200px; height: 200px; background: #dddddd; padding:4px;border-style: solid;border-color: #ffffff;">
<div class="label"><?php print_r($campo->strGlass);?></div>
</div></a>

<?php
}
?>
</div>

</body>
</html>